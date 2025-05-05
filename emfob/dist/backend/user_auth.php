<?php
require 'config.php';

include_once("constants.php");

session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $userType = trim($_POST['user_type']); // Get user type from form

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE (email = ? or phone_number = ?) AND user_type = ?");
        $stmt->execute([$email, $email, $userType]); // Verify email and user type
        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Login successful
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['user_type'] = $user['user_type'];
				
				//remember me store usertype, username, password in cookie
				if(isset($_POST["rememberMe"])){
					$hashpassword = $user['email'];
					$key = PASSWORDHASHKEY;
					$hash = hash_hmac('sha256', $hashpassword, $key);
					setcookie ("userType",$userType,time()+ (10 * 365 * 24 * 60 * 60));
					setcookie ("email",$email,time()+ (10 * 365 * 24 * 60 * 60));
					setcookie ("passwordhash",$hash,time()+ (10 * 365 * 24 * 60 * 60));
				}
				else{
					setcookie ("userType",'');
					setcookie ("email",'');
					setcookie ("passwordhash",'');
				}
				
                // Redirect based on user type
                switch ($user['user_type']) {
                    case '1':
                        header('Location: candidate_dashboard.php');
                        break;
                    case '2':
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
            $error = "Invalid Email or Password or User Type!";
        }
    } catch (PDOException $e) {
        $error = "Database error: " . $e->getMessage();
    }
}
?>