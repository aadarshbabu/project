<?php

        class test{

                function fun1()
                {
                    echo " This is function of fun1";
                    return $this;
                }
                function fun2()
                {
                    echo "this is function of fun2";
                    return $this;
                }

                function fun3()
                {
                    echo "This is function of fun3";
                    return $this;
                }
        };

        $obj1=new test();
        print_r( $obj1->fun1()->fun2()->fun3());









?>