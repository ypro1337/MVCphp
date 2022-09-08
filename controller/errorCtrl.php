<?php
class ErrorCtrl
{
    public function exceptionHandler($exception)
    {
        $msg = $exception->getMessage();
        $code = $exception->getCode();
        $this->displayError($msg, $code);
    }

    public function displayError($message, $code)
    {
        require_once ROOT . "/views/error.php";
    }
}
