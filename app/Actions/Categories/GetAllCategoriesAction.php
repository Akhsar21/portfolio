<?php

namespace App\Actions\Categories;

use App\Models\Category;

class GetAllCategoriesAction
{
    public function __construct()
    {
        // 
    }

    public function run()
    {
        return Category::all();
    }
}
