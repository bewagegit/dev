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

// Fetch available exams
$sql = "SELECT a.email,b.* FROM ".USERS." a left join ".CHAT_MESSAGES." b on a.user_id = b.userid_from WHERE b.userid_from ='".$_SESSION['user_id']."' and b.userid_to ='".$user_id."' ";	
$stmt = $pdo->query($sql);
$userDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($userDetails) == 1){
	if($userDetails[0]['user_id_from'] == ''){
		echo json_encode(array("ismessaged" => 'no',"email" => $userDetails[0]['email'],'data' => $userDetails));
	}
	else{
		echo json_encode(array("ismessaged" => 'yes' ,"email" => $userDetails[0]['email'],'data' => $userDetails));
	}
}
else{
	echo json_encode(array("ismessaged" => 'no',"email" => '','data' => $userDetails));
}
?>