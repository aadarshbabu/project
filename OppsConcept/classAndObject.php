<?php
//This code is example of constructor parant class constructor call in chid class. and Inharintance concepts on PHP. 

    class AC{

        private $modle;
        private $speed;
        public $name;

       private function speedup(){
          echo  $this->speed+=5;
        }

        // this is function speed down 
        function speedDown(){
          echo  $this->speed-=2;
        }

        // this is constructure put value in mamver variable
        function __construct($modle, $speed)
        {
           echo $this->model=$modle;
           echo  $this->speed=$speed;
        }

        function __printdata()
        {
            echo $this->model; 
            echo $this->speed;
        }

     function printvalue(){
            echo $this->model;
            echo $this->speed;
        }
    }


// this is subclass or child class Ac is dirived in Smart Ac class all Ac privite member and function are present in Smart Ac clas...
    class SmartAc extends AC
    {
        // you can change parent member class private member variable...
        // You access a value in parent class. only one condition parent class is derive in child claas..

        function changedata(){
          echo  $this->modle="hello";
          echo $this->speed=434;
        }
        function __construct()
        {
            // when you descrive a consturctor in chile class and parant class also have a conturctor. You also call a child class contructor...
            parent::__construct("xyz",33);
        }


    }
// public mamber variable in access in out of the class..
    $name="Aadarsh singh";
    echo $name;

    // You cant't access public function without class object...

    $obj2=new SmartAc();
    $obj2->changedata();
    // $obj2->speedDown();
    $obj1=new AC("LG",36);
    // $obj1->speedup();
    // $obj1->speedDown();
    //  $obj1->printvalue();

?>