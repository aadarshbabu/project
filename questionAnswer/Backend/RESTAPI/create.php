<?php
require_once ".././db/config.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = json_decode(file_get_contents("php://input"));

if(!empty($data->fname) && !empty($data->lname) && !empty($data->email)&& !empty($data->password))
{
  if($userauth->createuser($data))
  {
    print_r(json_encode(array('msg'=>"User Created", "status"=>200, )));
  }
  else
  {
    print_r(json_encode(array('error'=>"User Already Exist", "status"=>"error")));
    http_response_code(500);
    die();
  }

}
else
{
    http_response_code(400);
    print_r(json_encode(array('error'=>"Somthing Went wrong", "status"=>400)));
}