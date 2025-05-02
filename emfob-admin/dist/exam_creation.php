<!doctype html>
<?php include "header.php"; ?>
<?php include __DIR__ . "/backend/config.php"; ?>

base:

php
Download
Copy code
<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Start a transaction
        $pdo->beginTransaction();

        // Handle logo upload
        $logo_path = null;
        if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'uploads/exam-logos/'; // Create this directory if it doesn't exist
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            // Generate unique filename
            $file_extension = strtolower(pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION));
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($file_extension, $allowed_types)) {
                throw new Exception('Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.');
            }

            // Validate file size (2MB max)
            if ($_FILES['logo']['size'] > 2 * 1024 * 1024) {
                throw new Exception('File size must be less than 2MB.');
            }

            $unique_filename = uniqid() . '_' . time() . '.' . $file_extension;
            $upload_path = $upload_dir . $unique_filename;

            // Move uploaded file
            if (move_uploaded_file($_FILES['logo']['tmp_name'], $upload_path)) {
                $logo_path = $upload_path;
            } else {
                throw new Exception('Failed to upload logo.');
            }
        }

        // Insert exam details with logo path
        $exam_sql = "INSERT INTO exams (title, description, duration, pass_mark, image_path) VALUES (:title, :description, :duration, :pass_mark, :image_path)";
        $stmt = $pdo->prepare($exam_sql);
        $stmt->execute([
            ':title' => htmlspecialchars($_POST['title']),
            ':description' => htmlspecialchars($_POST['description']),
            ':duration' => intval($_POST['duration']),
            ':pass_mark' => floatval($_POST['pass_mark']),
            ':image_path' => $logo_path
        ]);

        $exam_id = $pdo->lastInsertId();

        // Prepare question and options insertion
        $question_sql = "INSERT INTO questions (exam_id, question_text) VALUES (:exam_id, :question_text)";
        $question_stmt = $pdo->prepare($question_sql);

        $option_sql = "INSERT INTO question_options (question_id, option_text, is_correct) VALUES (:question_id, :option_text, :is_correct)";
        $option_stmt = $pdo->prepare($option_sql);

        // Process each question
        foreach ($_POST['questions'] as $question_index => $question_text) {
            // Insert question
            $question_stmt->execute([
                ':exam_id' => $exam_id,
                ':question_text' => htmlspecialchars($question_text)
            ]);
            $question_id = $pdo->lastInsertId();

            // Insert options for this question
            $options = $_POST['options'][$question_index];
            $correct_option = $_POST['correct_option'][$question_index];

            foreach ($options as $option_index => $option_text) {
                $is_correct = ($option_index == $correct_option) ? 1 : 0;
                $option_stmt->execute([
                    ':question_id' => $question_id,
                    ':option_text' => htmlspecialchars($option_text),
                    ':is_correct' => $is_correct
                ]);
            }
        }

        // Commit the transaction
        $pdo->commit();

        $success = "Exam created successfully!";
    } catch (PDOException $e) {
        // Rollback the transaction in case of error
        $pdo->rollBack();
        
        // Delete uploaded file if exists
        if (isset($logo_path) && file_exists($logo_path)) {
            unlink($logo_path);
        }
        
        $error = "Failed to create the exam: " . $e->getMessage();
    }
}
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create New Exam</h4>
                    </div>
                </div>
            </div>

            <?php if (isset($success)): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php elseif (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST" action="" enctype="multipart/form-data">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Exam Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="title">Exam Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="duration">Duration (in minutes)</label>
                            <input type="number" name="duration" id="duration" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pass_mark">Pass Mark (%)</label>
                            <input type="number" name="pass_mark" id="pass_mark" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="logo">Exam Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
                            <small class="text-muted">Recommended size: 200x200px. Max file size: 2MB</small>
                        </div>
                    </div>
                </div>

                <!-- Questions and Options -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Questions</h4>
                    </div>
                    <div class="card-body">
                        <div id="question-container">
                            <!-- Existing question blocks -->
                            <div class="question-block mb-4">
                                <div class="form-group mb-3">
                                    <label>Question 1</label>
                                    <input type="text" name="questions[]" class="form-control"
                                        placeholder="Enter the question" required>
                                </div>
                                <div class="options-container">
                                    <!-- Existing options -->
                                    <div class="form-group mb-2">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" name="correct_option"
                                                    value="0" required>
                                            </div>
                                            <input type="text" name="options[]" class="form-control"
                                                placeholder="Option 1" required>
                                        </div>
                                    </div>
                                    <!-- More options -->
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" id="add-question">Add Question</button>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Create Exam</button>
            </form>
        </div>
    </div>
</div>
<div class="form-group mb-3">
    <label for="logo">Exam Logo</label>
    <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
    <small class="text-muted">Recommended size: 200x200px. Max file size: 2MB</small>
    <div id="logo-preview" class="mt-2" style="display: none;">
        <img src="" alt="Logo Preview" style="max-width: 150px; max-height: 150px;">
    </div>
</div>

<script>
document.getElementById('logo').addEventListener('change', function(e) {
    const file = e.target.files;
    if (file) {
        // Validate file size (2MB max)
        if (file.size > 2 * 1024 * 1024) {
            alert('File size must be less than 2MB');
            this.value = '';
            return;
        }

        // Validate file type
        if (!file.type.match('image.*')) {
            alert('Please upload an image file');
            this.value = '';
            return;
        }

        // Show preview
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.querySelector('#logo-preview img');
            preview.src = e.target.result;
            document.getElementById('logo-preview').style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});
</script>

<script>
    document.getElementById('add-question').addEventListener('click', function () {
        const container = document.getElementById('question-container');
        const questionCount = container.children.length;

        const div = document.createElement('div');
        div.classList.add('question-block', 'mb-4');
        div.innerHTML = `
        <div class="form-group mb-3">
            <label>Question ${questionCount + 1}</label>
            <input type="text" name="questions[]" class="form-control" placeholder="Enter the question" required>
        </div>
        <div class="options-container">
            <div class="form-group mb-2">
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="correct_option[${questionCount}]" value="0" required>
                    </div>
                    <input type="text" name="options[${questionCount}][]" class="form-control" placeholder="Option 1" required>
                </div>
            </div>
            <div class="form-group mb-2">
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="correct_option[${questionCount}]" value="1" required>
                    </div>
                    <input type="text" name="options[${questionCount}][]" class="form-control" placeholder="Option 2" required>
                </div>
            </div>
            <div class="form-group mb-2">
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="correct_option[${questionCount}]" value="2" required>
                    </div>
                    <input type="text" name="options[${questionCount}][]" class="form-control" placeholder="Option 3" required>
                </div>
            </div>
            <div class="form-group mb-2">
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="correct_option[${questionCount}]" value="3" required>
                    </div>
                    <input type="text" name="options[${questionCount}][]" class="form-control" placeholder="Option 4" required>
                </div>
            </div>
        </div>
    `;

        container.appendChild(div);
    });
</script>