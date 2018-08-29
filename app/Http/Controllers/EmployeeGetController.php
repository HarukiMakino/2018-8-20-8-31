<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeGetController extends Controller
{
    //
    public function store(Request $request, $Request_family_name, $Request_given_name)
    {

        $users = DB::table('employees')->select('family_name', 'given_name','family_name_kana','given_name_kana','position')
            ->where('family_name',$Request_family_name)->where('given_name',$Request_given_name)->get()->first();

        if($users)
        {

            return response()->json(['family_name' => $users->family_name,'given_name' => $users->given_name,
                'family_name_kana'=>$users->family_name_kana,'given_name_kana'=>$users->given_name_kana,'position'=>$users->position],
                200,[],
            JSON_UNESCAPED_UNICODE
            );
        }else{
           return response('従業員情報を取得できません。', 500);
        }


    }



}
