<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UpdatePostAction
{
    protected $preparePostAction;

    public function __construct(PreparePostAction $preparePostAction)
    {
        $this->preparePostAction = $preparePostAction;
    }

    public function run(Request $request, Post $post)
    {
        $requestData = $this->preparePostAction->run($request);

        $post->update($requestData);
        $post->tags()->sync($request->tags);

        Cache::forget("singlePost-{$post->slug}");

        return $post;
    }
}
