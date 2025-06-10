<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");

include_once("chkAuthenticate.php");

header('Content-Type: application/json');
extract($_GET);

$userid = $_SESSION['user_id'];


//Get all group List
$stmt = $pdo->prepare("SELECT *,(SELECT GROUP_CONCAT(name) 
					   FROM `benefits` 
					   where FIND_IN_SET (id, a.otherCompensation)) benefits,
					   (SELECT GROUP_CONCAT(languages_name) FROM `".LANGUAGES."` where FIND_IN_SET (id, a.language)) language 
					   FROM `".JOB_POSTINGS."` a
					   LEFT JOIN `".COMPANIES."` c on c.employer_id = a.company_id 
					   LEFT JOIN `".EMPLOYERS."` d on d.employer_id = a.company_id 
					   LEFT JOIN `".EMPLOYMENT_TYPE."` e on e.id = a.job_type 
					   LEFT JOIN `".USERS."` b on a.posted_by_user_id  = b.user_id
					   where a.id= ? order by a.id desc ");
		
$stmt->execute([$job_id]); // Verify email and user type
$jobs = $stmt->fetchAll();
echo json_encode($jobs);
?>