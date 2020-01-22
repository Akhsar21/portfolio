<?php

namespace App\Http\View\Composers;

use App\Models\Post;
use Illuminate\View\View;

class PostsComposer
{
    public function compose(View $view, $perPage = 6)
    {
        $view->with('posts', Post::latest()->published()->paginate($perPage));
    }
}
