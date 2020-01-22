<?php

namespace App\Actions\Projects;

use App\Models\ProjectImage;
use Illuminate\Support\Facades\File;

class DeleteProjectImagesAction
{
    public function __construct()
    {
        // 
    }

    public function run(ProjectImage $image)
    {
        $src = $image->src;

        if ($image->delete()) {
            return File::delete($src);
        }

        return false;
    }
}
