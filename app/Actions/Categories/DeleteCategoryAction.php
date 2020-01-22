<?php

namespace App\Actions\Categories;

use App\Models\Category;

class DeleteCategoryAction
{
    public function __construct()
    {
        // 
    }

    public function run(Category $category)
    {
        return $category->delete();
    }
}
