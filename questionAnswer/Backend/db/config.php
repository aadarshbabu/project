<?php

class Database{
    private
    $db,
    $HOST="localhost",
    $DBNAME="dbqna",
    $USERNAME="root",
    $PASSWORD= "";

    public function conn(){
        try{
            $this->db= new PDO("mysql:host={$this->HOST}; dbname={$this->DBNAME}",$this->USERNAME,$this->PASSWORD);
        }catch(Throwable $error){
           $error->getMessage();  // if has any error catck the error and show them
        }
        return $this->db;
    }
}
   
$database= new Database();
 $db = $database->conn();

function __autoload($class){   // this function call automatic when object has created. and its dynimacly load the file.
    require "classes/".$class.".php";
  }

  
$userauth= new userAuth($db);
$question= new question($db);





