<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/07/22
 * Time: 2:31
 */

namespace App\Http\Controllers;


/**
 * トレイトを使ってモデルの呼び出しやバリデーション、エラー処理などを共通化していくことが可能
 * @package App\Http\Controllers
 */
trait UserControllerTrait {

    protected function validateUsernameAndPassword($username,$password){
        // ....
    }

    protected function checkLogin($username,$password){
        // ....
    }

    protected function setErrorMessage($message){
        // ....
    }
}