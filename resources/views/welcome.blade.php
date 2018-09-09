@extends('layouts.app')

@section('content')
    <div class="title-bar">
        <div class="title-bar-actions">
            <select class="selectpicker dropdown" name="period" data-dropdown-align-right="true" data-style="btn-default btn-sm" data-width="fit">
                <option value="today">Today</option>
                <option value="yesterday">Yesterday</option>
                <option value="last_7d" selected="selected">Last 7 days</option>
                <option value="last_1m">Last 30 days</option>
                <option value="last_3m">Last 90 days</option>
            </select>
        </div>
        <h1 class="title-bar-title">
            <span class="d-ib">Dashboard</span>
            <span class="d-ib">
                <a class="title-bar-shortcut" href="#" title="Add to shortcut list" data-container="body" data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right" data-toggle="tooltip">
                    <span class="sr-only">Add to shortcut list</span>
                </a>
            </span>
        </h1>
        <p class="title-bar-description">
            <small>You can personalize your dashboard by using <a href="widgets.html">widgets</a>.</small>
        </p>
    </div>
    <div class="row gutter-xs">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <span class="bg-gray sq-64 circle">
                                <span class="icon icon-flag"></span>
                            </span>
                        </div>
                        <div class="media-middle media-body">
                            <h3 class="media-heading">
                                <span class="fw-l">1,256 Issues</span>
                                <span class="fw-b fz-sm text-danger">
                                    <span class="icon icon-caret-up"></span>
                                    15%
                                </span>
                            </h3>
                            <small>6 issues are unassigned</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <div class="media-chart">
                                <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#d9230f", "#777"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="64" width="64"></canvas>
                            </div>
                        </div>
                        <div class="media-middle media-body">
                            <h2 class="media-heading">
                                <span class="fw-l">879</span>
                                <small>Resolved</small>
                            </h2>
                            <small>More than 70% resolved issues</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                            <div class="media-chart">
                                <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#777", "#d9230f"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="64" width="64"></canvas>
                            </div>
                        </div>
                        <div class="media-middle media-body">
                            <h2 class="media-heading">
                                <span class="fw-l">377</span>
                                <small>Unresolved</small>
                            </h2>
                            <small>Less than 30% unresolved issues</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gutter-xs">
        <div class="col-md-8">
            <div class="row gutter-xs">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions">
                                <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                <button type="button" class="card-action card-reload" title="Reload"></button>
                                <button type="button" class="card-action card-remove" title="Remove"></button>
                            </div>
                            <strong>Traffic Source</strong>
                        </div>
                        <div class="card-body" data-toggle="match-height">
                            <ul class="list-group list-group-divided">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-middle media-body">
                                            <h6 class="media-heading">
                                                <span class="text-muted">Direct</span>
                                            </h6>
                                            <h4 class="media-heading">67%
                                                <small>124,029</small>
                                            </h4>
                                        </div>
                                        <div class="media-middle media-right">
                                            <span class="bg-primary circle sq-40">
                                                <span class="icon icon-arrow-right"></span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-middle media-body">
                                            <h6 class="media-heading">
                                                <span class="text-muted">Referrals</span>
                                            </h6>
                                            <h4 class="media-heading">21%
                                                <small>38,875</small>
                                            </h4>
                                        </div>
                                        <div class="media-middle media-right">
                                            <span class="bg-primary circle sq-40">
                                                <span class="icon icon-link"></span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-middle media-body">
                                            <h6 class="media-heading">
                                                <span class="text-muted">Search Engines</span>
                                            </h6>
                                            <h4 class="media-heading">12%
                                                <small>22,214</small>
                                            </h4>
                                        </div>
                                        <div class="media-middle media-right">
                                            <span class="bg-primary circle sq-40">
                                                <span class="icon icon-search"></span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions">
                                <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                <button type="button" class="card-action card-reload" title="Reload"></button>
                                <button type="button" class="card-action card-remove" title="Remove"></button>
                            </div>
                            <strong>Top Active Pages</strong>
                        </div>
                        <div class="card-body" data-toggle="match-height">
                            <table class="table table-borderless table-middle">
                                <tbody>
                                    <tr>
                                        <td class="col-xs-1">1.</td>
                                        <td class="col-xs-6">
                                            <a class="link-muted" href="#">/getting-started</a>
                                        </td>
                                        <td class="col-xs-2">
                                            <div class="text-right">185,118</div>
                                        </td>
                                        <td class="col-xs-3">
                                            <div class="progress progress-sm m-y-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xs-1">2.</td>
                                        <td class="col-xs-6">
                                            <a class="link-muted" href="#">/pricing</a>
                                        </td>
                                        <td class="col-xs-2">
                                            <div class="text-right">185,118</div>
                                        </td>
                                        <td class="col-xs-3">
                                            <div class="progress progress-sm m-y-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xs-1">3.</td>
                                        <td class="col-xs-6">
                                            <a class="link-muted" href="#">/blog</a>
                                        </td>
                                        <td class="col-xs-2">
                                            <div class="text-right">138,839</div>
                                        </td>
                                        <td class="col-xs-3">
                                            <div class="progress progress-sm m-y-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                    <span class="sr-only">75% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xs-1">4.</td>
                                        <td class="col-xs-6">
                                            <a class="link-muted" href="#">/support</a>
                                        </td>
                                        <td class="col-xs-2">
                                            <div class="text-right">138,220</div>
                                        </td>
                                        <td class="col-xs-3">
                                            <div class="progress progress-sm m-y-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                    <span class="sr-only">75% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-xs-1">5.</td>
                                        <td class="col-xs-6">
                                            <a class="link-muted" href="#">/about-us</a>
                                        </td>
                                        <td class="col-xs-2">
                                            <div class="text-right">17,385</div>
                                        </td>
                                        <td class="col-xs-3">
                                            <div class="progress progress-sm m-y-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="15000" style="width: 50%">
                                                    <span class="sr-only">50% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
