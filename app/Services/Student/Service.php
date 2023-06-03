<?php

namespace App\Services\Student;

use App\Models\Students;

class Service
{
    public function storeStudent(array $data)
    {
        Students::create($data);
    }

    public function getList(int $operator)
    {
        return Students::query()->orderBy('id', 'ASC')->where('classes_id', $operator)->get()->toArray();
    }

    public function destroy(int $id)
    {
        Students::find($id)->delete();
    }

    public function getLittleStudent()
    {
        return Students::query()->where('classes_id', 1)->orderByDesc('SBirthDate')->with('classes')->get()->take(1)->toArray();
    }

    public function getCountStudentsInTwoClass()
    {
        return Students::query()->where('classes_id', 2)->count();
    }

    public function getStudentsBornInJuly()
    {
        return Students::query()->whereMonth('SBirthDate', 7)->with('classes')->get()->toArray();
    }

    public function getReport()
    {
        return
        [
            'little' => $this->getLittleStudent(),

            'countTwoClass' => $this->getCountStudentsInTwoClass(),

            'bornInJuly' =>$this->getStudentsBornInJuly(),
        ];
    }
}

