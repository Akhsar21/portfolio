@extends('layouts.app')

@section('title', 'Create New Post')
@section('body','c-app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">@yield('title')</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" accept-charset="UTF-8"
                        enctype="multipart/form-data">

                        @include ('admin.posts.form', ['formMode' => 'publish'])

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

