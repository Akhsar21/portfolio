<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'phone', 'address', 'twitter', 'facebook', 'instagram', 'github', 'avatar',
    ];

    public function profileImage()
    {
        return ($this->avatar) ? $this->avatar : '';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
