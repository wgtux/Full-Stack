<?php
namespace src\handlers;

use \src\models\User;

//classe para verificação de login
class LoginHandler {

    public static function checkLogin(){
        //verifica se tem a sessão token
        if(!empty($_SESSION['token'])){
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();
            
            //verifica se teve algum retorno de usuario
            if(count($date) > 0){

                $loggedUser = new User();

                $loggedUser->id = $data['id'];
                $loggedUser->email = $data['email'];
                $loggedUser->name = $data['name'];

                return $loggedUser;
            }
        }
        return false;
    }
}
