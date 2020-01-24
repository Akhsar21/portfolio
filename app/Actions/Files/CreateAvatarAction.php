<?php

namespace App\Actions\Files;

class CreateAvatarAction
{
    private $interventionSaveAvatarAction;

    public function __construct(InterventionSaveAvatarAction $interventionSaveAvatarAction)
    {
        $this->interventionSaveAvatarAction = $interventionSaveAvatarAction;
    }

    public function run($file, $title)
    {
        $fileName = "uploads/avatars/{$title}.{$file->getClientOriginalExtension()}";

        $this->interventionSaveAvatarAction->run($file, $fileName);

        return $fileName;
    }
}
