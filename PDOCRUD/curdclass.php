<?php

class crud
{
    private $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    public function deletedata($id)
    {

        $stat = $this->db->prepare("DELETE from crud where id=$id");
        $stat->execute();
        header("location:/PDOCRUD/pageno=1");
    }

    public function setdata($name, $email)
    {
        try {
            // date_timestamp_set('asia/kolkata');
            //code...
            $stat = $this->db->prepare(" INSERT into crud(name,email)values(:fname,:email) ");
            $stat->bindparam(":fname", $name);
            $stat->bindparam(":email", $email);
            $stat->execute();
            return true;
        } catch (\Throwable $th) {
            echo $th->getmessage();
            return false;
        }
    }


    public function updatedata($id, $name, $email)
    {
        try {

            $stmt = $this->db->prepare("UPDATE crud SET name = :fname, email = :email WHERE id =:id");
            $stmt->bindparam(":fname", $name);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            header("location:/PDOCRUD/?pageno=1");
            return true;
        } catch (\Throwable $th) {
            throw $th;
            return false;
        }
    }

    public function getpageno($noofrecord)
    {
        $query="SELECT * FROM crud";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $totalrecord = $stmt->rowcount();
        $noofpages = $totalrecord / $noofrecord;  
        // round()
        return ($noofpages+1);
    }

    public  function getdata($noofrecord)
    {
        $pageno=$_GET['pageno'];
        $startingPoint=($pageno-1)*$noofrecord;
        $query="SELECT * from crud ORDER BY id ASC LIMIT $startingPoint, $noofrecord ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
      
        if ($stmt->rowcount() > 0)
        {
            $i=1;
            while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) && $i <=$noofrecord )
             {
                 $i++
               ?>
                <tr>
                    <td> <?php if (isset($row['id'])) {
                                echo $row['id'];
                            }  ?> </td>
                    <td> <?php if (isset($row['name'])) {
                                echo $row['name'];
                            }  ?> </td>
                    <td> <?php if (isset($row['email'])) {
                                echo $row['email'];
                            }  ?> </td>
                    <td> <a href="http://localhost/PDOCRUD/delete.php?<?php echo "id=" . $row['id'] ?>"> <button class="btn-delete">Delete</button> </a> </td>
                    <td><a href="http://localhost/PDOCRUD/update.php?<?php echo "id=" . $row['id'] ?>"> <button class="btn-update">Update</button> </a> </td>
                </tr>
            <?php

            }

        }
       
    }

};

?>