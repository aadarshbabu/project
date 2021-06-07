<?php
   
   define("Login","login/index.php");
   session_start();
    if(!isset($_SESSION['user']))
    {
    
        header("location:Login");
    }
?>