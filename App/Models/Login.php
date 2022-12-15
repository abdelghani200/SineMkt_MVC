<?php

// require_once('Core/DB.php');

class Login extends DB
{

    private $table = "users";
    private $conn;
    public $id;

    public function __construct()
    {
        // $this->conn = $this->connect();
        $this->conn = mysqli_connect(HOST,USER,PASS,DBNAME);
    }

    
     
    
  public function login($username, $password){
    $result = mysqli_query($this->conn, "SELECT * FROM $this->table WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
      if($password == $row["password"]){
        $this->id = $row["id"];
        return 1;
        // Login successful
      }
      else{
        // return 10;
        return 0;
        // Wrong password
      }
    }
    // else{
    //   return 100;
    //   // User not registered
    // }
  }

  public function idUser(){
    return $this->id;
  }
  

 

}
