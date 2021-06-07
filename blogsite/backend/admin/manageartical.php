<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artical</title>
    <link rel="stylesheet" href="style.css">
    <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="./testfile.js"></script>
</head>

<body>

    <?php

    include "../../assist/admin-header.php";
    include "sidebar.php";
    include "./conn/db.php";
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d-m-Y h:i:sa");

    if (isset($_POST['submit-btn'])) {
        $title = $_POST['title'];
        $slug = rtrim(str_replace(" ", "/", preg_replace('/\s+/', ' ', strtolower($title))), "-");
        $discription = $_POST['discription'];
        $post = $_POST['post'];
        $category = $_POST['category'];
        $author = $_POST['author'];
        $image = $_POST['image'];
        $Pobj->SubmitPost($title, $slug, $discription, $post, $category, $author, $date , $image);
    }

    ?>





    <div class="mainsection">

        <div class="post-container">

            <form action="" method="POST">
                <label for="">Title</label>
                <input onchange="createslug()" name='title' type="text" id="title" placeholder="Title" required>
                <label for="">Slug</label>
                <input disabled type="text" name='slug' id='preslug' placeholder="Enter You Title Your slug is auto generated" value="">
                <label for="">Discription</label>
                <textarea name='discription' id="" cols="" rows="3" required> </textarea>
                <label for="">Post</label>
                <div id="editor">
                    <textarea name="post" id="" cols="30" rows="20" required> </textarea>
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
                    <input name='author' required type='text' plaseholder="Enter author name" />
                </div>

                <div class="imgblog">
                    <span onclick="exit()" class="close">&times;</span>

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
                        <div class="chosebtn">
                          <button type="button" onclick="setimage()">Insert</button>
                        </div>
                    </div>


                    
                </div>

                <div class="insertimage">
                    <input id="img" type="text" value="" name="image" readonly>
                  <button  onclick="showdiv()">insert</button>
                   
                </div>

                <div class="btn">
                    <input name='submit-btn' type="submit" id="submit-btn" value="Publish">
                </div>

                <div class="btn-save">
                    <input name='submit-btn' type="submit" id="submit-btn" value="Save">
                </div>


            </form>

        </div>

    </div>



    </div>



    <script>
        function createslug() {
            var data, data2, url;
            data = document.getElementById("title").value;
            data2 = data.replace(/\s+/g, ' ').trim();
            url = data2.replaceAll(" ", "/");
            document.getElementById("preslug").value = url;
            console.log(url);

        }

        function setimage() {
            let path = document.querySelector('input[name="image"]:checked');
            document.querySelector("#img").value = path.value;
            exit();
        }

        function showdiv() {
            let box = document.querySelector(".imgblog")
            box.style.display = "block";
        }



        function exit() {
            let box = document.querySelector(".imgblog")
            box.addEventListener('click', () => {
                box.style.display = "none";
            })

        }
        CKEDITOR.replace('post');
    </script>

</body>

</html>