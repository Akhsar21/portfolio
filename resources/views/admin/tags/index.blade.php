@extends('layouts.app')

@section('title', 'All Tags')
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')
                {{-- <button class="btn btn-success btn-square btn-sm float-right" title="Add new tag" type="button" data-toggle="modal"
                    data-target="#create"><i class="cil-plus" aria-hidden="true"></i> Add New
                </button> --}}
                <a href="{{ route('tags.create') }}" class="btn btn-success btn-square btn-sm float-right" title="Add New tag">
                    <i class="cil-plus" aria-hidden="true"></i> Add New
                </a>
            </div>
            <div class="card-body">
                <div class="list-group">
                    @forelse ($tags as $tag)
                    <a class="list-group-item list-group-item-action"
                        href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a>
                    @empty
                    <h4>No Tags</h4>
                    @endforelse
                </div>
            </div>
            <div class="pagination-wrapper"> {!! $tags->appends(['search' =>
                Request::get('search')])->render() !!}
            </div>
        </div>
    </div>
</div>

{{-- @include('admin.tags.create') --}}
@endsection