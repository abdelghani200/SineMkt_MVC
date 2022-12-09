<?php

require_once('Models/Login.php');

class LoginController{

    // public $models;

    public function index()
    {

        $db = new Login();
        $data['users'] = $db->getUser();
        // var_dump($data['users']);
        View::load('login',$data);
        
    }
    
    public function getLogin(){
        
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->conn = new Product();
            $data = Array ( "username" => trim($username) ,
                            "password" => trim($password)
                            );
            echo $username ."---------------" . $password ."---------------";   
            //var_dump($data);
            $db = new Login();
            if($db->insertUser($data)){
                echo "hhhhhh";
                header("Location: http://mvc_ex1.test/product/index");
            }
            
            else{
                echo 'La3dass';
            }

           
        }
    }
   


}