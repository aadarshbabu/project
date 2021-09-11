<?php
$data = json_decode(file_get_contents("php://input"));
print_r(json_encode($data)) ;