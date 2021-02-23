
<?php
 include "./db.php"; 

 if(isset($_POST['submit']))
 {
    $id=$_GET['id'];
    $name=$_POST['username'];
    $email=$_POST['useremail'];
    if($crud->updatedata($id,$name,$email))
    {
        echo "value inserted";
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Insert Data Curd</title>
    
</head>
<body>
<?php
include "./header.php";
?>
<section class="form">


    <div class="form-container">
        <form action="" method="POST">
      Name  <input name="username" type="text" placeholder="Enter Your name">
      <div>
      Email  <input name="useremail" type="email" placeholder="Enter Your Email ">
        <button class="btninsert" type="submit" name="submit" value="Insert Your Data">Update Data</button>
        </div>
        </form>
    </div>
    </section>
</body>
</html>

