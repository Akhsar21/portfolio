<?php

namespace App\Http\Controllers;

use App\Actions\Posts\GetPublicPostAction;
use App\Actions\Posts\GetPublicSimilarPosts;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PublicPostsController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('pages.blogs.index');
    }

    /**
     * @param $slug
     * @param GetPublicPostAction $getPublicPostAction
     * @param GetPublicSimilarPosts $getPublicSimilarPosts
     * @return Factory|View
     */
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
