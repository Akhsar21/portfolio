<?php

namespace App\Actions\Categories;

use App\Models\Category;
use Exception;

class DeleteCategoryAction
{
    /**
     * DeleteCategoryAction constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @param Category $category
     * @return bool|null
     * @throws Exception
     */
    public function run(Category $category)
    {
        return $category->delete();
    }
}
