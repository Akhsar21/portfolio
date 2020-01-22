<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function setSlugAttribute($slug)
    {
        if (empty($slug)) {
            $slug = $this->attributes['name'];
        }

        $this->attributes['slug'] = Str::slug($slug, '-');
    }
}
