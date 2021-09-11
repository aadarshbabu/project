<?php
require_once ".././db/config.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"));

if( !empty($data->email)&& !empty($data->password)){
   
    if($res=$userauth->login($data)){
        http_response_code(200);
       print_r(json_encode($res,JSON_NUMERIC_CHECK));
    }
    else
    {
        http_response_code(400);
        print_r(json_encode(array(
                "msg"=>"User not Exist",
                "status"=>"fail",
                "statusCode"=>400
            )));
    }


}else{
    http_response_code(400);
    print_r(json_encode(array(
            "error"=>"Something Went worng (Data Not fill Properly)",
            "status"=>400
    )));
}