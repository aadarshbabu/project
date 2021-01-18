<?php

class Demofunction{

     public function showname($name)
     {
         echo "YOur name is".$name;
     }
     public function showAge($DD,$MM,$YYYY)
     {
         echo "Your are old in <br> "+2021-$YYYY;
     }


};
class overload extends Demofunction{

    private $objDemoFun;
    function __construct()
    {
        $this->objDemoFun=new Demofunction();
    }


    function __call($name, $arguments)
    {

        if($name=="overload")
            $count=count($arguments);

            switch($count)
            {
                case 1:
                   $this->objDemoFun->showname("Aadarsh");
                    break;
                case 3:
                    $this->objDemoFun->showAge(22,02,1999);
                    break;
                default:
                    echo "Invalid choice.." ;
            }
        
    }


};


$obj1=new overload();
$obj1->overload("Aadarsh");
$obj1->overload(22,02,1999);
$obj1->overload(22,02,1999,44);


?>