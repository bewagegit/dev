<?php
session_start();
include 'config.php'; // Replace with your DB connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emailOrPhone = $_POST['email'];
    $password = $_POST['password'];

    // Validate inputs
    if (empty($emailOrPhone) || empty($password)) {
        $_SESSION['error'] = "Email/Phone and password are required.";
        header('Location: ../sign-in.php');
        exit();
    }

    // Check if the email/phone exists in the database
    $query = "SELECT * FROM users WHERE email = ? OR phone = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $emailOrPhone, $emailOrPhone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password is correct, log the user in
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $user['user_type']; // Candidate, Employer, etc.
            header('Location: dashboard.php'); // Redirect to the dashboard
            exit();
        } else {
            $_SESSION['error'] = "Invalid credentials.";
            header('Location: ../sign-in.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "User not found.";
        header('Location: ../sign-in.php');
        exit();
    }
}
?>
