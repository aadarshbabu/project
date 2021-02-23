
<?php

class userRegistration
{
    private $db;
    public  function __construct($db)
    {
        $this->db = $db;
    }
    public function random($len)
    {
        $data = "raasdfsfndffom" . $len;
        return $data;
    }

    public function registeruser($username, $useremail, $userpass, $usercpass)
    {
        try {
            $token = $this->random(strlen($useremail));

            if ($userpass === $usercpass) {
                $hash = password_hash($userpass, PASSWORD_DEFAULT);
                $status = "inactive";
                $stmt = $this->db->prepare("INSERT into userregistration (userEmail, userName, userPassword, token, states) values(:userEmail,:userName,:userPassword,:token,:States)");

                $stmt->bindparam(":userName", $username);
                $stmt->bindparam(":userEmail", $useremail);
                $stmt->bindparam(":userPassword", $hash);
                $stmt->bindparam(":token", $token);
                $stmt->bindparam(":States", $status);
                $stmt->execute();
                return true;
            }
        } catch (Throwable $th) {
            echo $th->getmessage();
            return false;
        }
    }




    // user authentagation






    function userlogin($useremail, $useerpassword)
    {
        session_start();
        $stat = $this->db->prepare("SELECT * From userregistration where userEmail=:email");
        $stat->bindparam(":email", $useremail);
        $stat->execute();

        if ($stat->rowcount() > 0) {
            $row = $stat->fetch(PDO::FETCH_ASSOC);
            if ($row['states'] == 'inactive') {
                if (password_verify($useerpassword, $row['userPassword'])) {
                    $_SESSION['user'] = $row['userName'];
                    header("location: admin-panel.php");
                    return true;
                } else {
                    $_SESSION['msg'] = "Password Incorect";
                    return false;
                }
            } else {
                $_SESSION['msg'] = "Your account is inactive go to email id";
                return false;
            }
        } else {
            $_SESSION['msg'] = "Please Create Your account";
            return true;
        }
    }
}





















?>


