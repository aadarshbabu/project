<?php
require_once ".././db/config.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $id = $_GET['q'];

    if($data =$question->fetchanswer($id)){
            print_r(json_encode($data));
    }
    else{
        http_response_code(404);
        print_r(json_encode(array(
            "msg"=>"Data Not Found",
            "code"=>404
        )));
    }