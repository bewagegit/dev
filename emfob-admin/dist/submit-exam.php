<?php
session_start();
include __DIR__ . "/backend/config.php";

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode([
        'success' => false, 
        'message' => 'User not logged in'
    ]);
    exit;
}

try {
    // Start a database transaction
    $pdo->beginTransaction();

    // Get the exam ID
    $exam_id = isset($_POST['exam_id']) ? intval($_POST['exam_id']) : 0;

    // Fetch total questions and pass mark for the exam
    $exam_query = "SELECT title, pass_mark FROM exams WHERE id = :exam_id";
    $exam_stmt = $pdo->prepare($exam_query);
    $exam_stmt->execute([':exam_id' => $exam_id]);
    $exam_details = $exam_stmt->fetch(PDO::FETCH_ASSOC);

    if (!$exam_details) {
        throw new Exception("Exam not found");
    }

    // Prepare to check answers
    $answer_query = "SELECT q.id as question_id, qo.id as option_id, qo.is_correct 
                     FROM questions q
                     JOIN question_options qo ON q.id = qo.question_id 
                     WHERE q.exam_id = :exam_id AND qo.is_correct = 1";
    $answer_stmt = $pdo->prepare($answer_query);
    $answer_stmt->execute([':exam_id' => $exam_id]);
    $correct_answers = $answer_stmt->fetchAll(PDO::FETCH_ASSOC);

    // Calculate score
    $total_questions = count($correct_answers);
    $correct_count = 0;

    // Prepare to insert individual answers
    $answer_insert_query = "INSERT INTO quiz_answers (attempt_id, question_id, selected_option_id, is_correct) 
                            VALUES (:attempt_id, :question_id, :selected_option_id, :is_correct)";
    $answer_insert_stmt = $pdo->prepare($answer_insert_query);

    // Track answers
    $user_answers = [];
    foreach ($correct_answers as $correct_answer) {
        $question_id = $correct_answer['question_id'];
        $selected_option_id = isset($_POST["question_$question_id"]) 
            ? intval($_POST["question_$question_id"]) 
            : null;

        $is_correct = $selected_option_id == $correct_answer['option_id'];
        
        if ($is_correct) {
            $correct_count++;
        }

        // Store user's answer
        $user_answers[] = [
            'question_id' => $question_id,
            'selected_option_id' => $selected_option_id,
            'is_correct' => $is_correct
        ];
    }

    // Calculate score percentage
    $score_percentage = ($correct_count / $total_questions) * 100;
    $status = $score_percentage >= floatval($exam_details['pass_mark']) ? 'Passed' : 'Failed';

    // Insert quiz attempt
    $attempt_query = "INSERT INTO quiz_attempts (
        user_id, 
        exam_id, 
        started_at, 
        completed_at, 
        tab_switch_count, 
        score, 
        status
    ) VALUES (
        :user_id, 
        :exam_id, 
        :started_at, 
        NOW(), 
        :tab_switch_count, 
        :score, 
        :status
    )";
    $attempt_stmt = $pdo->prepare($attempt_query);
    $attempt_stmt->execute([
        ':user_id' => $_SESSION['user_id'],
        ':exam_id' => $exam_id,
        ':started_at' => $_SESSION['exam_start_time'] ?? date('Y-m-d H:i:s'),
        ':tab_switch_count' => $_SESSION['tab_switch_count'] ?? 0,
        ':score' => $score_percentage,
        ':status' => $status
    ]);
    $attempt_id = $pdo->lastInsertId();

    // Insert individual answers
    foreach ($user_answers as $answer) {
        $answer_insert_stmt->execute([
            ':attempt_id' => $attempt_id,
            ':question_id' => $answer['question_id'],
            ':selected_option_id' => $answer['selected_option_id'],
            ':is_correct' => $answer['is_correct'] ? 1 : 0
        ]);
    }

    // Commit transaction
    $pdo->commit();

    // Prepare response
    $response = [
        'success' => true,
        'attempt_id' => $attempt_id,
        'exam_id' => $exam_id,
        'total_questions' => $total_questions,
        'correct_answers' => $correct_count,
        'score_percentage' => round($score_percentage, 2),
        'status' => $status,
        'exam_title' => $exam_details['title']
    ];

    // Clear session variables
    unset($_SESSION['exam_start_time']);
    unset($_SESSION['tab_switch_count']);

    // Return JSON response
    echo json_encode($response);

} catch (Exception $e) {
    // Rollback transaction in case of error
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }

    // Log the error
    error_log("Exam submission error: " . $e->getMessage());

    // Return error response
    echo json_encode([
        'success' => false, 
        'message' => 'An error occurred while submitting the exam: ' . $e->getMessage()
    ]);
}