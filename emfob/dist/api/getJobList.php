<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");

include_once("chkAuthenticate.php");

$userid = $_SESSION['user_id'];

header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set("error_reporting",-1);
extract($_GET);

//Get all group List
$stmt = $pdo->prepare("SELECT *,(SELECT GROUP_CONCAT(name) FROM `".JOB_BENEFITS."` where FIND_IN_SET (id, a.otherCompensation)) benefits,
					 (SELECT GROUP_CONCAT(languages_name) FROM `".LANGUAGES."` where FIND_IN_SET (id, a.language)) language  
						FROM `".JOB_POSTINGS."` a
					   inner join `".USERS."` b on a.posted_by_user_id  = b.user_id
					   where a.posted_by_user_id = ? and a.id= ? order by a.id desc LIMIT 1");
		
$stmt->execute([$userid,$job_id]); // Verify email and user type
$jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($jobs);
?>