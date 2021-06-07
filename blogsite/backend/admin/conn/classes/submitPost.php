<?php

class submitPost
{

    private $db;
    public  function __construct($db)
    {
        $this->db = $db;
    }
    public function SubmitPost($title, $slug, $description, $post, $category, $author, $date ,$image)
    {

        try {
            $stmt = $this->db->prepare("INSERT into blogpost (title, slug, post, descr, image, writer,pdate,topic) values(:title,:slug,:post,:descr,:img,:writer,:pdate,:topic)");
            $stmt->bindparam(":title", $title, PDO::PARAM_STR);
            $stmt->bindparam(":slug", $slug, PDO::PARAM_STR);
            $stmt->bindparam(":post", $post, PDO::PARAM_STR);
            $stmt->bindparam(":descr", $description, PDO::PARAM_STR);
            $stmt->bindparam(":img", $image, PDO::PARAM_STR);
            $stmt->bindparam(":writer", $author, PDO::PARAM_STR);
            $stmt->bindparam(":pdate", $date, PDO::PARAM_STR);
            $stmt->bindparam(":topic", $category, PDO::PARAM_INT);
            $stmt->execute();
            return true;
            header("location:managepost.php");
        } catch (Throwable $th) {
            echo $th->getmessage();
            return false;
        }
    }

    public function testpost($array)
    {
        echo "<pre/>";
        print_r($array);

        exit();
    }






    public function Addcategory($category)
    {
        try {
            $stmt = $this->db->prepare("INSERT into topic (topicname)values(:category)");
            $stmt->bindparam(":category", $category);
            $stmt->execute();
            return true;
        } catch (Throwable $th) {
            echo $th->getmessage();
            return false;
        }
    }


    public function  DeleteCategory($id)
    {

        try {
            $stmt = $this->db->prepare("DELETE From topic WHERE id = :id");
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            return true;
        } catch (Throwable $th) {
            echo $th->getmessage();
            return false;
        }
    }


    function UpdateCategory($id)
    {
    }



// Fetch the post...

    public function fetchpost($flag, $id = NULL)
    {
        if (!$flag) {
            try {

                $stmt = $this->db->prepare("SELECT id,title,pdate,writer FROM blogpost");
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $result;
            } catch (Throwable $th) {
                throw $th;
            }
        } else {

            try {
                $stmt = $this->db->prepare("SELECT * FROM blogpost where id= :id");
                $stmt->bindparam(":id", $id);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (Throwable $th) {
                $error = $stmt->errorinfo();
                echo $error[2];
                return false;
            }
        }
    }



// update the post 


    public function updatepost($id, $title, $slug, $discription, $post, $category, $author, $date)
    {
        try {
            $stmt = $this->db->prepare("UPDATE blogpost SET title = :title, slug = :slug, post = :post, descr = :discription, image = :img, writer = :author, pdate = :pdate, topic = :category WHERE id =:id");
            $img = "No image";
            $stmt->bindparam(":title", $title);
            $stmt->bindparam(":slug", $slug);
            $stmt->bindparam(":post", $post);
            $stmt->bindparam(":discription", $discription);
            $stmt->bindparam(":img", $img);
            $stmt->bindparam(":author", $author);
            $stmt->bindparam(":pdate", $date);
            $stmt->bindparam(":category", $category);
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            $error = $stmt->errorinfo();
            header("location:managepost.php");
        } catch (Throwable $th) {

            echo $error[2];
        }
    }




    public function deletepost($id)
    {

        try {

            $stmt = $this->db->prepare("DELETE From blogpost where id=:id");
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            return true;
        } catch (Throwable $th) {
            throw $th;
        }
    }






    public function Getcategory($return)
    {

        $stat = $this->db->prepare("SELECT * FROM topic");
        $stat->execute();
        if ($return) {
            $rrow = [];
            while ($row = $stat->fetch(PDO::FETCH_ASSOC)) {

                array_push($rrow, $row);
            }
            return $rrow;
        } else {

            while ($row = $stat->fetch(PDO::FETCH_ASSOC)) {

?>

                <tr>
                    <td> <?php if (isset($row['id'])) {
                                echo $row['id'];
                            }  ?> </td>
                    <td> <?php if (isset($row['topicname'])) {
                                echo $row['topicname'];
                            }  ?> </td>
                    <td> <a href="?<?php echo "id=" . $row['id'] ?>"> <button class="btn-del">Delete</button> </a> </td>
                </tr>


<?php

            }
        }
    }
};


?>