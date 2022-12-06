<?php

class App{

    protected $controller = "HomeController";
    protected $action = "index";
    protected $params=[];

    public function __construct()
    {
        $this->prepareUrl($_SERVER['REQUEST_URI']);
        $this->render();
    }

    public function prepareUrl($url){

        $url = trim($url,"/");
        if(!empty($url)){
            $url = explode("/",$url);
            $this->controller = isset($url[0]) ? ucwords($url[0])."Controller" :"HomeController";
            // echo $this->controller;
            $this->action =isset($url[1]) ? $url[1]:"index";
            // echo $this->action;
            $this->params = !empty($url) ?array_values($url):[];
        }
    }

    private function render(){

        if(class_exists($this->controller)){

            $controller = new $this->controller;
            if(method_exists($controller,$this->action)){

                call_user_func_array([$controller,$this->action],$this->params);
            }
        }
        else{
            echo "controller not exist";
        }
    }
}