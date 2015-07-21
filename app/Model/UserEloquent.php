<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/07/22
 * Time: 2:34
 */

class UserEloquent extends Model{

    protected $table = "users";


    static public function checkLogin($username,$password){
        $user = static::where("name",$username)->first();
        if($user && \Hash::check($password, $user->password)){
            return $user;
        }else{
            return false;
        }
    }



}