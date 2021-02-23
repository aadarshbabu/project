<?php
$db_host="localhost";
$db_pass="";
$db_user="root";
 $db_name="pdocrud";

try {
   $db = new PDO("mysql:host={$db_host}; dbname={$db_name}",$db_user,$db_pass);
} catch (Exception $th) {
    echo $th->getMessage();
}

include "./curdclass.php";
  
$crud = new crud($db);




?>

