<?php

namespace App\Actions\Categories;

use App\Models\Category;

class StoreCategoryAction
{
    public function __construct()
    {
        //
    }

    /**
     * @param $requestData
     * @return mixed
     */
    public function run($requestData)
    {
        return Category::create($requestData);
    }
}
