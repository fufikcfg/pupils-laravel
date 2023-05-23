<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @SWG\Definition(
 *  definition="Classes",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="level_study",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="classes_letter",
 *      type="string"
 *  )
 * )
 */
class Classes extends Model
{
    public function students() {
        return $this->hasMany(Students::class);
    }
}
