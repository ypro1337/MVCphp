<?php 
class HelloCtrl extends Controller{
    
    function __construct()
    {
        
        $this->model=new User;
    }

    public function run(){
       $scope= $this->model->hello();
            require_once ROOT . "\\views\\hello.php";
            /*  <?php foreach($scope as $user){echo"Team Member  {$user['username']}<br>";}  ?>*/

    }

}