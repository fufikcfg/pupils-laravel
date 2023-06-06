<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use Illuminate\Support\Facades\App;

class Students extends Model
{
    protected $guarded = [];
    protected $casts = [
        'SBirthDate' => 'datetime:d.m.Y',
    ];

    public function classes() {
        return $this->belongsTo(Classes::class);
    }
    public function roles() {
        return $this->hasMany(Role::class);
    }
}
