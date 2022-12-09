<?php

class Login extends DB{

    private $table="users";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function getUser()
    { 
        return $this->conn->get($this->table);
    }

    public function insertUser($data){
        return $this->conn->insert($this->table,$data);
    }

    
}