<?php
namespace App\Model;


/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/07/22
 * Time: 2:34
 */

class User {

    static public function checkLogin($username,$password){
        $user = \DB::table("users")->where("name",$username)->get();

        if($user && \Hash::check($password, $user->password)){
            return true;
        }else{
            return false;
        }
    }

}