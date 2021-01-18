<?php
// one things to use diffrent diffrent p
    interface scope{
    public function calcarea();
    };

    class rectangla implements scope{
        private $length;
        private $breath;
        public function __construct($len, $breath)
        {
            $this->length=$len;
            $this->breath=$breath;
        }
        public function calcarea()
        {
            return $this->length * $this->breath;
        }

    };
    class circul implements scope{
        private $PIE=3.14;
        private $radious;
        public function __construct($radious)
        {
            $this->radious=$radious;
        }
        public function calcarea()
        {
            return $this->PIE * $this->radious * $this->radious;
        }

    };


    $obj = new circul(33);
    $obj1= new rectangla(32,4);
   echo $obj->calcarea();// this object is call circul class calcarea function..
   echo "<br>";
   echo $obj1->calcarea();// this object is rectangle class call calcarea function











?>