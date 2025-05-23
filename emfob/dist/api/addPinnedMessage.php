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
extract($_POST);


$sql1 = "UPDATE ".CHAT_MESSAGES." SET is_pinned = 0 WHERE id IN('".implode("','", json_decode($allMessageId, true) )."')  ";
db_update($sql1,array());

if(isset($pinnedID) && count($pinnedID)){
	// Fetch all user message
	$sql = "SELECT * from ".CHAT_MESSAGES." WHERE id IN('".implode("','",$pinnedID)."')";		
	$stmt = $pdo->query($sql);
	$getAllChatMessages = $stmt->fetchAll(PDO::FETCH_ASSOC);



	$sql2 = "UPDATE ".CHAT_MESSAGES." SET is_pinned = 1 WHERE id IN('".implode("','",$pinnedID)."')  ";
	db_update($sql2,array());
}


json_encode(array("Pinned Message updated successfully"));

?>