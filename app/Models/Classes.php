<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function students() {
        return $this->hasOne(Students::class);
    }
}
