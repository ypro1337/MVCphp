<?php
class DB
{
    static private $conn;
    const DBHOST = "localhost";
    const DBNAME = "helloworld";
    const DBUSER = "root";
    const PASSWORD = "";
    private function __construct()
    {
        self::$conn = new mysqli(self::DBHOST, self::DBUSER, self::PASSWORD, self::DBNAME, 3307);
    }

    public static function getConn()
    {
        if (!isset(self::$conn)) {
            self::$conn = new self();
        }

        return self::$conn;
    }
    public static function setConn($DBHOST,$DBNAME,$DBUSER,$PASSWORD)
    {
        self::$conn=new mysqli($DBHOST, $DBUSER, $PASSWORD, $DBNAME, 3307);
    }
}
