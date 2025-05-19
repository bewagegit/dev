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
    

    // Prepare SQL statement
    $sql = "INSERT INTO ".EMPLOYERS_PROFILES." (
        user_id , first_name, last_name, designation, department
    ) VALUES (
        :user_id , :firstName, :lastName, :designation, :department
    )";
	
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters
    $params = [
        ':user_id' => $_SESSION['user_id'],
        ':firstName' => $_POST['firstName'] ?? null,
        ':lastName' => $_POST['lastName'] ?? null,
        ':designation' => $_POST['desgination'] ?? null,
        ':department' => $_POST['department'] ?? null
    ];

    // Execute the statement
    $stmt->execute($params);
    
    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Company saved successfully',
        'profile_id' => $pdo->lastInsertId()
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