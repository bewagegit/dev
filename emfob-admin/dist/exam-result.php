<?php
session_start();
include "header.php";
include __DIR__ . "/backend/config.php";

// Validate attempt
if (!isset($_GET['attempt_id']) || !isset($_GET['exam_id'])) {
    header("Location: skill-badges.php");
    exit;
}

try {
    // Fetch attempt details
    $attempt_query = "SELECT qa.*, e.title as exam_title, e.pass_mark 
                      FROM quiz_attempts qa
                      JOIN exams e ON qa.exam_id = e.id
                      WHERE qa.id = :attempt_id AND qa.exam_id = :exam_id";
    $attempt_stmt = $pdo->prepare($attempt_query);
    $attempt_stmt->execute([
        ':attempt_id' => $_GET['attempt_id'],
        ':exam_id' => $_GET['exam_id']
    ]);
    $attempt = $attempt_stmt->fetch(PDO::FETCH_ASSOC);

    if (!$attempt) {
        throw new Exception("Attempt not found");
    }

    // Fetch detailed results
    $results_query = "SELECT 
        q.question_text, 
        qo_selected.option_text as selected_option,
        qo_correct.option_text as correct_option,
        qa.is_correct
        FROM quiz_answers qa
        JOIN questions q ON qa.question_id = q.id
        LEFT JOIN question_options qo_selected ON qa.selected_option_id = qo_selected.id
        JOIN question_options qo_correct ON q.id = qo_correct.question_id AND qo_correct.is_correct = 1
        WHERE qa.attempt_id = :attempt_id";
    $results_stmt = $pdo->prepare($results_query);
    $results_stmt->execute([':attempt_id' => $_GET['attempt_id']]);
    $detailed_results = $results_stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    error_log("Result fetch error: " . $e->getMessage());
    header("Location: skill-badges.php");
    exit;
}
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Exam Result</h4>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="card">
                    <div class="card-header <?php echo $attempt['status'] == 'Passed' ? 'bg-success' : 'bg-danger'; ?> text-white">
                        <h3 class="text-center"><?php echo htmlspecialchars($attempt['exam_title']); ?> - Result</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Performance Summary</h4>
                                <p><strong>Total Questions:</strong> <?php echo count($detailed_results); ?></p>
                                <p><strong>Correct Answers:</strong> 
                                    <?php 
                                    $correct_count = array_reduce($detailed_results, function($carry, $item) {
                                        return $carry + ($item['is_correct'] ? 1 : 0);
                                    }, 0);
                                    echo $correct_count; 
                                    ?>
                                </p>
                                <p><strong>Score:</strong> <?php echo number_format($attempt['score'], 2); ?>%</p>
                                <p><strong>Pass Mark:</strong> <?php echo $attempt['pass_mark']; ?>%</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <h3 class="<?php echo $attempt['status'] == 'Passed' ? 'text-success' : 'text-danger'; ?>">
                                    <?php echo htmlspecialchars($attempt['status']); ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Detailed Results</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($detailed_results as $index => $result): ?>
                            <div class="mb-3 p-3 <?php echo $result['is_correct'] ? 'bg-success-subtle' : 'bg-danger-subtle'; ?>">
                                <p><strong>Question <?php echo $index + 1; ?>:</strong> 
                                    <?php echo htmlspecialchars($result['question_text']); ?>
                                </p>
                                <p><strong>Your Answer:</strong> 
                                    <?php echo htmlspecialchars($result['selected_option'] ?? 'Not answered'); ?>
                                </p>
                                <p><strong>Correct Answer:</strong> 
                                    <?php echo htmlspecialchars($result['correct_option']); ?>
                                </p>
                                <p class="<?php echo $result['is_correct'] ? 'text-success' : 'text-danger'; ?>">
                                    <?php echo $result['is_correct'] ? 'Correct' : 'Incorrect'; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="skill-badges.php" class="btn btn-primary">Back to Skill Badges</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>