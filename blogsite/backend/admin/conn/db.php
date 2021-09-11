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
  //  
  //    echo "conected";
  //  }
//    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}",$db_user,$db_pass);
} catch (Throwable $th) {
    echo $th->getMessage();
}

 // This method call when you create an object in any class. and pass the class name in the "$class" argument variable..
   function __autoload($class){ 
     require "classes/".$class.".php";
   }
  $obj=new userRegistration($db);
  $Pobj = new submitPost($db);
  $postdata = new blogfetch($db);
  $img= new manageimage($db);
?>