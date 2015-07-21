<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/07/22
 * Time: 2:31
 */

namespace App\Http\Controllers;


class UserController {

    public function getLogin(){
        return view("sample/login");
    }

    public function postLogin(){
        $username = Input::get("username");
        $password = Input::get("password");
        $result = DB::select("SELECT * FROM users where name = :name ",[
            "name" => $username
        ]);

        if($result && Hash::check($password, $result[0]->password)){
            return redirect("dashboard");
        }else{
            session()->flash("error","ユーザ名またはログインIDが異なります。");
            return redirect("login");
        }
    }

    public function getDashboard(){
        return view('sample/dashboard',[
            "message" => "Hello World"
        ]);
    }


}