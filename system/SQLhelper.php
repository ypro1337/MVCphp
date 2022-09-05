<?php
class SQLHelper extends model{
    private $model ;
    function __construct($model)
    {   
        $this->model=$model;
    }
    public function InsertInto($tableName){
        $table= $this->model->getTableCols($tableName);
        print_r($table);
        die("shh");
    }
}   