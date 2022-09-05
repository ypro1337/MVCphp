<?php
class Router{
    private $ctrler ;
    private $method;
    private $page ;

    public  $routing=[  "helloworld" => ["ctrler"=>"helloCtrl", "method" =>"helloPeople"],
]; //controller name to include method name to load view and do the shit
//page => controllers / method to get view + default 


function __construct()
{
    $this->page= get("page") ;
    $this->method= new users; 
    $this->ctrler = new helloCtrl ;
    $this->ctrler->$this->page["method"];
    
}

   

   
}
