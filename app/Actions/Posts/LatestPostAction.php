<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class LatestPostAction
{
    public function __construct()
    {
        // 
    }

    public function run($limit = 3)
    {
        return Cache::remember('latestPosts', 60 * 60 * 24, function () use ($limit) {
            return Post::latest()->published()->take($limit)->get();
        });
    }
}
