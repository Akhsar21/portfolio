@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="post">
                <div class="img-wrapper">
                    <img src="{{ asset($post->thumbnail) }}" alt="">
                    <div class="likes">
                        <span class="heart"><i class="fa fa-user"></i> {{ $post->user->name }}</span>
                    </div>
                </div>
                <div class="content-wrapper">
                    <h3 class="title">{{ Str::limit($post->title, 15) }}</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime velit dolor consequuntur quo,
                        nulla, eligendi voluptas deserunt neque id repudiandae in, rerum quod hic odit?</p>
                </div>
                <div class="comments-readmore">
                    <a href="#" class="comments">
                        <span><i class="fa fa-comment"></i></span>
                        <span class="comment-count">382</span>
                        <span class="text">comments</span>
                    </a>
                    <a href="{{ route('blog.post', $post) }}" class="readmore">
                        {{-- <div class="readmore"> --}}
                        <div class="dot dot1"></div>
                        <div class="dot dot2"></div>
                        <div class="dot dot3"></div>
                        {{-- </div> --}}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('styles')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection