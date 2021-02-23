<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Image</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../assist/headercss.css">
</head>
<body>
    
   <?php
   include "../../assist/checkvaliduser.php";
   include "../../assist/admin-header.php"
   ?>


   <?php
   include "./sidebar.php"
   ?>

        <div class="mainsection">

            <form action="" method="post">
                <input type="file" name="image" id="" required>
                <input type="submit" class="submit-btn" name="submit" value="Upload">
            </form>






        </div>

</body>
</html>