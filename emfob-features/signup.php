<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);
    $user_type = trim($_POST['user_type']);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, email, phone_number, password, user_type) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$username, $email, $phone_number, $password, $user_type]);
        header('Location: login.php');
        exit;
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
    <title>Signup</title>
</head>
<body>
    <h2>Signup</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone_number" placeholder="Phone Number" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <label for="user_type">User Type:</label>
        <select name="user_type" required>
            <option value="candidate">Candidate</option>
            <option value="employer">Employer</option>
            <option value="freelancer">Freelancer</option>
            <option value="admin">Admin</option>
        </select><br>
        <button type="submit">Signup</button>
    </form>
    <a href="login.php">Login</a>
</body>
</html>
