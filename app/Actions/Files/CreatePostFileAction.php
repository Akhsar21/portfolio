<?php

namespace App\Actions\Files;

use Illuminate\Support\Str;

class CreatePostFileAction
{
    private $interventionSaveImageAction;

    public function __construct(InterventionSaveImageAction $interventionSaveImageAction)
    {
        $this->interventionSaveImageAction = $interventionSaveImageAction;
    }

    public function run($file, $width = 1280)
    {
        $title = Str::random();
        $fileName = "uploads/images/" . $title . '.' . $file->getClientOriginalExtension();

        $this->interventionSaveImageAction->run($file, $width, $fileName);

        return $fileName;
    }
}
