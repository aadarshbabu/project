<?php
include "../../assist/checkvaliduser.php";
include "../../assist/admin-header.php";
include "./sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mangae Catogury.</title>
</head>

<body>


    <?php

    if (isset($_GET['id'])) {
        require_once "./conn/db.php";
        $id = $_GET['id'];
        $Pobj->DeleteCategory($id);
    }

    if (isset($_GET['Uid'])) {
        require_once "./conn/db.php";
        $id = $_GET['Uid'];
        $Pobj->UpdateCategory($id);
    }

    if (isset($_GET['submit'])) {
        try {
            require_once "./conn/db.php";
            $category = trim($_GET['category']);
            $Pobj->Addcategory($category);
        } catch (Throwable $th) {
            echo $th->getmessage();
        }
    }
    ?>


    <div class="mainsection">

        <div class="add-catugory">
            <form action="" method="get">
                <label for=""> Enter Post Catugory </label>
                <input type="text" name="category" id="" placeholder="Enter a Category" />
                <button name="submit" type="submit"> Submit</button>
            </form>

        </div>

        <div class="edit-category">

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
                <?php
                require_once "./conn/db.php";
                $TRUE = 1;
                $obj = $Pobj->Getcategory(!$TRUE);
                ?>

            </table>

        </div>



    </div>

</body>

</html>