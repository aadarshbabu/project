<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img</title>
    <link rel="stylesheet" href="imgcss.css">
</head>

<body>

    <?php
    require "./dbcon.php";
    $stmt = $db->prepare("SELECT * FROM imagestore");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (isset($_POST['submit'])) {
        $file = $_FILES['image'];

        if (file_exists("./image/" . $file['name'])) {
            echo $file['name'] . "already exist";
        } else if ($file['type'] == "image/jpeg" || $file['type'] == "image/png") {
            move_uploaded_file($file['tmp_name'], "./image/" . $file['name']);
            try {
                $stmt = $db->prepare("INSERT INTO imagestore (path, size) VALUES (:path, :size)");
                $stmt->bindParam(":path", $file['name']);
                $stmt->bindParam(":size", $file['size']);
                $stmt->execute();
                $error = $stmt->errorInfo(); // this statment is show the error in sql
                unset($_POST['submit']);

            } catch (Exception $th) {
                $th->getMessage();
                echo $error[2];
            }
        } else {
            echo "file formate is not valid";
            exit("");
        }
    } else {
        echo "Please Select Image";
    }

    ?>

    <div class="imgupload">
        <form action="./image.php" method="POST" enctype="multipart/form-data">
            <h4>Upload a image</h4>
            <input required id="btnupload" type="file" name="image" src="" alt="">
            <input id="btn-submit" type="submit" name="submit" value="Upload">
        </form>

    </div>



    <div class="imagediv">

        <div class="row">
            
        <?php
            foreach ($result as $key => $value) {
            ?>

                <div class="column">
                    <input type="radio" name="image" id="<?php echo $value['id'] ?>" value="<?php echo $value['path'] ?>">
                    <label for="<?php echo $value['id']; ?>"> <img class="img" id="<?php echo $value['id'] ?>" src="./image/<?php echo $value['path'] ?>" alt=""> </label>
                </div>
            <?php
            }
            ?>



        </div>

        <input type="button" value="submit" onclick="getvalue()">
    </div>

    <script>
        let msg = document.getElementsByClassName("msg");
        ms.append("<h1>");
        console.log(msg)


        function getvalue() {
            let path = document.querySelector('input[name="image"]:checked');
            console.log(path.value);
        }
    </script>





</body>

</html>