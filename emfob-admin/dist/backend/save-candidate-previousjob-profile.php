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

try {
    // Handle file upload
    for($i=0;$i<$_POST['totaljobs'];$i++){
		if(	isset($_POST['previousJobTitle'.$i]) && $_POST['previousJobTitle'.$i] != '' &&
			isset($_POST['previousCompanyName'.$i]) && $_POST['previousCompanyName'.$i] != '' &&
			isset($_POST['previousDurationFrom'.$i]) && $_POST['previousDurationFrom'.$i] != '' &&
			isset($_POST['previousDurationTo'.$i]) && $_POST['previousDurationTo'.$i] != '' 
			){
				$previousJobTitle = sanitizeInput($_POST['previousJobTitle'.$i]);
				$previousCompanyName = sanitizeInput($_POST['previousCompanyName'.$i]);
				$previousDurationFrom = sanitizeInput($_POST['previousDurationFrom'.$i]);
				$previousDurationTo = sanitizeInput($_POST['previousDurationTo'.$i]);
				$sql = "INSERT INTO CANDIDATE_PREVIOUS_DETAILS (
						user_id, previous_job_title, previous_company_name, previous_duration_from, previous_duration_to
					) VALUES (
						:user_id, :previous_job_title, :previous_company_name, :previous_duration_from, :previous_duration_to
					)";
				$stmt = $pdo->prepare($sql);
				$params = [
					':user_id' => $_SESSION['user_id'],
					':previous_job_title' => $previousJobTitle ?? null,
					':previous_company_name' => $previousCompanyName ?? null,
					':previous_duration_from' => $previousDurationFrom ?? null,
					':previous_duration_to' => $previousDurationTo ?? null
					];
				$stmt->execute($params);
		}
	}
    
    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Previous compnay details saved successfully'
    ]);

} catch (Exception $e) {
    // Log the error (you should implement proper error logging)
    error_log("Error saving candidate profile: " . $e->getMessage());
    
    // Return error response
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Failed to save profile. Please try again.'
    ]);
}

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}
?>