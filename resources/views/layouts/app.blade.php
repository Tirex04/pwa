<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body class="layout layout-header-fixed layout-sidebar-fixed">
    @include('partials.top_header')
    <div class="layout-main">
        @include('partials.sidebar')
        <div class="layout-content">
            <div class="layout-content-body">
                @yield('content')
            </div>
        </div>
        @include('partials.footer')
    </div>

    @include('partials.scripts')
</body>
</html>
