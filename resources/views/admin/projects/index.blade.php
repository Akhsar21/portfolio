@extends('layouts.app')

@section('title', 'All Projects')
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')
                <a href="{{ route('projects.create') }}" class="btn btn-success btn-sm float-right btn-square"
                    title="Add New category">
                    <i class="cil-plus" aria-hidden="true"></i> Add New
                </a>
            </div>
            <div class="card-body">
                <div class="list-group">
                    @forelse ($projects as $project)
                    <a class="list-group-item list-group-item-action"
                        href="{{ route('projects.show', $project) }}">{{ $project->name }}</a>
                    @empty
                    <h4>No Projects</h4>
                    @endforelse
                </div>
                <div class="pagination-wrapper"> {!! $projects->appends(['search' =>
                    Request::get('search')])->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection