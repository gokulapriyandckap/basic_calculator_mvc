<?php

class Database{
    public $db;

    public function __construct()
    {
        try {

            $this->db = new PDO('mysql:host=127.0.0.1;dbname=calculator',
                'admin',
                'welcome');
        }
        catch (Exception $e){
            die($e->getMessage()."db didn't connected");
        }
    }
}

class userModel extends Database{
    public $result;
    public function insert($first_number,$second_number,$operator){
        switch ($operator){
            case "+":
                $this->result = $first_number + $second_number;
                break;
            case "-":
                $this->result = $first_number - $second_number;
                break;
            case "*":
                $this->result = $first_number * $second_number;
                break;
            case "/":
                $this->result = $first_number / $second_number;
        }
        $this->db->query("INSERT into calculations(first_number,second_number,operator,result) values('$first_number','$second_number','$operator','$this->result')");
        header("location:/");
//    echo "hi";
    }
    public function fetch(){
        $fetch = $this->db->query("SELECT * FROM calculations");
        $fetchAll = $fetch->fetchAll(PDO::FETCH_OBJ);
        return $fetchAll;
    }
    public function delete($deleteId){
        $this->db->query("DELETE FROM calculations WHERE id = '$deleteId'");
        header("location:/");
    }
    public function read($editId){
    $editFetch = $this->db->prepare("SELECT * from calculations where id = '$editId'");
    $editFetch->execute();
    $editFetchAll = $editFetch->fetchAll(PDO::FETCH_OBJ);
    return $editFetchAll;
    }
    public function update($editFirstNum,$editSecondNum,$editOperator,$editId){
        switch ($editOperator){
            case "+":
                $this->result = $editFirstNum + $editSecondNum;
                break;
            case "-":
                $this->result = $editFirstNum - $editSecondNum;
                break;
            case "*":
                $this->result = $editFirstNum * $editSecondNum;
                break;
            case "/":
                $this->result = $editFirstNum / $editSecondNum;
        }
     $this->db->query("UPDATE calculations SET first_number='$editFirstNum',second_number='$editSecondNum',operator='$editOperator',result='$this->result'where id='$editId'");
    }
}



