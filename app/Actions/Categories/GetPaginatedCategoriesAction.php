<?php

namespace App\Actions\Categories;

use App\Models\Category;
use Illuminate\Http\Request;

class GetPaginatedCategoriesAction
{
    public function __construct()
    {
        // 
    }

    public function run(Request $request, $perPage = 10)
    {
        return Category::latest()->paginate($perPage);
    }
}
