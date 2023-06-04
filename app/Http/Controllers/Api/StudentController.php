<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentsStoreRequest;
use App\Http\Resources\StudentResource;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
    public function store(StudentsStoreRequest $request)
    {
        $data = $request->validated();

        return $this->api->storeStudent($data);
    }

    public function showList(Request $request)
    {
        return $this->api->getList($request->valueElement);
    }

    public function destroy($id)
    {
        return $this->api->destroy($id);
    }

    public function showReport()
    {
        return $this->api->getReport();
    }
}
