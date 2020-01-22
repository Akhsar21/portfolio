<?php

namespace App\Actions\Tags;

use App\Models\Tag;

class UpdateTagAction
{
    public function __construct()
    {
        // 
    }

    public function run($requestData, Tag $tag)
    {
        return $tag->update($requestData);
    }
}
