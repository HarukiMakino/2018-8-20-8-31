<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello';
});

//モデルを作りデータベースにアクセス＆取得ルータ
Route::get('/users', 'UserController@index');

//従業員を検索し、一致すれば従業員情報を公開ルータ
Route::get('/employee/{familyname}/{givenname}/position', 'EmployeeGetController@store');

//従業員の内容を
Route::post('/employee/{family_name}/{given_name}/position', 'BeaconUpdateController@store');

//
//public function index()
//{
//    $users = DB::table('users')->get();
//
//    return view('user.index', ['users' => $users]);
//}