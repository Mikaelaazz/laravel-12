<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Starboy extends Model
{
    protected $fillable = [
        'name',
        'old',
        'tier',
        'role',
        'level'

    ];
}
