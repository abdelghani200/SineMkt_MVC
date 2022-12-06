<?php

class AboutController{
    
    public function index(){

        // // echo "This class :".__CLASS__ ."and method :".__METHOD__;

        // // require_once(VIEWS.'home.php');
        // $data['title']="Home22";
        // $data['content']="contenu page home";
        View::load('about');
    }
}

