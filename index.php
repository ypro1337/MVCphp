<?php
define("ROOT", __DIR__);
require_once ROOT . "/system/autoloader.php";
try {
    $router = new Router();
    $router->run();
} catch (Exception $e) {
    $errorCtrl = new ErrorCtrl;
    $errorCtrl->exceptionHandler($e);
}
