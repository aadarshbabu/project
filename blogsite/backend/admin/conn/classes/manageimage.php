<?php
class manageimage 
{
    private $db;
    function __construct($con)
    {
        $this->db=$con;
    }

        function setimage($file){

            if (file_exists("../../assist/images/blog_image/" . $file['name'])) 
            {
                return $file['name'] . "already exist";
            } 

            else if ($file['type'] == "image/jpeg" || $file['type'] == "image/png")
             {
                move_uploaded_file($file['tmp_name'], "../../assist/images/blog_image/" . $file['name']);
                try {
                    $stmt = $this->db->prepare("INSERT INTO imagestore (filename, size) VALUES (:filename, :size)");
                    $stmt->bindParam(":filename", $file['name']);
                    $stmt->bindParam(":size", $file['size']);
                    $stmt->execute();
                    $error = $stmt->errorInfo();
                                             // this statment is show the error in sql
                    unset($_POST['submit']);
                    return "Image Upload Sucessfully";

                } catch (Exception $th) {
                    $th->getMessage();
                    echo $error[2];
                    return "some error.";
                 
                }
            }

            else {
                return "file formate is not valid";
            }

            return "Sucessfully";
        }

};

?>