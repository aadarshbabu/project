<?php
 $db = new PDO('mysql:host=localhost; dbname=user','root','');
 print_r($db);

 $stmt=$db->query("SELECT * from userinfo");
 echo "<pre>";

 print_r($value=$stmt->fetchAll(PDO::FETCH_OBJ));
//  echo $value[0]['name'];
//fetchall method return the value form big array.
 
 foreach($value as $values )
 {
     echo $values->name;
     echo "<br>";
     echo $values->email;

 }


?>