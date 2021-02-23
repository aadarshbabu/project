<?php
  include "./db.php";
if(isset($_GET['id']))
    {
        $id= $_GET['id'];
        $crud->deletedata($id);

    }

?>