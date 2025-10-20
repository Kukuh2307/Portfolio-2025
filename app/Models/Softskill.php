<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Softskill extends Model
{
    protected $table = 'softskills';

    protected $fillable = [
        'skill_name',
        'description',
    ];
}
