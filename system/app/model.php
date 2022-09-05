<?php
abstract class Model{
    const DBHOST="localhost" ;
    const DBNAME="helloworld";
    const DBUSER="root";
    const PASSWORD="";
    protected $conn;

    function __construct()
    {
        $this->conn = new mysqli(self::DBHOST,self::DBUSER,self::PASSWORD,self::DBNAME,3307);
    }
    public function getTableCols($tableName){
       $result= $this->conn->query("SHOW COLUMNS FROM $tableName;");
       return $result->fetch_all(MYSQLI_ASSOC);
    }
    
     
        
} 