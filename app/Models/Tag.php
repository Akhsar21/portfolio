<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function setSlugAttribute($slug)
    {
        if (empty($slug)) {
            $slug = $this->attributes['name'];
        }

        $this->attributes['slug'] = Str::slug($slug, '-');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
