<?php

namespace App\Actions\Posts;

use App\Actions\Files\DeleteThumbnailAction;
use App\Models\Post;

class DeletePostAction
{
    protected $deleteThumbnailAction;

    public function __construct(DeleteThumbnailAction $deleteThumbnailAction)
    {
        $this->deleteThumbnailAction = $deleteThumbnailAction;
    }

    public function run(Post $post)
    {
        $thumbnailPath = $post->thumbnail;

        $postDeleted = $post->tags()->detach();
        $postDeleted = $post->delete();

        if ($postDeleted) {
            $this->deleteThumbnailAction->run($thumbnailPath);
        }

        return $postDeleted;
    }
}
