<?php

class NewarivalController{
    
    public function index(){

        
        View::load('newarival');
    }


    public function add()
    {
        return View::load('product/add');
    }
}

