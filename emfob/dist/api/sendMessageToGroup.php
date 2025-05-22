<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");

include_once("../api/chkAuthenticate.php");

header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set("error_reporting",-1);
extract($_GET);

if(isset($user_idfrom) && $user_idfrom != '' && isset($group_id) && $group_id != '' && isset($message) && $message != '' ){
	// Fetch available exams
	$sql = "insert into ".GROUP_CHAT_MESSAGES."(userid_from,group_id,message) values(:userid_from,:group_id,:message) ";	
	db_insert($sql,array("userid_from" => $_SESSION['user_id'],"group_id" => $group_id, "message" => $message));
	json_encode(array("Group Message send successfully"));
}
?>