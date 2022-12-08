<?php

// require_once('Models/models.php');

class LoginController{

    public $models;

    public function __construct()
    {
        $this->models = new Model();
    }

    public function invoke(){


        $reslt = $this->models->getlogin();

        if($reslt == 'login'){
            include 'Views/login/afterlogin.php';
        }
        else{
            include 'Views/login/login.php';
        }
    }
}