<?php

namespace App\Http\Controllers;

use App\Actions\Projects\DeleteProjectAction;
use App\Actions\Projects\GetPaginatedProjectsAction;
use App\Actions\Projects\StoreProjectAction;
use App\Actions\Projects\UpdateProjectAction;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param GetPaginatedProjectsAction $getPaginatedProjectsAction
     * @return Factory|View
     */
    public function index(Request $request, GetPaginatedProjectsAction $getPaginatedProjectsAction)
    {
        $projects = $getPaginatedProjectsAction->run($request);

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $project = new Project();

        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProjectRequest $request
     * @param StoreProjectAction $storeProjectAction
     * @return RedirectResponse|Redirector
     */
    public function store(ProjectRequest $request, StoreProjectAction $storeProjectAction)
    {
        $storeProjectAction->run($request->all());
        return redirect(route('projects.index'))->with('flash_message', 'Project added!');
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return Factory|View
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Factory|View
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectRequest $request
     * @param $id
     * @param UpdateProjectAction $updateProjectAction
     * @return RedirectResponse|Redirector
     */
    public function update(ProjectRequest $request, $id, UpdateProjectAction $updateProjectAction)
    {
        $updateProjectAction->run($request->all(), $id);
        return redirect(route('projects.index'))->with('flash_message', 'Project updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param DeleteProjectAction $deleteProjectAction
     * @return RedirectResponse
     */
    public function destroy(Project $project, DeleteProjectAction $deleteProjectAction)
    {
        $deleteProjectAction->run($project);
        return back()->with('flash_message', 'Project deleted!');
    }
}
