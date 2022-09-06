<?php
class DB{
    static private $conn ;
         function __construct()
        {
            self::$conn=new mysqli(DBHOST, DBUSER, PASSWORD, DBNAME, 3307);
        }
    
    public static function getConn ()
    {

        if (!isset(self::$conn)) {
            self::$conn = new self();
        }

        return self::$conn;
        
    }
}