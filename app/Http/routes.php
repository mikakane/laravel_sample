<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return "hello world";
});

Route::get('/dashboard', function () {
    //view関数でテンプレートをレンダリング 第二引数で変数をバインド
    return view('sample/dashboard',[
        "message" => "Hello World"
    ]);
});

Route::get('/login', function () {
    return view("sample/login");
});

//フォームなどPOSTで受け取るときはPOSTメソド
Route::post('/login', function () {
    $username = Input::get("username");
    $password = Input::get("password");
//    $result = DB::select("SELECT * FROM users where name = :name ",[
//        "name" => $username
//    ]);
//
//    if($result && Hash::check($password, $result[0]->password)){
    if(\App\Model\UserEloquent::checkLogin($username,$password)){
        return redirect("dashboard");
    }else{
        session()->flash("error","ユーザ名またはログインIDが異なります。");
        return redirect("login");
    }
});



