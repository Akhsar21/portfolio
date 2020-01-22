<?php

namespace App\Actions\Profiles;

use App\User;
use Illuminate\Http\Request;

class UpdateProfileAction
{
    protected $prepareProfileAction;

    public function __construct(PrepareProfileAction $prepareProfileAction)
    {
        return $this->prepareProfileAction = $prepareProfileAction;
    }

    public function run(Request $request, User $user)
    {
        $requestData = $this->prepareProfileAction->run($request);
        // dd($requestData);

        return $user->profile->update($requestData);
    }
}
