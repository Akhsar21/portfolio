<?php

namespace App\Actions\Files;

use Illuminate\Support\Facades\File;

class DeleteThumbnailAction
{
    public function __construct()
    {
        // 
    }

    public function run($path)
    {
        File::delete($path);
    }
}
