<?php
   session_start();
   
   session_destroy();

   header("location:/blogsite/backend/admin/Login/");

?>