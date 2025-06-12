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

// Check the phone number is already exist
$sql = "UPDATE ".USERS." SET
				is_admin = :is_admin
				WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$params = [ ':is_admin' => 1,
			':user_id' => $_SESSION['user_id']
			];
$stmt->execute($params);

echo json_encode([
		'success' => true,
		'message' => 'Previous company details saved successfully'
	]);
?>