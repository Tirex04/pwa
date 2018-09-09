importScripts("https://storage.googleapis.com/workbox-cdn/releases/3.4.1/workbox-sw.js");


workbox.routing.registerRoute(/\.(?:png|gif|jpg|svg)$/,
workbox.strategies.staleWhileRevalidate({
    cacheName:"images"
})
);

workbox.routing.registerRoute(/\.(?:js|css)$/,
workbox.strategies.staleWhileRevalidate({
    cacheName: 'static-resources'
})
);

workbox.routing.registerRoute('http://localhost:8000/fonts/fontawesome-webfont5b62.html?v=4.6.3',
workbox.strategies.staleWhileRevalidate({
cacheName:'fonts'    
})
);

workbox.precaching.precacheAndRoute([]);

workbox.precaching.precacheAndRoute([
    {
        "url": '/',
        "revision": "456"
    },
    {
        "url": 'offline',
        "revision":"123"
    }
]);

const customHandler = async (args) => {
    try {
        return await workbox.strategies.staleWhileRevalidate({
            cacheName: 'pages',
            plugins: [
                new workbox.expiration.Plugin({
                    maxEntries: 20,
                    purgeOnQuotaError: true
                })
            ]
        }).handle(args) || caches.match('offline')
    } catch (error) {
        return caches.match('offline')
    }
}

const navigationRoute = new workbox.routing.NavigationRoute(customHandler, {
    // dont cache this urls
    blacklist: [
        new RegExp('/(login|register|password|auth)'),
        new RegExp('/admin')
    ]
})

workbox.routing.registerRoute(navigationRoute)
