<?php
require_once ".././db/config.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->answer) && !empty($data->questionid)){
   if($question->setanswer($data)){
       http_response_code(200);
        print_r(json_encode(array(
            "msg"=>"Answer Submited sucessfully",
            "status"=>"success"
        )));
   }else
   {
    http_response_code(500);
    print_r(json_encode(array(
        "msg"=>"Server Error",
        "status"=>"error"
    )));
    die();
   }
  
}else{
    http_response_code(400);
    print_r(json_encode(array(
        "msg"=>"Data Not fill",
        "status"=>"error"
    )));
    die();
}