<?php

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];
$myVar = "hello world!";
print_r($myVar);
if ($verify_token == "0b14575d3fb9830de82dd59e0e00465e713d5175") {
    echo $challenge;
}

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));