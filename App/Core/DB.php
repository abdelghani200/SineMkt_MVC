<?php

require_once(LIBS.'DB/Mysqlidb.php');

class DB{

    protected $db;
    public function connect(){
        $database = new MysqliDb(HOST,USER,PASS,DBNAME);

        if(!$database->connect()){
            // echo "sdtyegf";
            $this->db =$database;
            return $this->db;
        }
        else{
            echo "Error";
        }
    }

}