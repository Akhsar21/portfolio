<?php

namespace App\Actions\Projects;

use App\Models\Project;
use Illuminate\Http\Request;

class GetPaginatedProjectsAction
{
    public function __construct()
    {
        // 
    }

    public function run(Request $request, $perPage = 10)
    {
        return Project::latest()->paginate($perPage);
    }
}
