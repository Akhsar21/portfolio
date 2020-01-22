<?php

namespace App\Actions\Categories;

use App\Models\Category;

class UpdateCategoryAction
{
    public function __construct()
    {
        // 
    }

    public function run($requestData, Category $category)
    {
        return $category->update($requestData);
    }
}
