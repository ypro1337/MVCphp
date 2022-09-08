<?php
class Router
{
    private $ctrler;
    private $method;
    private $page;
    private $defaultPage;
    private $navbar;

    public  $routing = [
        "helloworld" => ["ctrler" => "helloCtrl", "method" => "run"],
        
    ]; //controller name to include method name to load view and do the shit
    //page => controllers / method to get view + default 

    public function get($key)
    {
        return isset($_GET[$key]) && !empty($_GET[$key]) ?  $_GET[$key] : $this->defaultPage;
    }

    function __construct()
    {
        $this->defaultPage="helloworld";
        $this->page = $this->get("page");
        $this->routing= $GLOBALS["routingTable"] ;
        $this->navbar=$GLOBALS["navbar"];

        if (array_key_exists($this->page, $this->routing)) {

            $info = $this->routing[$this->page];
            $this->ctrler = $info["ctrler"];
            $this->ctrler = new $this->ctrler;
            $this->method = $info["method"];
        } else {
            throw new Exception("Page Not Found", 404);
        }
    }
    

    public function run()
    {
        $this->ctrler->{$this->method}();
    }

    
    
}
