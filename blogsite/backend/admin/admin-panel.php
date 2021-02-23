<?php;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>



    <?php
    include "../../assist/checkvaliduser.php";
    include "../../assist/admin-header.php";
    include "./sidebar.php";
    ?>


    <div class="mainsection">
        <div class="noofpost">
            <p>No of posts</p>

        </div>
        <div class="trafic">

        </div>




    </div>



    </div>



    <!-- 
    <script>

        var menu = document.getElementById('icon');
        var Nav=document.getElementById('nav-div');
        Nav.style.right = "-250px";
        menu.onclick = function () {
            if (Nav.style.right == "-250px") {
                Nav.style.right = "0px";
            }
            else {
                Nav.style.right = "-250px";
            }
        }

   
       </script> -->

</body>

</html>