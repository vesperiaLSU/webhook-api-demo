<?php

$myVar = "hello world!";
print_r($myVar);

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($_REQUEST));
error_log(print_r($input, true));