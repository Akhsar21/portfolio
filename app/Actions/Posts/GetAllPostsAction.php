<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Http\Request;

class GetAllPostsAction
{
    public function __construct()
    {
        // 
    }

    public function run(Request $request, $perPage = 10)
    {
        return Post::latest()->paginate($perPage);
    }
}
