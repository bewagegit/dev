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
$sql = "SELECT * FROM `".GROUPS."` WHERE id= ".$group_id." and  user_id = ".$_SESSION['user_id']." or group_member like '%#".$_SESSION['user_id']."#%'  ";
$stmt = $pdo->query($sql);
$userDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);

$groupMember = [];
$where = '';
if(count($userDetails)){
	foreach($userDetails as $val){
		$tmp = explode("#",$val['group_member']); 
		foreach($tmp as $val1){
			if($val1 != '')
				$groupMember[] = $val1;
		}
	}
	$groupMember[] = $_SESSION['user_id'];
}

$where = " a.userid_from IN('".implode("','",$groupMember)."') and ";

$sql = "SELECT * FROM ".GROUP_CHAT_MESSAGES." a 
		inner join ".USERS." b on a.userid_from = b.user_id 
		inner join ".GROUPS." c on a.group_id = c.id
		where 1=1 and $where c.id = ".$group_id."  ";	

$stmt = $pdo->query($sql);
$groupChatList = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM ".GROUPS." a where a.id = ".$group_id." limit 1 ";	

$stmt = $pdo->query($sql);
$groupName = $stmt->fetchAll(PDO::FETCH_ASSOC);

$groupList = explode("#",$groupName[0]['group_member']);
$groupsMember = [];
foreach($groupList as $val){
	if($val != '')
		$groupsMember[] = $val;
}
$sql = "SELECT * FROM  ".USERS."  a
		inner join ".CANDIDATES_PROFILES." b on a.user_id = b.user_id
		where 1=1 and a.user_id IN ('".implode("','",$groupsMember)."')  ";	

$stmt = $pdo->query($sql);
$groupsMemberRes = $stmt->fetchAll(PDO::FETCH_ASSOC);

$groupsMemberNames = [];
foreach($groupsMemberRes as $val){
	$groupsMemberNames[] = $val['full_name'];
}

if(count($groupChatList) >= 1){
	echo json_encode(array("ismessaged" => 'yes' , 'groupMember' => $groupsMemberNames,'data' => $groupChatList));
}
else{	
	echo json_encode(array("ismessaged" => 'no',"group_name" => $groupName[0]['group_name'], 'groupMember' => $groupsMemberNames  ,'data' => []));
}

/*
if(count($userDetails) >= 1){
	$emailRes = db_select("email",USERS,"user_id = ?",array($user_id));
	$email = $userDetails[0]['email'];
	if($user_id == $userDetails[0]['userid_to']){
		$email = $emailRes[0]['email'];
	}
	echo json_encode(array("ismessaged" => 'yes',"email" => $email,'data' => $userDetails));
}
else{
	if(count($userDetails) ){
		$sql = "SELECT a.email FROM ".USERS." a WHERE a.user_id ='".$user_id."' ";	
		$stmt = $pdo->query($sql);
		$tmpEmail = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if(count($tmpEmail) )
			echo json_encode(array("ismessaged" => 'no',"email" => $tmpEmail[0]['email'],'data' => $userDetails));
	}
}
*/
?>