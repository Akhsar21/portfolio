@extends('layouts.front')

@section('title') {{ $post->title }} by {{ $post->user->name }} @endsection

@section('meta')
<meta name="description" content="{!! $post->description !!}">
<meta name="keywords" content="{{ $post->keywords }}">
<meta name="author" content="{{ $post->user->name }}">
@endsection

@section('styles')
<style>
    img {
        max-width: 100%;
    }
</style>
@endsection

@section('banner')
<!-- intro -->
<section class="iq-breadcrumb overview-block-pt text-center iq-bg iq-bg-fixed iq-over-black-90 iq-box-shadow"
    style="background: url({{ asset($post->thumbnail) }});">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title iq-breadcrumb-title iq-mtb-100">
                    <h1 class="title iq-tw-8 iq-font-white">{{ Str::limit($post->title, 20) }}</h1>
                    <div class="divider white"></div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="ion-home"></i> Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End intro -->
@endsection

@section('content')
<!-- Blog -->
<section id="blog" class="iq-page-blog overview-block-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="iq-blog-box">
                    <div class="iq-blog-image clearfix">
                        <img class="img-responsive center-block" src="{{ asset($post->thumbnail) }}" alt="#">
                    </div>
                    <div class="iq-blog-detail">
                        <div class="blog-title"> <a href="{{ route('blog.post', $post) }}">
                                <h5 class="iq-tw-6">{{ $post->title }}</h5>
                            </a> </div>
                        <div class="iq-blog-meta">
                            <ul class="list-inline">
                                <li><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ $post->created_at->diffForHumans() }}</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        5</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-share-alt" aria-hidden="true"></i> {{ $post->category->name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            {!! $post->content !!}
                        </div>
                        <ul class="iq-tags list-inline iq-mtb-50">
                            @foreach ($post->tags as $tag)
                            <li><a href="javascript:void(0)">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                        <div class="iq-post-author iq-mtb-20 iq-pall-30 green-bg">
                            <div class="iq-post-author-pic iq-mr-25">
                                <img alt="#" class="img-circle" src="{{-- images/testimonial/01.jpg --}}">
                            </div>
                            <div class="iq-comment-content">
                                <div class="iq-comment-author">
                                    <a class="lead iq-mtb-10 iq-tw-6 iq-font-white"
                                        href="javascript:void(0)">{{ $post->user->name }}</a>
                                </div>
                                <p class="iq-font-white">CEO &amp; It was popularised in the 1960s with the and more
                                    recently with desktop publishing software like Aldus PageMaker including versions of
                                    Lorem Ipsum.</p>
                            </div>
                        </div>

                        {{-- @include('layouts.partials.front.comment') --}}

                    </div>

                </div>
            </div>

            @include('layouts.partials.front.widget')

        </div>
    </div>
</section>
@endsection