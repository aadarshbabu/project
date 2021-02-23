<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Admin Panel</title>
    <script src="https://kit.fontawesome.com/a39101c90e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container-login">
        <div class="logo">
            <h2> Login CodeVsProgram</h2>
        </div>

        <?php
        if (isset($_POST['submit-bn'])) {

            include "./conn/db.php";
            $useremail = trim($_POST['useremail']);
            $userpassword = trim($_POST['userpassword']);
            $obj->userlogin($useremail, $userpassword);
            if (isset($_SESSION['msg'])) {
                $massgae = $_SESSION['msg'];
            }
        }


        ?>

        <div class="login-form">
            <div class="msg">
                <p style="color: red">
                    <?php
                    if (isset($massgae)) {
                        echo $massgae;
                    }
                    ?>
                </p>

            </div>
            <div class="input-element">
                <form method="POST" action="">
                    <h3> Username</h3>
                    <i class="far fa-user"></i> <input required type="text" name="useremail" placeholder="Enter username">
                    <h3> Password</h3>
                    <i class="fas fa-lock"></i> <input required type="password" name="userpassword" placeholder="Enter password">
                    <div class="form-btn">
                        <button class="submit-btn" name="submit-bn" type="submit"> Login</button>
                        <button class="reset-btn" type="reset">Reset</button>
                    </div>

                </form>
            </div>
        </div>

    </div>





</body>

</html>