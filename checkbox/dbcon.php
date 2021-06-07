
<?php
$db_host="localhost";
$db_pass="";
$db_user="root";
 $db_name="image";

try {
   $db = new PDO("mysql:host={$db_host}; dbname={$db_name}",$db_user,$db_pass);
} catch (Exception $th) {
    echo $th->getMessage();
}

?>