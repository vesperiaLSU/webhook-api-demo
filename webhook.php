<?php

$myVar = "hello world!";
print_r($myVar);
print_r($_REQUEST);

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));