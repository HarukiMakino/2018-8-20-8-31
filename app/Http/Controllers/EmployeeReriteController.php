<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeReriteController extends Controller
{
    //
    public function store(Request $request)
    {
        $Request_id = $request->input('request_id');
        $Request_family_name = $request->input('request_family_name');
        $Request_given_name = $request->input('request_given_name');
        $Request_family_name_kana = $request->input('request_family_name_kana');
        $Request_given_name_kana = $request->input('request_given_name_kana');
        $Request_position = $request->input('request_position');




        DB::table('employees')
            ->where('id', $Request_id)
            ->update(['family_name' => $Request_family_name]);

        DB::table('employees')
            ->where('id', $Request_id)
            ->update(['given_name' => $Request_given_name]);

        DB::table('employees')
            ->where('id', $Request_id)
            ->update(['family_name_kana' => $Request_family_name_kana]);

        DB::table('employees')
            ->where('id', $Request_id)
            ->update(['given_name_kana' => $Request_given_name_kana]);

        DB::table('employees')
            ->where('id', $Request_id)
            ->update(['position' => $Request_position]);


        //return view('home');
        return redirect()->route('home')->with('message', 'データベースが変更されました。');


    }

}
