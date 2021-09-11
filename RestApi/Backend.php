<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
// header('HTTP/1.1 401 Unauthorized');
$value = 'Never Distroy this cookie';
// setcookie("TestCookie", $value); // this the basic example of set the cookie.
setcookie("Data", $value, time() + 100);
print_r($_COOKIE['Data']);
// if you want to access the cookie yo want to set the key as a cookie super globle variable.

$content = trim(file_get_contents("php://input"));
// this is use for geting the data in request form the clint side.

$decoded = json_decode($content);
// json_decode() is use for decode the text json in php variable.
// decoded is a php stander class object. in this object you can access the php variable.


//If json_decode failed, the JSON is invalid.
if (!is_array($decoded)) {
    if (empty($decoded->username) && empty($decoded->useremail)) {
        $error = array('massage' => "Data Not found");
        print_r(json_encode($error)); //
        // json_encode() is use for change  php object into the json object.
        http_response_code(400);
        die();
    } else {
        $res = json_encode($decoded);
        print_r($res);
    }
} else {
    // responce code 

}
