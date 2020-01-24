<?php

namespace App\Http\Controllers;

use App\Actions\Projects\DeleteProjectImagesAction;
use App\Models\ProjectImage;
use Illuminate\Http\JsonResponse;

class ProjectImageController extends Controller
{
    /**
     * @param ProjectImage $projectImage
     * @param DeleteProjectImagesAction $deleteProjectImagesAction
     * @return JsonResponse
     */
    public function destroy(ProjectImage $projectImage, DeleteProjectImagesAction $deleteProjectImagesAction)
    {
        return response()->json($deleteProjectImagesAction->run($projectImage));
    }
}
