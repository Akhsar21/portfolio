@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-4 col-md-5">
        @include('admin.profiles.tab.user')
    </div>
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-dark active show" id="pills-timeline-tab" data-toggle="pill" href="#current-month"
                        role="tab" aria-controls="pills-timeline" aria-selected="false">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab"
                        aria-controls="pills-profile" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab"
                        aria-controls="pills-setting" aria-selected="false">Setting</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="current-month" role="tabpanel"
                    aria-labelledby="pills-timeline-tab">
                    @include('admin.profiles.tab.timeline')
                </div>
                <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @include('admin.profiles.tab.profile')
                </div>
                <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                    @include('admin.profiles.tab.setting')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link href="/assets/vendors/@coreui/icons/css/brand.min.css" rel="stylesheet">
<link href="/assets/css/tab.css" rel="stylesheet">
@endsection