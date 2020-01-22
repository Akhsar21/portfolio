<?php

namespace App\Http\Controllers;

use App\Actions\Posts\GetPublicPostAction;
use App\Actions\Posts\GetPublicSimilarPosts;

class PublicPostsController extends Controller
{
    public function index()
    {
        return view('pages.blogs.index');
    }

    public function show(
        $slug,
        GetPublicPostAction $getPublicPostAction,
        GetPublicSimilarPosts $getPublicSimilarPosts
    ) {
        $post = $getPublicPostAction->run($slug);
        $similarPosts = $getPublicSimilarPosts->run($post);
        // dd($similarPosts);
        return view('pages.blogs.show', compact('post', 'similarPosts'));
    }
}
