<?php

namespace App\Actions\Tags;

use App\Models\Tag;

class DeleteProfileAction
{
    public function __construct()
    {
        //
    }

    public function run(Tag $tag)
    {
        return $tag->delete();
    }
}
