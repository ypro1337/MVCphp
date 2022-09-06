<?php 
class ErrorCtrl {
    private $code ;
    private $message; 
    function __construct()
    {
        
    }
    public function ExceptionHandler($code,$message){
        $scope=["code" => $code,
                "message"=> $message,                  
                ];
                
                require_once ROOT . "/views/error.php";
    }
}