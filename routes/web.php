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


    //html作成！！！
use Illuminate\Http\Request;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/todo', function () {
    return view('todo');
});

//データベース表示
Route::get('/employeeDatebase', function (Request $request) {
    $employees = DB::select('select * from employees');
    //$data = employee::all(); //全件取得
    $request_query = $request->input('select');
    $request_sort = $request->input('sort');


    if ($request_query == "ID順" && $request_sort == "昇順") {
        $employees->sortBy('id')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
    }
    if ($request_query == "ID順" && $request_sort == "降順") {
        $employees->sortByDesc('id')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
    }
    if ($request_query == "苗字順" && $request_sort == "昇順") {
        $employees->sortBy('family_name')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
    }
    if ($request_query == "苗字順" && $request_sort == "降順") {
        $employees->sortByDesc('family_name')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);

    }
    if ($request_query == "誕生日順" && $request_sort == "昇順") {
        $employees->sortBy('birthday')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
    }
    if ($request_query == "誕生日順" && $request_sort == "降順") {
        $employees->sortByDesc('birthday')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
    }
    if ($request_query == "就職日順" && $request_sort == "昇順") {
        $employees->sortBy('hire_date')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
    }
    if ($request_query == "就職日順" && $request_sort == "降順") {
        $employees->sortByDesc('hire_date')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
    }
    if ($request_query == "場所順" && $request_sort == "昇順") {
        $employees->sortBy('position')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
    }
    if ($request_query == "場所順" && $request_sort == "降順") {
        $employees->sortBy('position')->values();
        return view('employeeDatebase', [
            'employees' => $employees
        ]);
   }

    return view('employeeDatebase', [
            'employees' => $employees
    ]);
});

//Route::get('/employeeDatebase/{request_query}/{request_sort}/',function($request_query,$request_sort) {

//    $employees =DB::select('select * from employees');




/*
    $employees =DB::select('select * from employees');
    //$data = employee::all(); //全件取得
    return view('employeeDatebase',[
        'employees'=>$employees
    ]);
*/




//データベース検索

Route::get('/employees', function () {
    $employees =DB::select('select * from employees');
    return view('employeeSearch',[
        'employees'=>$employees
    ]);
});
Route::get('/employeeSearch', 'EmployeeSearchController@store');




//データベース更新
Route::get('/update', function () {
    $employees =DB::select('select * from employees');
    return view('employeeUpdate',[
        'employees'=>$employees
    ]);
});
Route::get('/employeeUpdate', 'EmployeeUpdateController@store');
Route::post('/rewrite', 'EmployeeReriteController@store');





//インターンの内容


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