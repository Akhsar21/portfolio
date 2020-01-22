<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ['name', 'email', 'token'];

    // protected $hidden = ['token'];

    public function getSubscribedAttribute($attribute)
    {
        return [
            0 => 'No',
            1 => 'Yes',
        ][$attribute];
    }

    public function scopeSubscribed($query, $flag = true)
    {
        return $query->where('subscribed', $flag);
    }
}
