<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");

include_once("chkAuthenticate.php");

header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set("error_reporting",-1);
extract($_GET);

$userid = $_SESSION['user_id'];
if($q != '')
	$allChatList = getAllChatList($userid,$q);
else
	$allChatList = getAllChatList($userid);
echo json_encode($allChatList);
?>