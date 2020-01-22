<?php

namespace App\Http\View\Composers\Admin;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer
{
    public function compose(View $view)
    {
        $view->with('category', new Category());
    }
}
