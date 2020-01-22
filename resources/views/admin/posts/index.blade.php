@extends('layouts.app')

@section('title', 'All Posts')
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">@yield('title')
                <a href="{{ route('posts.create') }}" class="btn btn-success btn-square btn-sm float-right" title="Add New post">
                    <i class="cil-plus" aria-hidden="true"></i> Add New
                </a>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-hover mb-0">
                    <thead class="">
                        <tr>
                            <th scope="row">#</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>
                                @if (!empty($item->thumbnail))
                                <img class="img-thumbnail" width="50" src="{{ asset($item->thumbnail) }}"
                                    alt="thumbnail">
                                @endif
                            </td>
                            <td>{{ Str::limit($item->title, 30) }}</td>
                            <td>{{ Str::limit($item->slug, 30) }}</td>
                            <td>{{ !empty($item->category) ? $item->category->name : '' }}</td>
                            <td>
                                <a href="{{ route('posts.show', $item) }}" title="View post"
                                    class="btn btn-info btn-sm">
                                    <i class="cil-scrubber" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('posts.edit', $item) }}" title="Edit post"
                                    class="btn btn-primary btn-sm">
                                    <i class="cil-pencil" aria-hidden="true"></i>
                                </a>

                                <form method="POST" action="{{ route('posts.destroy', $item) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete post"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="cil-trash"
                                            aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                <h4>Nothing Posts</h4>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-3 content-center"> {!! $posts->appends(['search' =>
                    Request::get('search')])->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection