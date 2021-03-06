<?php

namespace App\Actions\Posts;

use App\Actions\Files\CreateThumbnailAction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PreparePostAction
{
    protected $createThumbnailAction;

    public function __construct(CreateThumbnailAction $createThumbnailAction)
    {
        $this->createThumbnailAction = $createThumbnailAction;
    }

    public function run(Request $request)
    {
        $requestData = $request->all();

        $requestData['published'] = false;

        if ($request->published) {
            $requestData['published'] = true;
        }

        if ($request->hasFile('thumbnail')) {
            $title = Str::random();
            $requestData['thumbnail'] = $this->createThumbnailAction->run($request->file('thumbnail'), $title);
        }

        return $requestData;
    }
}
