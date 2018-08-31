<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeSearchController extends Controller
{
    //
    public function store(Request $request)
    //public function store(Request::query)
    {
        $Request_family_name = $request->query('request_family_name');
        $Request_given_name = $request->query('request_given_name');

        //$Request_family_name = $request->input('family_name');
        ////$Request_given_name = $request->input('given_name');
        $employees = DB::table('employees')->select('id','family_name','given_name','family_name_kana','given_name_kana','division_id',
            'birthday','hire_date','position')
            ->where('family_name', $Request_family_name)->where('given_name', $Request_given_name)->get();

        if ($employees) {

            return view('employeeSearch',[
                'employees'=>$employees
            ]);
        } else {

            return response('従業員情報を取得できません。', 500);
        }
    }
}
