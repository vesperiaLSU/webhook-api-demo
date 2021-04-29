$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token == "0b14575d3fb9830de82dd59e0e00465e713d5175") {
    echo $challenge;
}