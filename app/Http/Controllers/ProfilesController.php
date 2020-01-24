<?php

namespace App\Http\Controllers;

use App\Actions\Profiles\StoreProfileAction;
use App\Actions\Profiles\UpdateProfileAction;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param User $user
     * @return Factory|View
     */
    public function index(User $user)
    {
        $profile = Profile::latest()->paginate(10);
        return view('admin.profiles.show', compact('profile', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param User $user
     * @return Factory|View
     */
    public function create(User $user)
    {
        return view('admin.profiles.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProfileRequest $request
     * @param StoreProfileAction $storeProfileAction
     * @return RedirectResponse|Redirector
     */
    public function store(ProfileRequest $request, StoreProfileAction $storeProfileAction)
    {
        $storeProfileAction->run($request);

        return redirect(route('profiles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Profile $profile
     * @param User $user
     * @return Factory|View
     */
    public function show(Profile $profile, User $user)
    {
        return view('admin.profiles.show', compact('user', 'profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Factory|View
     */
    public function edit(User $user)
    {
        return view('admin.profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProfileRequest $request
     * @param User $user
     * @param UpdateProfileAction $updateProfileAction
     * @return RedirectResponse|Redirector
     */
    public function update(ProfileRequest $request, User $user, UpdateProfileAction $updateProfileAction)
    {
        $updateProfileAction->run($request, $user);

        // $user->profile()->update($request->all());

        return redirect(route('profile.show', $user));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Profile $profile
     * @return void
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
