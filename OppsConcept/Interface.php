<?php

    interface Employe
    {
       public function employename();
       public function employesallary();
       public function employeaddress();
    }

    class Regularemploye implements Employe
    {
        private $fullname;
        private $sallary;
        private $adress;
        function __construct($fullname, $sallary, $adress)
        {
            $this->fullname=$fullname;
            $this->sallary=$sallary;
            $this->adress=$adress;
        }
        public function employename(){
            return $this->fullname;      

        }
        public function employeaddress(){
            return $this->adress;
        }
        public function employesallary()
        {
            return $this->sallary;
        }

    };

        $obj1=new RegularEmploye("aadarsh",399999,"patna");
        echo "<br/>".$obj1->employename();
        echo "<br/>".$obj1->employesallary();
        echo "<br/>".$obj1->employeaddress();











?>