<?php
require_once ROOT . "/system/app/controller.php";
require_once ROOT . "/system/app/model.php";
require_once ROOT . "/system/SQLhelper.php";
require_once ROOT . "/system/router.php";
require_once ROOT . "/system/config.php";


function autoload($classname){
    
        $pathctrl= ROOT . "/controller/{$classname}.php";
        $pathmodel= ROOT . "/model/{$classname}.php";
        if (file_exists($pathctrl))
        require_once $pathctrl ;
        if (file_exists($pathmodel))
        require_once $pathmodel ;

    }

    spl_autoload_register('autoload');
