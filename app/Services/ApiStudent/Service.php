<?php

namespace App\Services\ApiStudent;

use App\Http\Resources\StudentResource;
use App\Models\Students;
use App\Responses\ApiJsonResponse;
use App\Services\Student\Service as ServiceAlias;

class Service extends ServiceAlias
{
    public function storeStudent(array $data)
    {
        Students::create($data);
        return new ApiJsonResponse(['message' => sprintf('Student %s %s %s added', $data['SLastName'], $data['SFirstName'], $data['SMidName'])]);
    }

    public function getList(int $operator)
    {
        return new ApiJsonResponse(StudentResource::collection(Students::query()->orderBy('id', 'ASC')->where('classes_id', $operator)->get()));
    }

    public function destroy(int $id)
    {
        Students::find($id)->delete();
        return new ApiJsonResponse(['message' => sprintf('Student with %d deleted', $id)]);
    }

    public function getLittleStudent()
    {
        return new ApiJsonResponse(StudentResource::collection(Students::query()->where('classes_id', 1)->orderByDesc('SBirthDate')->with('classes')->get()->take(1)));
    }

    public function getStudentsBornInJuly()
    {
        return new ApiJsonResponse(StudentResource::collection(Students::query()->whereMonth('SBirthDate', 7)->with('classes')->get()));
    }

    public function getReport()
    {
        return new ApiJsonResponse([
            'little' => $this->getLittleStudent(),

            'countTwoClass' => $this->getCountStudentsInTwoClass(),

            'bornInJuly' => $this->getStudentsBornInJuly(),
        ]);
    }
}