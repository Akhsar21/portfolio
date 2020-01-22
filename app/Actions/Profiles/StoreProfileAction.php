<?php

namespace App\Actions\Profiles;

use Illuminate\Http\Request;

class StoreProfileAction
{
    protected $prepareProfileAction;

    public function __construct(PrepareProfileAction $prepareProfileAction)
    {
        return $this->prepareProfileAction = $prepareProfileAction;
    }

    public function run(Request $request)
    {
        $requestData = $this->prepareProfileAction->run($request);
        return auth()->user()->profile()->create($requestData);
    }
}
