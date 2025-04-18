<?php

class model{
    public $connection;
    public function __construct(){
        // $this->connection = new mysqli('localhost', 'root', '', 'db_tops_computer');
        $this->connection = new PDO('mysql:host=localhost;dbname=db_tops_computer', 'root', '');
        if (isset($this->connection)){
            // echo "Connection successful";
        } else {
            die("Connection failed");
        }
    }
}

// $o = new model();

?>