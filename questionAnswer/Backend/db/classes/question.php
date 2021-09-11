<?php

class question{

    private $db, $questionTitle, $userid;

    public function __construct($db){
        $this->db= $db;
    }

    public function fetchquestion(){

            try {

                $stmt= $this->db->prepare("SELECT id, questionTitle, userid from questions");

                if($stmt->execute())
                    {
                        $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        return($questions);
                    }
                    else{
                        return false;
                    }
         
               
         
            } catch (Throwable $th) {
                throw $th;
            }
     

    }

    public function setQuestion($data){

        try {
            $this->questionTitle = trim($data->questiontitle, " ");
            $this->userid= $data->userid;
            
            $stmt= $this->db->prepare("INSERT INTO questions (userid, questionTitle) values(:userid,:questiontitle)");
            $stmt->bindparam(":questiontitle",$this->questionTitle);
            $stmt->bindparam(":userid",$this->userid);
                if($stmt->execute()){
                    return true;
                }
                else{
                    return false;
                }
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function fetchanswer($id){
        try {

            $stmt= $this->db->prepare("SELECT answerDesc , questionid  from answer where answer.questionid=:id");
            $stmt->bindparam("id",$id);
            $stmt->execute();
            if($stmt->rowcount())
                {
                    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return($questions);
                }
                else{
                    return false;
                }
     
        } catch (Throwable $th) {
            throw $th;
            $th->getMassage();
        }
    }

    public function setanswer($data){
        $answer = $data->answer;
        $quesid = $data->questionid;
        try {
           $stmt = $this->db->prepare("INSERT INTO answer(answerDesc, questionid) values(:answer,:questionid)");
            $stmt->bindparam(":answer", $answer);
            $stmt->bindparam(":questionid", $quesid);
            if($stmt->execute()){
                return true;
            }else{
                return flase;
            }
        } catch (Throwable $th) {
            throw $th;
        }
    }

}