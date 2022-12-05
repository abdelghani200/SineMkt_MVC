<?php

class ProductController{

    public function index(){
        $db = new Product();   
        
        var_dump($db->getAllProducts());
    }
}