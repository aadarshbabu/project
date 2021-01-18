<?php

class logger{

    public function log($massage)
    {
        echo "This is log manage".$massage;

    }


};
    class UserInfo{

        private $logger;  // This member variable is contain logger class object..
        public function __construct(logger $loggerObj)// constructor take loger class objects
        {
            $this->logger=$loggerObj;// This constructor create logger class obj. 
        }
        public function userCreated()
        {
            $this->logger->log("User Created");
        }
        public function userUpdated()
        {
            $this->logger->log("User Updatad");
        }

    };

    $log=new logger();
    $obj=new UserInfo($log);// pass the logger class obj..
    $obj->userCreated();
    $obj->userUpdated();



?>