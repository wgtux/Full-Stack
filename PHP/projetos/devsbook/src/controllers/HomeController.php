<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    //Guarda o usuario logado
    private $loggedUserloggedUser;

    // primeiro metodo que vai ser executado
    public function __construct(){
        $this->redirect('/login ');
    }

    public function index() {
        
    }
}