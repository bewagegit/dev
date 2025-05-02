<!doctype html>
<?php
include "header.php";
include __DIR__ . "/backend/config.php";

// Get the exam name from the URL
$exam_name = isset($_GET['exam']) ? htmlspecialchars($_GET['exam']) : '';

try {
    // Fetch exam details
    $exam_sql = "SELECT e.id, e.title, e.description, e.duration, e.pass_mark, 
                 COUNT(q.id) as total_questions
                 FROM exams e
                 LEFT JOIN questions q ON e.id = q.exam_id
                 WHERE e.title LIKE :exam_name
                 GROUP BY e.id";
    $stmt = $pdo->prepare($exam_sql);
    $stmt->execute([':exam_name' => "%$exam_name%"]);
    $exam = $stmt->fetch(PDO::FETCH_ASSOC);

    // If exam not found, redirect
    if (!$exam) {
        header("Location: skill-badges.php");
        exit();
    }

    // Fetch questions with options
    $questions_sql = "SELECT q.id as question_id, q.question_text, 
                      qo.id as option_id, qo.option_text
                      FROM questions q
                      JOIN question_options qo ON q.id = qo.question_id
                      WHERE q.exam_id = :exam_id
                      ORDER BY q.id, qo.id";
    $questions_stmt = $pdo->prepare($questions_sql);
    $questions_stmt->execute([':exam_id' => $exam['id']]);

    // Group questions with their options
    $questions = [];
    while ($row = $questions_stmt->fetch(PDO::FETCH_ASSOC)) {
        $question_id = $row['question_id'];
        if (!isset($questions[$question_id])) {
            $questions[$question_id] = [
                'text' => $row['question_text'],
                'options' => []
            ];
        }
        $questions[$question_id]['options'][] = [
            'id' => $row['option_id'],
            'text' => $row['option_text']
        ];
    }

} catch (PDOException $e) {
    // Handle database error
    error_log("Exam fetch error: " . $e->getMessage());
    header("Location: skill-badges.php");
    exit();
}
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><?php echo htmlspecialchars($exam['title']); ?></h4>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <h1 class="text-center"><?php echo htmlspecialchars($exam['title']); ?></h1>

                <!-- Exam Details Card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Exam Details</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> <?php echo htmlspecialchars($exam['description']); ?></p>
                        <p><strong>Duration:</strong> <?php echo htmlspecialchars($exam['duration']); ?> minutes</p>
                        <p><strong>Pass Mark:</strong> <?php echo htmlspecialchars($exam['pass_mark']); ?>%</p>
                        <p><strong>Total Questions:</strong> <?php echo htmlspecialchars($exam['total_questions']); ?>
                        </p>
                    </div>
                </div>

                <!-- Exam Form -->
                <form id="examForm" method="POST" action="submit-exam.php">
                    <input type="hidden" name="exam_id" value="<?php echo $exam['id']; ?>">

                    <!-- Questions Container -->
                    <div id="questionsContainer">
                        <?php foreach ($questions as $question_id => $question): ?>
                            <div class="card mb-3 question-card" data-question-id="<?php echo $question_id; ?>">
                                <div class="card-body">
                                    <h5 class="card-title">Question <?php echo $question_id; ?></h5>
                                    <p><?php echo htmlspecialchars($question['text']); ?></p>

                                    <div class="options">
                                        <?php foreach ($question['options'] as $option): ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="question_<?php echo $question_id; ?>"
                                                    id="option_<?php echo $option['id']; ?>"
                                                    value="<?php echo $option['id']; ?>" required>
                                                <label class="form-check-label" for="option_<?php echo $option['id']; ?>">
                                                    <?php echo htmlspecialchars($option['text']); ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg">Submit Exam</button>
                    </div>
                </form>

                <!-- Back to Skill Badges -->
                <div class="text-center mt-4">
                    <a href="skill-badges.php" class="btn btn-primary">Back to Skill Badges</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Exam Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Exam timer
        const duration = <?php echo $exam['duration']; ?> * 60; // Convert to seconds
        const timerDisplay = document.createElement('div');
        timerDisplay.classList.add('fixed-top', 'bg-light', 'text-center', 'p-2');
        document.body.prepend(timerDisplay);

        let timeLeft = duration;
        const timerInterval = setInterval(function () {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;

            timerDisplay.innerHTML = `Time Remaining: ${minutes}m ${seconds}s`;

            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                document.getElementById('examForm').submit();
            }

            timeLeft--;
        }, 1000);

        // Form submission
        document.getElementById('examForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Validate all questions are answered
            const questions = document.querySelectorAll('.question-card');
            let allAnswered = true;

            questions.forEach(question => {
                const questionId = question.dataset.questionId;
                const selectedOption = document.querySelector(`input[name="question_${questionId}"]:checked`);

                if (!selectedOption) {
                    allAnswered = false;
                    question.classList.add('border', 'border-danger');
                } else {
                    question.classList.remove('border', 'border-danger');
                }
            });

            if (!allAnswered) {
                alert('Please answer all questions before submitting.');
                return;
            }

            // Confirm submission
            if (confirm('Are you sure you want to submit the exam?')) {
                // Stop the timer
                clearInterval(timerInterval);

                // Submit the form
                const formData = new FormData(this);

                fetch('submit-exam.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Redirect to results page
                            window.location.href = `exam-result.php?exam_id=${data.exam_id}&attempt_id=${data.attempt_id}`;
                        } else {
                            alert('Error submitting exam: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while submitting the exam.');
                    });
            }
        });
    });
</script>
<?php include "footer.php" ?>

</div>
<!-- end main content-->

<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/js/app.js"></script>

</body>

</html>