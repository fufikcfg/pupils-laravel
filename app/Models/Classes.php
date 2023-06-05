<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public $timestamps = false;
    public function students() {
        return $this->hasMany(Students::class);
    }
}
