<?php
require 'config.php';

include_once("constants.php");

//session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $userType = trim($_POST['user_type']); // Get user type from form

    try {
        $stmt = $pdo->prepare("SELECT a.*,b.employer_id,b.company_name,b.company_website,
		c.consultancy_name as consult_company_name,c.consultancy_website as consult_company_website,c.user_id as consult_employer_id
		FROM ".USERS." a left join ".EMPLOYERS." b on a.user_id = b.user_id  
		left join ".CONSULTANCIES." c on a.user_id = c.user_id  
		WHERE (email = ? or phone_number = ?) AND user_type = ?");
        $stmt->execute([$email, $email, $userType]); // Verify email and user type
        $user = $stmt->fetch();
		
		
        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Login successful
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['user_type'] = $user['user_type'];
				if($userType == 2){
					$_SESSION['employer_id'] = $user['employer_id'];
					$_SESSION['company_name'] = $user['company_name'];
					$_SESSION['company_website'] = $user['company_website'];
				}
				else if($userType == 3){
					$_SESSION['employer_id'] = $user['consult_employer_id'];
					$_SESSION['company_name'] = $user['consult_company_name'];
					$_SESSION['company_website'] = $user['consult_company_website'];
				}
				
				
				//remember me store usertype, username, password in cookie
				if(isset($_POST["rememberMe"])){
					$hashpassword = $user['email'];
					$key = PASSWORDHASHKEY;
					$hash = hash_hmac('sha256', $hashpassword, $key);
					setcookie ("userType",$userType,time()+ (10 * 365 * 24 * 60 * 60));
					setcookie ("email",$email,time()+ (10 * 365 * 24 * 60 * 60));
					setcookie ("passwordhash",$hash,time()+ (10 * 365 * 24 * 60 * 60));
					setcookie ("employer_id",$user['employer_id'],time()+ (10 * 365 * 24 * 60 * 60));
					setcookie ("company_name",$user['company_name'],time()+ (10 * 365 * 24 * 60 * 60));
					setcookie ("company_website",$user['company_website'],time()+ (10 * 365 * 24 * 60 * 60));
				}
				else{
					setcookie ("userType",'');
					setcookie ("email",'');
					setcookie ("passwordhash",'');
					setcookie ("employer_id",'');
					setcookie ("company_name",'');
					setcookie ("company_website",'');
				}
				
                // Redirect based on user type
                switch ($user['user_type']) {
                    case '1':
                        header('Location: candidate_dashboard.php');
                        break;
                    case '2':
                        header('Location: company_dashboard.php');
                        break;
					case '3':
                        header('Location: consultancy_dashboard.php');
                        break;
					case '4':
                        header('Location: candidate_dashboard.php');
                        break;
                    case 'admin':
                        header('Location: consultancy_dashboard.php');
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