<?php
    $firstName=$_POST['first_name'];
    $secondName=$_POST['last_name'];
    $emailid=$_POST['email_id'];
    $userPassword=$_POST['Password'];



    $database= 'localhost';
    $databasename='passwordsaver';
    $user='root';




   $con=mysqli_connect($database,$user);
    if($con){
        echo "Database Connect";
    }

   mysqli_select_db($con,$databasename);

   $q="INSERT INTO userregistration (firstName, lastName, emailId, userPassword) 
   VALUES ('$firstName', '$secondName', '$emailid', '$userPassword');";


     
     

        $check= mysqli_query($con,$q);
        if($check)
        {
            echo 'You are login Successfully';

        }
        else{
            echo "Your login is fail.. try again";
        }

        mysqli_close($con);

    

        header('location:http://localhost:8080/project/login.html');

        exit;





















?>

