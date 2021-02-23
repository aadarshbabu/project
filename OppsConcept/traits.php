<?php

trait t1{
    public function show()
      {
        echo "demo trait class";
      }

}


class S{
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


class putStudentData extends S
{
    use t1;
    private $ob1;

    function __construct()
    {
        $this->ob1= new S(22,333,"Aadarsh Singh","aadarshsingh121@gmail.com");
        echo "<pre>";
        
        $this->ob1->showData();
    }

};


$obj1 = new putStudentData();
$obj1->showData();
$obj1->show();


















?>