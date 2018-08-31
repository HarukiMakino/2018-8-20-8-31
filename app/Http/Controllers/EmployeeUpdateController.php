<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeUpdateController extends Controller
{
    //
    public function store(Request $request)
    {
        $Request_id = $request->query('request_id');

        $employees = DB::table('employees')->select('id','family_name','given_name','family_name_kana','given_name_kana','division_id',
            'birthday','hire_date','position')
            ->where('id', $Request_id)->get();


        if($employees)
        {
            return view('employeeUpdateConfirmation',[
            'employees'=>$employees
        ]);
        }else{
            return response('従業員情報を取得できません。', 500);
        }



    }




}
