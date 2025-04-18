<?php
class controller extends model{
    public function __construct(){
        parent::__construct();
    }
    
    public function home(){
        include('view/home.php');
    }

    public function about(){
        include('view/about.php');
    }

}
?>