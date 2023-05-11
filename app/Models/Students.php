<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $casts = [
        'SBirthDate' => 'datetime:d.m.Y',
    ];
}
