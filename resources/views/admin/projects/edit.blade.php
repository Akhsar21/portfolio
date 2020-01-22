@extends('layouts.app')

@section('title', 'Edit Projects for ' . $project->name)
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')</div>
            <div class="card-body">

                <form method="POST" action="{{ route('projects.update', $project->id) }}" accept-charset="UTF-8"
                    enctype="multipart/form-data">
                    @method('PATCH')

                    @include ('admin.projects.form', ['formMode' => 'edit'])

                </form>

            </div>
        </div>
    </div>
</div>
@endsection