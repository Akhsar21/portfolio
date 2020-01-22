<?php

namespace App\Actions\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class GetAllProjectsAction
{
    public function __construct()
    {
        // 
    }

    public function run()
    {
        return Cache::remember('projectListing', 60 * 60 * 24 * 30, function () {
            return Project::with('images', 'tags')->get();
        });
    }
}
