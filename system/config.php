<?php
function get($key){
    return isset($_GET[$key]) && empty($_GET[$key]) ?  $_GET[$key] : "helloworld" ;
}