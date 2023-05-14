<?php

namespace App\Services\Student;

use App\Models\Students;

class Service
{
    public function store($data)
    {
        Students::create($data);
    }

    public function getList($operator)
    {
        return Students::query()->orderBy('id', 'ASC')->where('classes_id', $operator)->get()->toArray();
    }

    public function destroy($id)
    {
        Students::find($id)->delete();
    }

}

