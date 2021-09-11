<?php
require_once ".././db/config.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->questiontitle) && !empty($data->userid)){
    if($question->setQuestion($data)){
        print_r(json_encode(array(
            "msg"=>"Data insert sucessfully",
            "status"=>"success",
            "code"=>200
        )));
    }else{
        http_response_code(500);
        print_r(json_encode(array(
            "msg"=>"Internal server Error",
            "status"=>"faild",
            "code"=>500
        )));
    }
    
}
else {
    http_response_code(400);
    print_r(json_encode(array(
        "msg"=>"Something went wrong",
        "status"=>"faild",
        "code"=>400
    )));
}