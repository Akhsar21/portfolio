<?php

namespace App\Http\Controllers;

use App\Actions\Tags\DeleteTagAction;
use App\Actions\Tags\GetPaginatedTagsAction;
use App\Actions\Tags\StoreTagAction;
use App\Actions\Tags\UpdateTagAction;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param GetPaginatedTagsAction $getPaginatedTagsAction
     * @return Factory|View
     */
    public function index(Request $request, GetPaginatedTagsAction $getPaginatedTagsAction)
    {
        $tags = $getPaginatedTagsAction->run($request);

        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $tag = new Tag();
        return view('admin.tags.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest $request
     * @param StoreTagAction $storeTagAction
     * @return RedirectResponse|Redirector
     */
    public function store(TagRequest $request, StoreTagAction $storeTagAction)
    {
        $storeTagAction->run($request->all());

        return redirect(route('tags.index'))->with('flash_message', 'Tag added!');
    }

    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     * @return Factory|View
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tag $tag
     * @return Factory|View
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagRequest $request
     * @param Tag $tag
     * @param UpdateTagAction $updateTagAction
     * @return RedirectResponse|Redirector
     */
    public function update(TagRequest $request, Tag $tag, UpdateTagAction $updateTagAction)
    {
        $updateTagAction->run($request->all(), $tag);

        return redirect(route('tags.index'))->with('flash_message', 'Tag updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @param DeleteTagAction $deleteTagAction
     * @return RedirectResponse|Redirector
     */
    public function destroy(Tag $tag, DeleteTagAction $deleteTagAction)
    {
        $deleteTagAction->run($tag);

        return redirect(route('tags.index'))->with('flash_message', 'Tag deleted!');
    }
}
