<?php
include "config.php"; // Include your database connection file
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize the posted form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phoneNumberInput'], FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $userType = $_POST['userType'];

    // Basic validation
    if (empty($email) || empty($phone) || empty($password) || empty($confirmPassword) || empty($userType)) {
        echo "Please fill in all required fields.";
        exit();
    }

    // Check if the passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit();
    }

	// Check the phone number is already exist
	$result = db_select("phone_number",USERS," phone_number= ? ",array($phone));
	if(count($result) >= 1){
		echo "Phone number is already exist !";
        exit();
	}

	// Check the email is already exist
	$result = db_select("email",USERS," email= ? ",array($email));
	if(count($result) >= 1){
		echo "Email address is already exist !";
        exit();
	}

    // Hash the password for secure storage
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Start a transaction to ensure data integrity
        $pdo->beginTransaction();

        // Insert into the users table
        $sql = "INSERT INTO users (email, phone_number, password, user_type) VALUES (:email, :phone, :password, :user_type)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':phone' => $phone,
            ':password' => $hashedPassword,
            ':user_type' => $userType
        ]);

        // Get the inserted user ID
        $user_id = $pdo->lastInsertId();

        // Insert user-specific details based on the selected user type
        switch ($userType) {
            case 'candidate':
                if (isset($_POST['candidate_name']) && isset($_POST['experience_level'])) {
                    $candidateName = $_POST['candidate_name'];
                    $experienceLevel = $_POST['experience_level'];
                    $sql = "INSERT INTO candidates (user_id, name, experience_level) VALUES (:user_id, :name, :experience_level)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        ':user_id' => $user_id,
                        ':name' => $candidateName,
                        ':experience_level' => $experienceLevel
                    ]);
                }
                break;

            case 'employer':
                if (isset($_POST['company_name']) && isset($_POST['company_website'])) {
                    $companyName = $_POST['company_name'];
                    $companyWebsite = $_POST['company_website'];
                    $sql = "INSERT INTO employers (user_id, company_name, company_website) VALUES (:user_id, :company_name, :company_website)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        ':user_id' => $user_id,
                        ':company_name' => $companyName,
                        ':company_website' => $companyWebsite
                    ]);
                }
                break;

            case 'freelancer':
                if (isset($_POST['freelancer_name']) && isset($_POST['portfolio_link'])) {
                    $freelancerName = $_POST['freelancer_name'];
                    $portfolioLink = $_POST['portfolio_link'];
                    $sql = "INSERT INTO freelancers (user_id, name, portfolio_link) VALUES (:user_id, :name, :portfolio_link)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        ':user_id' => $user_id,
                        ':name' => $freelancerName,
                        ':portfolio_link' => $portfolioLink
                    ]);
                }
                break;

            case 'consultancy':
                if (isset($_POST['consultancy_name']) && isset($_POST['consultancy_website'])) {
                    $consultancyName = $_POST['consultancy_name'];
                    $consultancyWebsite = $_POST['consultancy_website'];
                    $sql = "INSERT INTO consultancies (user_id, name, website_link) VALUES (:user_id, :name, :website_link)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        ':user_id' => $user_id,
                        ':name' => $consultancyName,
                        ':website_link' => $consultancyWebsite
                    ]);
                }
                break;
        }

        // Commit the transaction
        $pdo->commit();

        // Redirect to the login page with a success message
        header("Location: ../sign-in.php?signup=success");
        exit();

    } catch (PDOException $e) {
        // Rollback the transaction in case of an error
        $pdo->rollBack();
        // Log and display the error message
        error_log("Error: " . $e->getMessage());
		print_r($e);
        echo "An error occurred during the registration process.";
    }
}
?>
