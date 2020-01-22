<?php

namespace App\Actions\Tags;

use App\Models\Tag;

class StoreTagAction
{
    public function __construct()
    {
        // 
    }

    public function run($requestData)
    {
        return Tag::create($requestData);
    }
}
