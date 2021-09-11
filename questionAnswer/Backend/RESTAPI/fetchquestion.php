<?php
require_once ".././db/config.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


    if($data =$question->fetchquestion()){
            print_r(json_encode($data, JSON_NUMERIC_CHECK));
    }else{
        http_response_code(500);
        print_r(json_encode(array(
            "msg"=>"Internal Server Error",
            "status"=>"Error"
        )));
    }
