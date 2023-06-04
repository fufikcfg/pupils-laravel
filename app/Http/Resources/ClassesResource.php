<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassesResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'level_study' => $this->level_study,
            'classes_letter' => $this->classes_letter,
        ];
    }
}
