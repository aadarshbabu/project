<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artical</title>
    <link rel="stylesheet" href="style.css">
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>

    <?php

    include "../../assist/admin-header.php";
    include "sidebar.php";
    include "/conn/db.php";
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d-m-Y h:i:sa");

    if (isset($_POST['submit-btn'])) {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $slug = $_POST['slug'];
        $discription = $_POST['discription'];
        $post = $_POST['post'];
        $category = $_POST['category'];
        $author = $_POST['author'];
        $Pobj->updatepost($id, $title, $slug, $discription, $post, $category, $author, $date);
    }

    if (isset($_GET['id'])) {
        $flag = true;
        $id = $_GET['id'];
        $res = $Pobj->fetchpost($flag, $id);
    }

    ?>





    <div class="mainsection">
        <div class="post-container">

            <form action="" method="POST">
                <label for="">Title</label>
                <input name='title' type="text" placeholder="Title" value="<?php echo $res['title'];  ?>" required>
                <label for="">Slug</label>
                <input type="text" name='slug' placeholder="Enter You Title Your slug is auto generated" value="<?php echo $res['slug'];  ?>">
                <label for="">Discription</label>
                <textarea name='discription' id="" value="" cols="" rows="3" required> <?php echo $res['descr']; ?> </textarea>
                <label for="">Post</label>
                <div id="editor">
                    <textarea value="" name="post" id="" cols="30" rows="20" required> <?php echo $res['post']; ?> </textarea>
                </div>

                <div class="category">
                    <label for="">Category</label>

                    <select name="category" id="" required>
                        <option value="" disabled selected> Chouse Category</option>

                        <?php require_once "./conn/db.php";
                        $TRUE = 1;
                        $variable = $Pobj->Getcategory($TRUE);
                        foreach ($variable as $key => $value) {

                        ?>
                            <option value="<?php echo $value['id']; ?>"> <?php echo $value['topicname']; ?> </option>

                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div id="author">
                    <label for="">Author</label>
                    <input value="<?php echo $res['writer']  ?>" name='author' required type='text' plaseholder="Enter author name" />

                </div>
                <!-- <label for="">Are You sure Publish the post</label>
                <input type="checkbox" name="check" id="" required value='true'>                       -->
                <div class="btn">
                    <input name='submit-btn' type="submit" id="submit-btn" value="Update">
                </div>

                <div class="btn-save">
                    <input name='submit-btn' type="submit" id="submit-btn" value="Save">
                </div>


            </form>

        </div>

    </div>



    </div>



    <script>
        CKEDITOR.replace('post');
    </script>

</body>

</html>