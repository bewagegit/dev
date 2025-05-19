<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set("error_reporting",-1);
extract($_GET);

if(isset($user_id) && $user_id != '' && isset($message) && $message != '' ){
	// Fetch available exams
	$sql = "insert into chat_messages(user_id_from,userid_to,message,message_type) values(:user_id_from,:userid_to,:message,:message_type) ";	
	db_insert($sql,array("user_id_from" => $_SESSION['user_id'],"userid_to" => $user_id, "message" => $message,"message_type"=>"s"));
	db_insert($sql,array("user_id_from" => $user_id,"userid_to" => $_SESSION['user_id'], "message" => $message,"message_type"=>"r"));
	json_encode(array("Message send successfully"));
}
?>