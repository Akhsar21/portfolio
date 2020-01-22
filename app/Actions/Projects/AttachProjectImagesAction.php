<?php

namespace App\Actions\Projects;

use App\Actions\Files\InterventionSaveImageAction;
use App\Models\ProjectImage;
use Illuminate\Support\Str;

class AttachProjectImagesAction
{
    protected $interventionSaveImageAction;

    public function __construct(InterventionSaveImageAction $interventionSaveImageAction)
    {
        $this->interventionSaveImageAction = $interventionSaveImageAction;
    }

    public function run($projectId, $images)
    {
        $projectImages = [];

        foreach ($images as $image) {
            $title = Str::random();
            $fileName = "uploads/projects/" . $title . '.' . $image->getClientOriginalExtension();
            $this->interventionSaveImageAction->run($image, 1280, $fileName);

            $projectImages[] = [
                'project_id' => $projectId,
                'src' => $fileName
            ];
        }

        ProjectImage::insert($projectImages);
    }
}
