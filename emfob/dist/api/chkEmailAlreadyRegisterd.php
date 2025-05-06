<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");
extract($_GET);
if(isset($email) && $email != ''){
	$result = db_select("email",USERS," email= ? ",array($email));
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