<?php
session_start();
include __DIR__ . "/backend/config.php";

// Ensure user is logged in and the request is valid
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input || !isset($input['exam_id'], $input['user_id'], $input['tab_switch_count'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input']);
    exit;
}

try {
    // Update tab switch count in the database
    $sql = "UPDATE quiz_attempts 
            SET tab_switch_count = :tab_switch_count 
            WHERE user_id = :user_id 
            AND exam_id = :exam_id 
            ORDER BY started_at DESC 
            LIMIT 1";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':tab_switch_count' => intval($input['tab_switch_count']),
        ':user_id' => intval($input['user_id']),
        ':exam_id' => intval($input['exam_id'])
    ]);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    error_log("Tab switch tracking error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'Failed to track tab switches']);
}