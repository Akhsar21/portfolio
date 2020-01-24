<?php

namespace App\Http\Controllers;

use App\Actions\Posts\DeletePostAction;
use App\Actions\Posts\GetAllPostsAction;
use App\Actions\Posts\StorePostAction;
use App\Actions\Posts\UpdatePostAction;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param GetAllPostsAction $getAllPostsAction
     * @return Factory|View
     */
    public function index(Request $request, GetAllPostsAction $getAllPostsAction)
    {
        $posts = $getAllPostsAction->run($request);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $post = new Post();

        return view('admin.posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @param StorePostAction $storePostAction
     * @return RedirectResponse|Redirector
     */
    public function store(PostRequest $request, StorePostAction $storePostAction)
    {
        $storePostAction->run($request);
        return redirect(route('posts.index'))->with('flash_message', 'Post added!');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Factory|View
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Factory|View
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param Post $post
     * @param UpdatePostAction $updatePostAction
     * @return RedirectResponse|Redirector
     */
    public function update(PostRequest $request, Post $post, UpdatePostAction $updatePostAction)
    {
        $updatePostAction->run($request, $post);
        return redirect(route('posts.index'))->with('flash_message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @param DeletePostAction $deletePostAction
     * @return RedirectResponse
     */
    public function destroy(Post $post, DeletePostAction $deletePostAction)
    {
        $deletePostAction->run($post);
        return back()->with('flash_message', 'Post deleted!');
    }
}
