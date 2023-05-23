<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Student\BaseController;
use App\Http\Requests\StudentsStoreRequest;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
    public function store(StudentsStoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return [
            'message' => 'Successful addition',
            'data' => $data
        ];
    }

    public function showList(Request $request)
    {
        return $this->service->getList($request->valueElement);
    }

    public function destroy($id)
    {
        $this->service->destroy($id);

        return sprintf('%d - deleted', $id);
    }

    public function showReport()
    {
        return $this->service->getReport();
    }
}
