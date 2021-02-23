<?php
$HOST="localhost";
$DBNAME="blog";
$USERNAME="root";
$PASSWORD= "";

// define('HOST','localhost');
// define('DBNAME','blog');
// define('USERNAME','root');
// define('PASSWORD','');

try {
    // $DB=new PDO("mysql:host=".HOST."; dbname=".DBNAME,USERNAME,PASSWORD);
   $db = new PDO("mysql:host={$HOST}; dbname={$DBNAME}",$USERNAME,$PASSWORD);
  //  if($db)
  //  {
  //    echo "conected";
  //  }
//    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}",$db_user,$db_pass);
} catch (Throwable $th) {
    echo $th->getMessage();
}
  include "classes.php";
  $obj=new userRegistration($db);


?>