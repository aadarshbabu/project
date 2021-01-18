<?php

class student{
    private $studentId;
    private $EnrolmentNO;
    private $fullName;
    private $email;
    function __construct($studentId,$EnrolmentNO,$fullName,$email)
    {
        $this->studentId=$studentId;
        $this->EnrolmentNO=$EnrolmentNO;
        $this->fullName=$fullName;
        $this->email=$email;
    }

    public function showData()
    {

        echo $this->studentId;
        echo "<br>";
        echo $this->EnrolmentNO;
        echo "<br>";
        echo $this->fullName;
        echo "<br>";
        echo $this->email;
        echo "<br>";
    }

};


class putStudentData{

    $St




}



















?>