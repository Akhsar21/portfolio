<?php

namespace App\Models;

use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setSlugAttribute($slug)
    {
        if (empty($slug)) {
            $slug = $this->attributes['name'];
        }

        $this->attributes['slug'] = Str::slug($slug, '-');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
