<?php

namespace App\Http\Controllers;

use App\Actions\Projects\GetAllProjectsAction;

class PublicProjectController extends Controller
{
    public function index(GetAllProjectsAction $getAllProjectsAction)
    {
        return view('pages.portfolios.index')->with([
            'projects' => $getAllProjectsAction->run()
        ]);
    }
}
