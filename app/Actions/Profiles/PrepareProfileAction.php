<?php

namespace App\Actions\Profiles;

use App\Actions\Files\CreateAvatarAction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PrepareProfileAction
{
    protected $createAvatarAction;

    public function __construct(CreateAvatarAction $createAvatarAction)
    {
        $this->createAvatarAction = $createAvatarAction;
    }

    public function run(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('avatar')) {
            $title = Str::random();
            $requestData['avatar'] = $this->createAvatarAction->run($request->file('avatar'), $title);
        }

        return $requestData;
    }
}
