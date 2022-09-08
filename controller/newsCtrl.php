<?php 
class NewsCtrl extends Controller{
    
    function __construct()
    {
        
        $this->model=new User;
    }

    public function run(){
       $scope= $this->model->news();
        require_once ROOT . "\\views\\news.php";
    }

}