<?php

namespace App\Http\Controllers\Student;

use App\Http\Requests\StudentsStoreRequest;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function store(StudentsStoreRequest $request)
    {
        $student = new Students();

        $request->validated();

        $student->SLastName = $request->input('surname');
        $student->SFirstName = $request->input('name');
        $student->SMidName = $request->input('middleName');

        $student->SBirthDate = $request->input('date');
        $student->SClass = $request->input('class');

        $student->save();

        return back()->withInput();
    }

    public function showList(Request $request)
    {
        $list = Students::query()->orderBy('SMidName', 'ASC')->where('SClass', $request->valueElement)->get()->toArray();

        return [
            "status" => true,
            "arrayID" => $list,
        ];
    }

    public function destroy($id)
    {
        Students::query()->where('id', $id)->delete();

        return back()->withInput();
    }

    public function showReport()
    {
        return view('report',
            [
                'little' => Students::query()->where('SClass', 1)->orderByDesc('SBirthDate')->take(1)->get()->toArray(),

                'countTwoClass' => Students::query()->where('SClass', 2)->count(),

                'bornInJuly' => Students::query()->whereMonth('SBirthDate', 7)->get()->toArray()
            ]);
    }
}
