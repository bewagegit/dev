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

// Fetch available exams
$sql = "SELECT a.email,c.email emailto,a.is_online,b.* FROM ".USERS." a 
		left join ".CHAT_MESSAGES." b on a.user_id = b.userid_from 
		left join ".USERS." c on c.user_id = b.userid_to
		WHERE 
		(b.userid_from ='".$user_id."' and b.userid_to ='".$_SESSION['user_id']."') 
		or
		(b.userid_from ='".$_SESSION['user_id']."' and b.userid_to ='".$user_id."')
		";
		
$stmt = $pdo->query($sql);
$userDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($userDetails) >= 1){
	$emailRes = db_select("email",USERS,"user_id = ?",array($user_id));
	$email = $userDetails[0]['email'];
	if($user_id == $userDetails[0]['userid_to']){
		$email = $emailRes[0]['email'];
	}
	//check online status of the user
	$sql = "SELECT a.email,a.is_online FROM ".USERS." a WHERE a.user_id ='".$user_id."' ";	
	$stmt = $pdo->query($sql);
	$chkOnlineStatus = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	echo json_encode(array("ismessaged" => 'yes',"is_online" => $chkOnlineStatus[0]['is_online'],"email" => $email,'data' => $userDetails));
}
else{
	$sql = "SELECT a.email,a.is_online FROM ".USERS." a WHERE a.user_id ='".$user_id."' ";	
	$stmt = $pdo->query($sql);
	$userDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode(array("ismessaged" => 'no',"is_online" => $userDetails[0]['is_online'],"email" => $userDetails[0]['email'],'data' => $userDetails));
}
?>