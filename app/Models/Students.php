<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;

class Students extends Model
{
    protected $casts = [
        'SBirthDate' => 'datetime:d.m.Y',
    ];

    public function classes() {
        return $this->belongsTo(Classes::class);
    }
}
