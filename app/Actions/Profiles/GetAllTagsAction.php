<?php

namespace App\Actions\Tags;

use App\Models\Tag;

class GetAllTagsAction
{
    public function __construct()
    {
        // 
    }

    public function run()
    {
        return Tag::all();
    }
}
