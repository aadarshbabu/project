<?php
    class test
    {
        public function demo()
        {
            echo "hello I'm a function of demo  test class";
        }


    };

    class test2 extends test
    {
        public function demo()
        {
            echo "hello i am a funcion of demo test2 class";
            parent::demo(); // You call a demo function in child class but you also spacifiy parent :: scope regulation operator then write funciton name.
        }
    };

     $obj=new test2();
     $obj->demo();








?>