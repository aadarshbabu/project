
<?php
    class demo{ 

        public static $name="Aadarsh";
        public function select()
        {
            echo "select from".static::$name." ";
            // it function is bind into the object in runtime. when you call the function in demo class object, the name variable is bind demo class.
        }
        //or when you create the object in student class and call the select or insert function. Stucent class name static variable bind in select function.

        public function insert()
        {
            echo "Insert value".static::$name." ";
        }

    };

    class student extends demo{
        public static $name="Rahul";
    
    };
    class roll extends demo{
        public static $roll=22;
    };

    $obj1=new roll();
    $obj1->select();
    $obj1->insert();
    $obj2=new student();
    $obj2->select();
    $obj2->insert();



?>