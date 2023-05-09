<?php

namespace App\Http\Controllers\Student;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return redirect('/create');
    }

    public function showList(Request $request)
    {
        $list = Students::where('SClass', $request->valueElement)->first();

        return [
            "status" => true,
            "arrayID" => json_encode($list)
        ];
    }

    public function showByEdit()
    {
        $list = Students::all();

        return view('edit', compact('list'));
    }

    public function destroy($id)
    {
        $list = Students::query()->where('id', $id)->delete();

        return redirect('/edit');
    }

    public function showReport()
    {
        $little = Students::query()->where('SClass', 1)->orderByDesc('SBirthDate')->get();

        $little->first();

        $countTwoClass = Students::query()->where('SClass', 2)->count();

        $bornInJuly = Students::query()->whereMonth('SBirthDate', 7)->get();

        return view('report',
            ['little' => $little,
                'countTwoClass' => $countTwoClass,
                'bornInJuly' => $bornInJuly
            ]);
    }
}
