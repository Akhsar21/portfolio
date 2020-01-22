<?php

namespace App\Http\View\Composers;

use App\Models\Tag;
use Illuminate\View\View;

class TagsComposer
{
    public function compose(View $view)
    {
        $view->with('tags', Tag::all());
    }
}
