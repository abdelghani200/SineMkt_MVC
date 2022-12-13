<?php

class Product extends DB{

    private $table="products";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function getAllProducts()
    { 
        return $this->conn->get($this->table);
    }



    public function insertProduit($data){

        return $this->conn->insert($this->table,$data);
    }


    public function deleteProduct($id){

        $db = $this->conn->where('id',$id);
        
        return $db->delete($this->table);
    }


    public function getRow($id)
    {
        $db =$this->conn->where("id",$id);
        return $db->getOne($this->table);
    }

    
    public function updateProduct($id,$data)
    {
        $product = $this->db->connect()->where('id', $id);
        return $product->update($this->table,$data);
    }
    
    
}