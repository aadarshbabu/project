<?php

    abstract class employe{ // this is abstruct class you can't create object this class. this class contain empty as well as non empty method.
        protected $fullname;
        protected $email;
        function __construct($name,$email)
        {
            $this->fullname=$name;
            $this->fullname=$email;
        }
        abstract function sallary(); // this is abstract method. it is non definied method
        public function get_Employe_data()
        {
            return $this->fullname." ".$this->email;
        }

    };

    class RegularEmploye extends employe{

        private $Basesalary=500000;

        public function sallary()
        {
            return $this->Basesalary/12;
        }

    };
    class PartTimeEmploye extends employe{

        private $hour=200;
        private $perHour=2000;

        public function sallary()
        {
            return  $this->hour*$this->perHour;
        }

    }

    $aadarsh=new PartTimeEmploye("aadarsh singh","Aadarshsingh121@gmail.com");
    $raju=new RegularEmploye("Raju Ranjan Kumar","Rajuranjan121@gmail.com");
    echo $aadarsh->get_Employe_data();
    echo "Sallary per month".round($aadarsh->sallary(),4);
    echo $raju->get_Employe_data();
    echo "sllary per month".round( $raju->sallary(),3);
    var_dump($aadarsh->get_Employe_data());
    var_dump($aadarsh->sallary());
 




//    abstract class UserInfo{
//         protected $name;
//         protected $email;

//         public function __construct($name, $email) // defult constructor 
//         {
//             $this->name=$name;
//             $this->email=$email;
//         }
//       abstract  public function getname();
//       abstract public function getemail();
//     };


//     class getUserInfo extends UserInfo{
//         // public function __construct($name, $email)
//         // {
//         //     parent::__setvalue($name, $email);
//         // }
//         public function getname()
//         {
//             return $this->name;
//         }
//         public function getemail()
//         {
//             return $this->email;
//         }
//     };

//     $obj1=new getUserInfo("aadarsh Singh","email121@gmail.com");
//    echo " ".$obj1->getname();
//    echo" ".$obj1->getemail();


?>