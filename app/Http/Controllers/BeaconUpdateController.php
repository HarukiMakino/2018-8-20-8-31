<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeaconUpdateController extends Controller
{
    public function store(Request $request, $Request_family_name, $Request_given_name)
    {

        $Request_major = $request->input('major');
        $Request_minor = $request->input('minor');

        $users = DB::table('employees')->select('position', 'positioned_at')
            ->where('family_name', $Request_family_name)->where('given_name', $Request_given_name)->get()->first();

        $beacons = DB::table('beacons')->select('major', 'minor', 'position')
            ->where('major', $Request_major)->where('minor', $Request_minor)->first();

        if ($users && $beacons) {


            DB::table('employees')
                ->where('family_name', $Request_family_name)->where('given_name', $Request_given_name)
                ->update(['position' => $beacons->position]);


            DB::table('employees')
                ->where('family_name', $Request_family_name)->where('given_name', $Request_given_name)
                ->update(['positioned_at' => date("Y/m/d H:i:s")]);

            return response('success');
        } else if ($users && !$beacons) {
            return response('ビーコンテーブルから情報を取得できません。', 500);

        } else if (!$users && $beacons) {
            return response('従業員情報を取得できません。', 500);
        } else {
            return response('ビーコンテーブルと従業員情報を取得できません。', 500);
        }
    }
}
