<?php

namespace app\Controllers;

use app\Models\Pays;
use app\Models\Users;
use config\App;
use kernel\Auth;
use kernel\Request;


class AuthentifController extends \kernel\Controller{
    public function index(){

        $users = \app\Models\Users::all();

    
    }

    public function login(){
        return new \kernel\View('auth/index.php');
    }

   

    public function verifLogin() {


$users = \app\Models\Users::all();

return new \kernel\View('auth/test.php',['users'=>$users]);




       
    }
    
    

    public function logout(){
        session_destroy();
        header('location:.?controller=Authentif&action=login');
        
    }

    public function register(){
        return new \kernel\View('auth/register.php');
    }

    public function registerValid(){
        $user = Users::fromEmail(Request::post('email'));
        if (null==$user) {
            $user = new Users();
            $user->email = Request::post('email');
            $user->password = sha1(Request::post('password'));
            $user->store();
        }
        header('location:.?controller=Authentif&action=login');
    }



 
}