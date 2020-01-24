<?php

namespace App\Http\Controllers;

use App\Actions\Subscribers\GetAllSubscriberAction;
use App\Actions\Subscribers\StoreSubscriberAction;
use App\Actions\Subscribers\UnsubscribeAction;
use App\Actions\Subscribers\UpdateSubscriberAction;
use App\Http\Requests\SubscriberRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param GetAllSubscriberAction $getAllSubscriberAction
     * @return Factory|View
     */
    public function index(Request $request, GetAllSubscriberAction $getAllSubscriberAction)
    {
        $subscribers = $getAllSubscriberAction->run($request);

        return view('admin.subscribers.index', compact('subscribers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubscriberRequest $request
     * @param StoreSubscriberAction $storeSubscriberAction
     * @return RedirectResponse
     */
    public function store(SubscriberRequest $request, StoreSubscriberAction $storeSubscriberAction)
    {
        $storeSubscriberAction->run($request->only(['email']));
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param UpdateSubscriberAction $updateSubscriberAction
     * @return RedirectResponse
     */
    public function update(Request $request, UpdateSubscriberAction $updateSubscriberAction)
    {
        if (!empty($request->email) && !empty($request->token)) {
            $updateSubscriberAction->run($request->all());
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param UnsubscribeAction $unsubscribeAction
     * @return RedirectResponse
     */
    public function destroy(Request $request, UnsubscribeAction $unsubscribeAction)
    {
        $unsubscribeAction->run($request->token);

        return back();
    }
}
