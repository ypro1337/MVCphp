<?php
global $routingTable;
global $navbar;
 $routingTable = [
    "helloworld" => [
        "ctrler" => "helloCtrl",
        "method" => "run"
    ],
    "news" => [
        "ctrler" => "newsCtrl",
        "method" => "run"
    ],
];

$connection = [
    'DBHOST' => "localhost",
    'DBNAME' => "helloworld",
    'DBUSER' => "root",
    'PASSWORD' => "",
];
$navbar= ["helloworld","news","error",

];

DB::setConn($connection['DBHOST'], $connection['DBNAME'], $connection['DBUSER'], $connection['PASSWORD']);

    
