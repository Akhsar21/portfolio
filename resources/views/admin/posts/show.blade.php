@extends('layouts.app')

@section('title', 'Show post ' . $post->title)
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')
                <div class="float-right">
                    <a href="{{ route('posts.index') }}" title="Back" class="btn btn-warning btn-sm btn-square">
                        <i class="cil-window-minimize" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('posts.edit', $post) }}" title="Edit post"
                        class="btn btn-primary btn-sm btn-square">
                        <i class="cil-pencil" aria-hidden="true"></i>
                    </a>

                    <form method="POST" action="{{ route('posts.destroy', $post) }}" accept-charset="UTF-8"
                        style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm btn-square" title="Delete post"
                            onclick="return confirm(&quot;Confirm delete?&quot;)">
                            <i class="cil-x" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                            <th> Title </th>
                            <td> {{ $post->title }} </td>
                        </tr>
                        <tr>
                            <th> Content </th>
                            <td> {!! $post->content !!} </td>
                        </tr>
                        <tr>
                            <th> Slug </th>
                            <td> {{ $post->slug }} </td>
                        </tr>
                        <tr>
                            <th> Category </th>
                            <td> {{ $post->category->name }} </td>
                        </tr>
                        <tr>
                            <th> Tags </th>
                            <td>
                                @foreach ($post->tags as $tag)
                                <span class="badge badge-warning">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection