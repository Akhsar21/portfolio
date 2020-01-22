@extends('layouts.app')

@section('title', 'All Categories')
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')
                <a href="{{ route('categories.create') }}" class="btn btn-success btn-square btn-sm float-right"
                    title="Add New Category">
                    <i class="cil-plus" aria-hidden="true"></i> Add New
                </a>
            </div>
            <div class="card-body">
                <div class="list-group">
                    @forelse ($categories as $category)
                    <a class="list-group-item list-group-item-action"
                        href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
                    @empty
                    <h4>No Category</h4>
                    @endforelse
                </div>
            </div>
            <div class="pagination-wrapper"> {!! $categories->appends(['search' =>
                Request::get('search')])->render() !!}
            </div>
        </div>
    </div>
</div>

{{-- @include('admin.categories.create') --}}
@endsection