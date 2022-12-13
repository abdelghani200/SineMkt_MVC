<?php

require_once('Models/Login.php');

class LoginController{

    // public $models;

    public function index()
    {

        // $db = new Login();
        //$data['users'] = $db->getUser();
        // var_dump($data['users']);
        View::load('login');
        
    }
    
    public function getLogin(){

        $login = new Login();

        if(isset($_POST["submit"])){
            $result = $login->login($_POST["username"], $_POST["password"]);
          
            if($result == 1){
              $_SESSION["login"] = true;
              $_SESSION["id"] = $login->idUser();
              // header("Location: index.php");
              // View::load('product/index');
              header("Location: http://mvc_ex1.test/product/index");
            }
            else{
              //echo  "<script> alert('Wrong Password'); </script>";
              View::load('login', ["error" => "Data Not Successfully"]);
            }
          }
          
          
          // if($result == 0)
          // elseif($result == 100){
          //   echo
          //   "<script> alert('User Not Registered'); </script>";
          // }
        }
   


}