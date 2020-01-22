<?php

namespace App\Actions\Projects;

use App\Models\Project;

class DeleteProjectAction
{
    public function __construct()
    {
        // 
    }

    public function run(Project $project)
    {
        $projectDeleted = $project->tags()->detach();
        $projectDeleted = $project->delete();

        return $projectDeleted;
    }
}
