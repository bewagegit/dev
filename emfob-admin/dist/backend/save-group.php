<?php
session_start();
require_once 'config.php'; // Include your PDO database connection

include_once("../../../emfob/dist/backend/config.php");

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

error_reporting(E_ALL);
ini_set("error_reporting",-1);
extract($_POST);

if(isset($groupname) && $groupname != '' && isset($addPeople) && $addPeople != '' ){
	
	//check group name 
	$sql = "SELECT * FROM `".GROUPS."` WHERE `group_name` = '$groupname'  and user_id ='".$_SESSION['user_id']."'  ";	
	$stmt = $pdo->query($sql);
	$chkAlreadyExistGroupName = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if(count($chkAlreadyExistGroupName)){
		echo json_encode(array('code' => 0,'result' => 'Group name already exist'));
		exit;
	}
	
	$sql = "SELECT * FROM `".GROUPS."` WHERE  user_id ='".$_SESSION['user_id']."' and group_member = '".$addPeople."'  ";	
	$stmt = $pdo->query($sql);
	$chkAlreadyExist = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if(!count($chkAlreadyExist)){
		// Prepare SQL statement
		$sql = "INSERT INTO ".GROUPS." (
		   group_name,user_id,group_member
		) VALUES (
			:groupname,:user_id,:addPeople
		)";
		
		$stmt = $pdo->prepare($sql);
		
		// Bind parameters
		$params = [
			':groupname' => $groupname,
			':user_id' => $_SESSION['user_id'],
			':addPeople' => $addPeople
		];

		// Execute the statement
		$stmt->execute($params);
		echo json_encode(array('code' => 1,'result' => 'Group name saved successfully'));
	}
	else{
		echo json_encode(array('code' => 0,'result' => 'Group member already exist'));
	}
}
?>