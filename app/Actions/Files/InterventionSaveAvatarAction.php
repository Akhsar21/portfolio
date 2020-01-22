<?php

namespace App\Actions\Files;

use Intervention\Image\Facades\Image;

class InterventionSaveAvatarAction
{
    public function __construct()
    {
        // 
    }

    public function run($file, $fileName)
    {
        Image::make($file)->fit(1000, 1000)->save($fileName);
    }
}
