<?php

class model{
    public $connection;
    
    public function __construct(){
        $this->connection = new mysqli('localhost', 'root', '', 'db_tops_computer_mvc');
        // $this->connection = new PDO('mysql:host=localhost;dbname=db_tops_computer_mvc', 'root', '');
        if (isset($this->connection)){
            // echo "Connection successful";
        } else {
            die("Connection failed");
        }
    }

    public function insertData($table, $insertArray){
        // INSERT INTO table (col1, col2) VALUES (val1, val2);
        $key = implode(",", array_keys($insertArray));

                // Properly quote each value
                $escapedValues = array_map(function($val) {
                    return "'" . addslashes($val) . "'";
                }, array_values($insertArray));
                $value = implode(",", $escapedValues);

        // $value = implode(",", array_values($insertArray));
        // $query = "INSERT INTO $table ($key) VALUES ('$value') ";
        $query = "INSERT INTO $table ($key) VALUES ($value) ";

        $res = $this-> connection-> query ($query);
        return $res;
    }


}
?>