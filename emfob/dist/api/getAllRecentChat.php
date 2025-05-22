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

//print_R($_SESSION['user_id']);

// Fetch available exams
$sql = "SELECT userid_from,userid_to FROM `chat_messages` a
		inner join `users` b on a.userid_from = b.user_id
		where a.userid_from = $user_id or a.userid_to = $user_id
		group by userid_from,userid_to
		order by a.userid_from,a.userid_to desc;
		";		
$stmt = $pdo->query($sql);
$getAllUserDeails = $stmt->fetchAll(PDO::FETCH_ASSOC);

$copy = $getAllUserDeails;
for($i=0;$i<count($getAllUserDeails);$i++){
	$n1 = $getAllUserDeails[$i]['userid_from'];
	$n2 = $getAllUserDeails[$i]['userid_to'];
	for($j=$i;$j<count($copy);$j++){
		if(isset($copy[$j]['userid_from']) && isset($copy[$j]['userid_to'])){
			if($n2 == $copy[$j]['userid_from'] && $n1 == $copy[$j]['userid_to']){
				unset($copy[$j]);
			}
		}
	}
}
$copy = array_values($copy);
$recentList = [];
$limit = count($copy);
if(count($copy) > 5){
	$limit = 5;
}
for($i=0;$i<$limit;$i++){
	
	$sql = "SELECT a.email emailfrom,c.email emailto,b.* FROM ".USERS." a 
			left join ".CHAT_MESSAGES." b on a.user_id = b.userid_from 
			left join ".USERS." c on c.user_id = b.userid_to
			WHERE 
			(b.userid_from ='".$copy[$i]['userid_from']."' and b.userid_to ='".$copy[$i]['userid_to']."') 
			or
			(b.userid_from ='".$copy[$i]['userid_to']."' and b.userid_to ='".$copy[$i]['userid_from']."')
			order by id desc
			limit 0,1
			";
	//echo $sql;
	$stmt = $pdo->query($sql);
	$userDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$recentList[] = $userDetails[0];
}
echo json_encode($recentList);
?>