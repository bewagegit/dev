<?php
require_once 'backend/config.php'; // Include the database configuration file

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailOrPhone = $_POST['emailOrPhone'];
    $password = $_POST['password'];

    try {
        // Query to find user by email or phone
        $stmt = $pdo->prepare("SELECT * FROM Users WHERE email = :emailOrPhone OR phone = :emailOrPhone");
        $stmt->execute([':emailOrPhone' => $emailOrPhone]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Start session and set user data
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_type'] = $user['userType'];
                $_SESSION['email'] = $user['email'];

                // Redirect based on user type
                switch ($user['userType']) {
                    case 'candidate':
                        header("Location: candidate_dashboard.php");
                        break;
                    case 'employer':
                        header("Location: employer_dashboard.php");
                        break;
                    case 'freelancer':
                        header("Location: freelancer_dashboard.php");
                        break;
                    case 'consultancy':
                        header("Location: consultancy_dashboard.php");
                        break;
                }
                exit();
            } else {
                $error = "Invalid password. Please try again.";
            }
        } else {
            $error = "No account found with that email or phone number.";
        }
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Login</h2>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form id="loginForm" action="" method="POST">
        <div class="mb-3">
            <label for="emailOrPhone" class="form-label">Email or Phone Number</label>
            <input type="text" class="form-control" id="emailOrPhone" name="emailOrPhone" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </div>
    </form>
</div>
</body>
</html>
