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

        $value = implode("','", array_values($insertArray));
        $query = "INSERT INTO $table ($key) VALUES ('$value') ";

        $res = $this-> connection-> query ($query);
        return $res;
    }

    public function selectData($table){
        $query = "SELECT * FROM $table";
        $res = $this -> connection -> query ($query);
        while ($row = $res -> fetch_object() ){
            $rw[] = $row;
        }
        return $rw ?? [];
    }

    public function findOne($table, $where){
        // SELECT FROM table WHERE 1 = 1 AND id = $id;          //we run loop because there can be multiple conditions for finding the one
        $query = "SELECT * FROM $table WHERE 1 = 1";
        foreach($where as $key => $value){
            $query.= " AND ". $key ." = '".$value."'";
        }
        $res = $this-> connection-> query ($query);
        $rw = $res -> fetch_object();
        return $rw ?? [];
    }

    public function deleteData($table, $where){
        // DELETE FROM table WHERE 1 = 1 AND id = $id;          //we again run loop 
        $query = "DELETE FROM $table WHERE 1=1";
        foreach($where as $key => $value){
            $query.= " AND ". $key ." = '".$value."'";
        }
        $res = $this -> connection -> query ($query);
        return $res;
    }

    public function updateData($table, $setArray, $where){
        // UPDATE table SET col=val, col=val WHERE 1=1 AND $id=1;
        $query = "UPDATE $table SET ";
        echo $count = count($setArray);
        $i=0;
        foreach($setArray as $key => $value){
            if($i < $count - 1){
                $query.= " " .$key." = '" .$value. "',";
            }
            else{
                $query.= " " .$key." = '" .$value. "'";
            }
            $i++;
        }
        $query.=" WHERE 1=1 ";
        foreach ($where as $key => $value){
            $query.=" AND ".$key." = '".$value."'";
        }
        $res = $this -> connection -> query ($query);
        return $res;
    }

    public function selectDataJoin($table, $join)
    {
        $query = "SELECT * FROM $table"; // join category on
        foreach ($join as $key=>$value)
        {
            $query.=" JOIN ".$key." ON ".$value;
        }
        $res = $this -> connection -> query ($query);
        while ($row = $res -> fetch_object())
        {
            $rw[] = $row;
        }
        return $rw ?? [];
    }


}
?>