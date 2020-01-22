@extends('layouts.app')

@section('title', 'Create New Projects')
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')</div>
            <div class="card-body">

                <form method="POST" action="{{ route('projects.store') }}" accept-charset="UTF-8"
                    enctype="multipart/form-data">

                    @include ('admin.projects.form', ['formMode' => 'create'])

                </form>
            </div>
        </div>
    </div>
</div>
@endsection