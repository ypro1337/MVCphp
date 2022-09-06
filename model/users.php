<?php

class User extends Model
{
    private $instance;

    public function hello()
    {
        $query = "SELECT * FROM users";
        $result = $this->conn->query($query);
        if ($result->num_rows) {
            
            while($row = $result->fetch_assoc()){
                $scope[]=$row;
                
            }
            return $scope ;
        }
        else {
            echo "no users";
        }
    }
}
