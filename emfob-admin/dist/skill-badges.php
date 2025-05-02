<!doctype html>
<?php 
include "header.php";
include __DIR__ . "/backend/config.php";

// Fetch available exams
try {
    $sql = "SELECT * FROM exams ORDER BY created_at DESC";
    $stmt = $pdo->query($sql);
    $exams = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Error fetching exams: " . $e->getMessage());
    $exams = [];
}
?>

<style>
    .logo-corner {
        position: absolute;
        top: 1px;
        right: 10px;
        width: 50px;
        height: 50px;
        opacity: 0.8;
        object-fit: contain;
    }

    .skill-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .skill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .card-header {
        position: relative;
        padding-right: 70px; /* Make space for the logo */
    }
</style>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Skill Tests</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tests</a></li>
                                <li class="breadcrumb-item active">Skill Tests</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exams Grid -->
            <div class="row mt-4">
                <?php if (empty($exams)): ?>
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            No skill tests are currently available.
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($exams as $exam): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center position-relative skill-card">
                                <div class="card-header">
                                    <h4><?php echo htmlspecialchars($exam['title']); ?></h4>
                                    <img src="<?php echo !empty($exam['image_path']) ? 
                                        htmlspecialchars($exam['image_path']) : 
                                        'assets/images/default-test-logo.png'; ?>" 
                                         alt="<?php echo htmlspecialchars($exam['title']); ?> Logo" 
                                         class="img-fluid logo-corner" 
                                         onerror="this.src='assets/images/default-test-logo.png'"/>
                                </div>
                                <div class="card-body">
                                    <p class="mb-3">
                                        <i class="fas fa-info-circle me-1"></i>
                                        <?php echo htmlspecialchars($exam['description']); ?>
                                    </p>
                                    <p class="text-muted mb-2">
                                        <i class="fas fa-clock me-1"></i> 
                                        Duration: <?php echo $exam['duration']; ?> minutes
                                    </p>
                                    <p class="text-muted mb-3">
                                        <i class="fas fa-star me-1"></i> 
                                        Pass Mark: <?php echo $exam['pass_mark']; ?>%
                                    </p>
                                    
                                    <?php 
                                    // Check if user has attempted this exam before
                                    if (isset($_SESSION['user_id'])) {
                                        $attempt_sql = "SELECT * FROM quiz_attempts 
                                                        WHERE user_id = :user_id 
                                                        AND exam_id = :exam_id 
                                                        ORDER BY completed_at DESC 
                                                        LIMIT 1";
                                        $attempt_stmt = $pdo->prepare($attempt_sql);
                                        $attempt_stmt->execute([
                                            ':user_id' => $_SESSION['user_id'],
                                            ':exam_id' => $exam['id']
                                        ]);
                                        $previous_attempt = $attempt_stmt->fetch(PDO::FETCH_ASSOC);
                                    
                                        if ($previous_attempt): ?>
                                            <div class="mb-3">
                                                <small class="text-muted">
                                                    Last Attempt: 
                                                    <?php if ($previous_attempt['status'] === 'Passed'): ?>
                                                        <span class="text-success">
                                                            <i class="fas fa-check-circle me-1"></i>Passed
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="text-danger">
                                                            <i class="fas fa-times-circle me-1"></i>Failed
                                                        </span>
                                                    <?php endif; ?>
                                                    (<?php echo number_format($previous_attempt['score'], 2); ?>%)
                                                </small>
                                            </div>
                                        <?php endif;
                                    } ?>

                                    <a href="skill-exam.php?exam=<?php echo urlencode($exam['title']); ?>" 
                                       class="btn <?php echo isset($previous_attempt) && $previous_attempt['status'] === 'Passed' 
                                            ? 'btn-outline-success' 
                                            : 'btn-success'; ?> btn-lg">
                                        <?php if (isset($previous_attempt)): ?>
                                            <?php echo $previous_attempt['status'] === 'Passed' 
                                                ? '<i class="fas fa-redo me-1"></i>Retake Test' 
                                                : '<i class="fas fa-play me-1"></i>Try Again'; ?>
                                        <?php else: ?>
                                            <i class="fas fa-play me-1"></i>Start Test
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="card-footer text-muted">
                                    <small>
                                        <i class="fas fa-calendar me-1"></i>
                                        Added: <?php echo date('M d, Y', strtotime($exam['created_at'])); ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>