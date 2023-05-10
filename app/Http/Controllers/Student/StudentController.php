<?php

namespace App\Http\Controllers\Student;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function store(Request $request)
    {
        $student = new Students();

        $this->validate($request, [
            'surname' => 'required|min:1|max:25',
            'name' => 'required|min:1|max:25',
            'otchestvo' => 'required|min:1|max:25',
            'date' => 'required',
            'class' => 'required',
        ]);

        $student->SLastName = $request->input('surname');
        $student->SFirstName = $request->input('name');
        $student->SMidName = $request->input('otchestvo');

        $student->SBirthDate = $request->input('date');
        $student->SClass = $request->input('class');

        $student->save();

        return redirect('/home/create');
    }

    public function showList(Request $request)
    {
        $list = Students::query()->orderBy('SMidName', 'ASC')->where('SClass', $request->valueElement)->get();

        return [
            "status" => true,
            "arrayID" => $list,
        ];
    }

    public function showByEdit()
    {
        $list = Students::all()->sortBy('SClass');

        return view('edit', compact('list'));
    }

    public function destroy($id)
    {
        $list = Students::query()->where('id', $id)->delete();

        return redirect('/home/edit');
    }

    public function showReport()
    {
        return view('report',
            [
                'little' => Students::query()->where('SClass', 1)->orderByDesc('SBirthDate')->take(1)->get(),

                'countTwoClass' => Students::query()->where('SClass', 2)->count(),

                'bornInJuly' => Students::query()->whereMonth('SBirthDate', 7)->get()
            ]);
    }
}
