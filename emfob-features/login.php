<?php
require 'config.php';
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $userType = trim($_POST['user_type']); // Get user type from form

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? AND user_type = ?");
        $stmt->execute([$email, $userType]); // Verify email and user type
        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Login successful
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_type'] = $user['user_type'];

                // Redirect based on user type
                switch ($user['user_type']) {
                    case 'candidate':
                        header('Location: candidate_dashboard.php');
                        break;
                    case 'employer':
                        header('Location: company_dashboard.php');
                        break;
                    case 'admin':
                        header('Location: admin_dashboard.php');
                        break;
                    default:
                        header('Location: general_dashboard.php'); // Fallback for unknown roles
                        break;
                }
                exit;
            } else {
                $error = "Incorrect password!";
            }
        } else {
            $error = "Invalid email or user type!";
        }
    } catch (PDOException $e) {
        $error = "Database error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <select name="user_type" required>
            <option value="" disabled selected>Select User Type</option>
            <option value="candidate">Candidate</option>
            <option value="employer">Company</option>
            <option value="admin">Admin</option>
        </select><br><br>
        <button type="submit">Login</button>
    </form>
    <a href="signup.php">Signup</a>
</body>
</html>
