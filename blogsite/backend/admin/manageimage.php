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
    include "./sidebar.php";
    require_once "./conn/db.php";
    if (isset($_POST['submit'])) {
        $file = $_FILES['image'];
        $msg = $img->setimage($file);
    }
    ?>


</body>
<div class="mainsection">
    <div class="error">
        <?php if (isset($msg)) {
        ?>
            <label id="error" for="msg"><?php echo $msg ?></label>
        <?php
        }
        ?>
    </div>
    <div class="manageimage">

        <div class="uplodesection">
            <form action="./manageimage.php" method="POST" enctype="multipart/form-data">
                <input required id="btnupload" type="file" name="image" src="" alt="">
                <button name="submit" name="submit" type="submit">Upload</button>
            </form>
        </div>

        <div class="imagesection">
            <div class="row">
                <?php

                $stmt = $db->prepare("SELECT * FROM imagestore");
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $key => $value) {
                ?>

                    <div class="column">
                        <input type="radio" name="image" id="<?php echo $value['id'] ?>" value="<?php echo $value['filename'] ?>">
                        <label for="<?php echo $value['id']; ?>"> <img class="img" id="<?php echo $value['id'] ?>" src="../../assist/images/blog_image/<?php echo $value['filename'] ?>" alt=""> </label>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>


    </div>
</div>

</body>

</html>