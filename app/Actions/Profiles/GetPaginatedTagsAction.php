<?php

namespace App\Actions\Tags;

use App\Models\Tag;
use Illuminate\Http\Request;

class GetPaginatedTagsAction
{
    public function __construct()
    {
        // 
    }

    public function run(Request $request, $perPage = 10)
    {
        return Tag::latest()->paginate($perPage);
    }
}
