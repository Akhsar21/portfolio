<?php

namespace App\Http\Controllers;

use App\Actions\Categories\DeleteCategoryAction;
use App\Actions\Categories\GetPaginatedCategoriesAction;
use App\Actions\Categories\StoreCategoryAction;
use App\Actions\Categories\UpdateCategoryAction;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param GetPaginatedCategoriesAction $getPaginatedCategoriesAction
     * @return Factory|View
     */
    public function index(Request $request, GetPaginatedCategoriesAction $getPaginatedCategoriesAction)
    {
        $category = new Category();
        $categories = $getPaginatedCategoriesAction->run($request);
        return view('admin.categories.index', compact('categories', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $category = new Category();
        return view('admin.categories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @param StoreCategoryAction $storeCategoryAction
     * @return RedirectResponse|Redirector
     */
    public function store(CategoryRequest $request, StoreCategoryAction $storeCategoryAction)
    {
        $storeCategoryAction->run($request->all());
        return redirect(route('categories.index'))->with('flash_message', 'Category added!');
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Factory|View
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Factory|View
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category $category
     * @return RedirectResponse|Redirector
     */
    public function update(CategoryRequest $request, Category $category, UpdateCategoryAction $updateCategoryAction)
    {
        $updateCategoryAction->run($request->all(), $category);

        return redirect(route('categories.index'))->with('flash_message', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @param DeleteCategoryAction $deleteCategoryAction
     * @return RedirectResponse|Redirector
     */
    public function destroy(Category $category, DeleteCategoryAction $deleteCategoryAction)
    {
        $deleteCategoryAction->run($category);

        return redirect(route('categories.index'))->with('flash_message', 'Category deleted!');
    }
}
