<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'name',
        'title',
        'subtitle',
        'image',
        'email',
        'phone',
        'address',
        'bio',
    ];

    // link images to profile

    public function getImageUrlAttribute()
    {
        return asset('storage/profiles/' . $this->image);
    }
}
