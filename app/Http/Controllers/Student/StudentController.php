<?php

namespace App\Http\Controllers\Student;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function createForm()
    {

    }

    public function showList(Request $request)
    {


        $list = Students::where('SClass', $request->valueElement)->first();

//        if ($request->ajax()) {
//            return view('test', [
//               'list' => $list
//            ])->render();
//        }



        if ($request->ajax()) {
            return [
                "status" => true,
                "arrayID" => json_encode($list)
            ];
        }
//
//        return view('list', [
//            'list' => $list
//        ]);
    }
}
