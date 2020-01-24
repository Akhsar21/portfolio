<?php

namespace App\Http\Controllers;

use App\Actions\Projects\GetAllProjectsAction;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PublicProjectController extends Controller
{
    /**
     * @param GetAllProjectsAction $getAllProjectsAction
     * @return Factory|View
     */
    public function index(GetAllProjectsAction $getAllProjectsAction)
    {
        return view('pages.portfolios.index')->with([
            'projects' => $getAllProjectsAction->run()
        ]);
    }
}
