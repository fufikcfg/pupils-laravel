<?php

namespace App\Services\Student;

use App\Models\Students;

class Service
{
    public function store(array $data) : void
    {
        Students::create($data);
    }

    public function getList(int $operator) : array
    {
        return Students::query()->orderBy('id', 'ASC')->where('classes_id', $operator)->get()->toArray();
    }

    public function destroy(int $id) : void
    {
        Students::find($id)->delete();
    }

    public function getLittleStudent() : array
    {
        return Students::query()->where('classes_id', 1)->orderByDesc('SBirthDate')->with('classes')->get()->take(1)->toArray();
    }

    public function getCountStudentsInTwoClass() : int
    {
        return Students::query()->where('classes_id', 2)->count();
    }

    public function getStudentsBornInJuly() : array
    {
        return Students::query()->whereMonth('SBirthDate', 7)->with('classes')->get()->toArray();
    }

    public function getReport() : array
    {
        return
        [
            'little' => $this->getLittleStudent(),

            'countTwoClass' => $this->getCountStudentsInTwoClass(),

            'bornInJuly' =>$this->getStudentsBornInJuly(),
        ];
    }
}

