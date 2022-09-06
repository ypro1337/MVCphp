<?php
define ("ROOT", __DIR__);
require_once ROOT . "/system/autoloader.php";
try {
    $db= new DB() ;
    $router = new Router();
    $router->run();
} catch (Exception $e) {
    $msg = $e->getMessage();
    $code = $e->getCode();
    $errorCtrl->ExceptionHandler($code,$msg);
    
}
