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
    ?>
    <div class="mainsection">

        <div class="post-data">
            <table>
                <tr>
                    <th> Id</th>
                    <th> Post</th>
                    <th> Date</th>
                    <th> delete</th>
                    <th> Update</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Hello world What is your name and </td>
                    <td>22-02-1999</td>
                    <td>Delete</td>
                    <td>UPdate</td>


                </tr>

            </table>
        </div>
    </div>



    </div>

</body>

</html>