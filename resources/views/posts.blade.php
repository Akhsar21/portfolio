@extends('layouts.app')

@section('content')
<div class="blog-post">
    <div class="blog-post__img">
        <img src="{{ asset('img/1.png') }}" alt="">
    </div>
    <div class="blog-post__info">
        <div class="blog-post__date">
            <span>Sunday</span>
            <span>Oktober 27 2019</span>
        </div>
        <h1 class="blog-post__title">Shark Sighting</h1>
        <p class="blog-post__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eligendi architecto quod, sit a expedita
            quos iure, asperiores incidunt culpa dolore accusamus nobis ab perferendis labore molestiae quisquam veniam
            sunt.
        </p>
        <a href="#" class="blog-post__cta">Read more</a>
    </div>
</div>
@endsection

@section('styles')
<link href="{{ asset('css/blog.css') }}" rel="stylesheet">
@endsection