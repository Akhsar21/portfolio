<?php

namespace App\Http\Controllers;

use App\Actions\Projects\DeleteProjectImagesAction;
use App\Models\ProjectImage;

class ProjectImageController extends Controller
{
    public function destroy(ProjectImage $projectImage, DeleteProjectImagesAction $deleteProjectImagesAction)
    {
        return response()->json($deleteProjectImagesAction->run($projectImage));
    }
}
