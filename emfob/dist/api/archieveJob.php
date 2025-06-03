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

try {
	if($archieve_id){
		$sql = " UPDATE ".JOB_POSTINGS." SET status = 0
				 WHERE ID = :id and posted_by_user_id = :posted_by_user_id ";
				
		$stmt = $pdo->prepare($sql);
		
		$stmt->bindValue(':id', $archieve_id);
		$stmt->bindValue(':posted_by_user_id',$_SESSION['user_id'] );
		
		// Execute the statement
		$stmt->execute();
		
		echo json_encode([
				'success' => true,
				'message' => 'Job Archieved Successfully',
				'profile_id' => $archieve_id
			]);
	}
}
catch (Exception $e) {
	echo $e->getMessage();
    // Log the error (you should implement proper error logging)
    error_log("Error posting job: " . $e->getMessage());
    
    // Return error response
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Failed to save job. Please try again.'
    ]);
}
?>