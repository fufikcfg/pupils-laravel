<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
/**
 * @SWG\Definition(
 *  definition="Students",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="SLastName",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="SFirstName",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="SMidName",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="classes_id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="SBirthDate",
 *      type="string",
 *     format="date"
 *  ),
 *  @SWG\Property(
 *      property="created_at",
 *      type="string",
 *     format="date-time"
 *  ),
 *  @SWG\Property(
 *      property="updated_at",
 *      type="string",
 *     format="date-time"
 *  ),
 * )
 */
class Students extends Model
{
    protected $guarded = [];
    protected $casts = [
        'SBirthDate' => 'datetime:d.m.Y',
    ];

    public function classes() {
        return $this->belongsTo(Classes::class);
    }
}
