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
        return view('report',
            [
                'little' => Students::query()->where('classes_id', 1)->orderByDesc('SBirthDate')->with('classes')->get()->take(1)->toArray(),

                'countTwoClass' => Students::query()->where('classes_id', 2)->count(),

                'bornInJuly' => Students::query()->whereMonth('SBirthDate', 7)->with('classes')->get()->toArray(),
            ]);
    }
}
