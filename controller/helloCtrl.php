<?php 
class HelloCtrl extends Controller{
    function __construct()
    {
        
    }

    public function helloPeople(){
            echo "hello people " ; 
            require_once ROOT . "views/home.php";
    }

}