<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'SLastName' => $this->SLastName,
            'SFirstName' => $this->SFirstName,
            'SMidName' => $this->SMidName,
            'classes' => new ClassesResource($this->classes),
            'SBirthDate' => $this->SBirthDate->format('d.m.Y'),
        ];
    }
}
