<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hardskill extends Model
{
    protected $table = 'hardskills';
    
    protected $fillable = [
        'skill_name',
        'category',
    ];
}
