<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Post</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
    include "../../assist/admin-header.php";
    include "./sidebar.php";
    include "../../assist/checkvaliduser.php";
    include "./conn/db.php";
    ?>

    <div class="mainsection">

        <div class="managepost">
            <label for="">Manage Your Post</label>
            <table>
                <tr>
                    <th> Id</th>
                    <th> Post</th>
                    <th> Date</th>
                    <th> delete</th>
                    <th> Update</th>
                    <th> Author</th>
                    <th> Publish</th>
                </tr>



                <?php
                // Delete post 

                if (isset($_GET['id'])) {
                    $Pobj->deletepost($_GET['id']);
                }




                ///
                $flag = false;

                $result = $Pobj->fetchpost($flag);

                foreach ($result  as $array) {

                ?>
                    <tr>
                        <td> <?php echo $array['id']; ?> </td>
                        <td> <?php echo $array['title']; ?> </td>
                        <td> <?php echo $array['pdate']; ?> </td>
                        <td> <a href="?<?php echo "id=" . $array['id'] ?>"> <button class="btn-del">Delete</button> </a> </td>
                        <td><a href=" updatepost.php?<?php echo "id=" . $array['id'] ?>"> <button class="btn-del">Update</button> </a> </td>
                        <td> <?php echo $array['writer']; ?> </td>
                        <td> <?php echo "Publish" ?> </td>
                    </tr>
                <?php

                }


                ?>



            </table>
        </div>
    </div>

</body>

</html>