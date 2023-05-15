<?php

namespace App\Http\Controllers\Student;

use App\Http\Requests\StudentsStoreRequest;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends BaseController
{

    public function store(StudentsStoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return back()->withInput();
    }

    public function showList(Request $request)
    {
        return [
            "status" => true,
            "arrayID" => $this->service->getList($request->valueElement),
        ];
    }

    public function destroy($id)
    {
        $this->service->destroy($id);

        return back()->withInput();
    }

    public function showReport()
    {
        return view('report', $this->service->getReport());
    }
}
