

<?php
session_start();

$userEmail=$_POST['emailId'];
$userpassword=$_POST['Password'];

$database= 'localhost';
$databasename='passwordsaver';
$user='root'; 
// echo "hello world";

$con=mysqli_connect($database,$user);
mysqli_select_db($con,$databasename);


$q3="SELECT * FROM paasordsaver WHERE emailId='$userEmail' && userPassword='$userpassword'";

$_SESSION['username']=$userEmail;

$result=mysqli_query($con,$q3);
echo $result;

mysqli_close($con);

header("loction:http://localhost:8080/project/home.html");  
exit;

?>