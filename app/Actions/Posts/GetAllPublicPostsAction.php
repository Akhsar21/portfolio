<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Http\Request;

class GetAllPublicPostsAction
{
    public function __construct()
    {
        // 
    }

    public function run(Request $request, $perPage = 6)
    {
        // return Post::search($request->search)->paginate($perPage);
        return Post::latest()->published()->paginate($perPage);
    }
}
