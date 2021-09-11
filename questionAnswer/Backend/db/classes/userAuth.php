<?php

class userAuth{
    private
    $db,
    $firstname,
    $lastname,
    $email,
    $password;

    public function __construct($db){
        $this->db= $db;
    }
        public function createuser($userobj)
        {
            try {

                $this->firstname = trim($userobj->fname, " ");
                $this->lastname = trim($userobj->lname, " ");
                $this->email = trim($userobj->email, " ");
                $this->password= md5($userobj->password);

                $stmt = $this->db->prepare("INSERT INTO registration (firstname, lastname, email, password) values(:firstname,:lastname,:email,:password)");
                $stmt->bindparam(":firstname",$this->firstname);
                $stmt->bindparam(":lastname", $this->lastname);
                $stmt->bindparam(":email", $this->email);
                $stmt->bindparam(":password", $this->password);
                if($stmt->execute()){
                    return true;
                }
            } catch (Throwable $th) {
                $th->getMassage();
                return false;
            }
    
            
            
        }

        /// Login user Method...
        public function login($cred){

            try {
                $this->email = trim($cred->email," ");
                $this->password = md5($cred->password);
                
               $stmt= $this->db->prepare("SELECT * FROM registration WHERE email = :email AND password = :pass");

                $stmt->bindparam(":email",$this->email);
                $stmt->bindparam(":pass",$this->password);
                $stmt->execute();
                if($stmt->rowcount()){
                   $dataRow=$stmt->fetch(PDO::FETCH_ASSOC);
                        $tocken = md5($dataRow['email']);
                        $responce=array(
                            "token"=>$tocken,
                            "id"=>$dataRow['id'],
                            "name"=>$dataRow['firstName'],
                            "msg"=>"UserAuthantigated",
                            "statusCode"=>200,
                            "status"=>"success"
                        );
                        return $responce;
                }
                else{
                    return false;
                }

            } catch (Throwable $th) {
                $th->getMassage();
                return false;
            }
        }

}

?>