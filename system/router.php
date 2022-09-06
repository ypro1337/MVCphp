<?php
class Router
{
    public $ctrler;
    public $method;
    public $page;

    public  $routing = [
        "helloworld" => ["ctrler" => "helloCtrl", "method" => "run"],
    ]; //controller name to include method name to load view and do the shit
    //page => controllers / method to get view + default 


    function __construct()
    {
        $this->page = get("page");
        
        if (array_key_exists($this->page, $this->routing)) {

            $info=$this->routing[$this->page] ;
            $this->ctrler =$info["ctrler"];
            $this->ctrler= new $this->ctrler ;
            $this->method=$info["method"]; 
        }
        else{
            throw new Exception("Page Not Found",404);
        }
    }

    public function run(){
        $this->ctrler->{$this->method}();
    }
}
