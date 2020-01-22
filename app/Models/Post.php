<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Tag;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Post extends Model
{
    // use Searchable;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'description',
        'keywords',
        'category_id',
        'published',
        'thumbnail',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopePublished($query, $published = true)
    {
        return $query->where('published', $published);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setSlugAttribute($slug)
    {
        if (empty($slug)) {
            $slug = $this->attributes['title'] . ' ' . Str::random(10);
        }

        $this->attributes['slug'] = Str::slug($slug, '-');
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        $array['category'] = $this->category['name'];
        $array['tags'] = array_column($this->tags()->get()->toArray(), 'name');

        return $array;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
