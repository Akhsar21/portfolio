<?php

namespace App\Http\Controllers;

use App\Actions\Tags\DeleteTagAction;
use App\Actions\Tags\GetPaginatedTagsAction;
use App\Actions\Tags\StoreTagAction;
use App\Actions\Tags\UpdateTagAction;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, GetPaginatedTagsAction $getPaginatedTagsAction)
    {
        $tags = $getPaginatedTagsAction->run($request);

        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = new Tag();
        return view('admin.tags.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request, StoreTagAction $storeTagAction)
    {
        $storeTagAction->run($request->all());

        return redirect(route('tags.index'))->with('flash_message', 'Tag added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TagRequest  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, Tag $tag, UpdateTagAction $updateTagAction)
    {
        $updateTagAction->run($request->all(), $tag);

        return redirect(route('tags.index'))->with('flash_message', 'Tag updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag, DeleteTagAction $deleteTagAction)
    {
        $deleteTagAction->run($tag);

        return radirect(route('tags.index'))->with('flash_message', 'Tag deleted!');
    }
}
