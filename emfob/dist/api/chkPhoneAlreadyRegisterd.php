<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");
extract($_GET);
if(isset($phone) && $phone != ''){
	$result = db_select("phone_number",USERS," phone_number= ? ",array($phone));
	if(count($result) < 1){
		echo json_encode(array("result" => -1));
	}
	else{
		echo json_encode(array("result" => 1));
	}
}
else{
	echo json_encode(array("result" => 'Invalid Request'));
}

?>