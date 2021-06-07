<?php
include "./conn/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin manage</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "../../assist/admin-header.php";
    include "../../assist/checkvaliduser.php";
    include "./sidebar.php";

    if (isset($_POST['Submit'])) {
        $username = trim($_POST['username']);
        $useremail = trim($_POST['useremail']);
        $userpass = trim($_POST['userpass']);
        $usercpass = trim($_POST['usercpass']);
        $obj->registeruser($username, $useremail, $userpass, $usercpass);
    }

    ?>



    <div class="mainsection">
        <div class="registeration">
            <form action="" method="POST">
                <label for="">Name</label>
                <input type="text" name="username" placeholder="Enter Your name">
                <label for="">Email</label>
                <input type="email" name="useremail" placeholder="Enter Email id">
                <label for="">Password</label>
                <input class="pass" type="password" name="userpass" placeholder="Enter Password">
                <label for="">Conform password</label>
                <input class="cpass" type="password" name="usercpass" placeholder="Enter Conform Passrord">

                <input type="submit" value="SingUp" class="submit-btn" name="Submit">
            </form>
        </div>
    </div>

    </div>

</body>

</html>