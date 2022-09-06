<?php
abstract class Model
{
    protected $conn;

     function __construct()
    {
        $this->conn=DB::getConn();
    }
    

   

    
}
