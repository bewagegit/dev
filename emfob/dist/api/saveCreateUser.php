<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");

include_once("../api/chkAuthenticate.php");

header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set("error_reporting",-1);
extract($_POST);

// Check the phone number is already exist
$result = db_select("phone_number",USERS," phone_number= ? ",array($phone_no));
if(count($result) >= 1){
	echo json_encode(array("result"=> "Phone number is already exist"));
	exit();
}

// Check the email is already exist
$result = db_select("email",USERS," email= ? ",array($emailAddress));
if(count($result) >= 1){
	echo json_encode(array("result"=> "Email address is already exist"));
	exit();
}

 try {
        // Start a transaction to ensure data integrity
        $pdo->beginTransaction();
		
		$password = CREATEUSERPASSWORDDEFAULT;
		
		$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert into the users table
        $sql = "INSERT INTO ".USERS." (email, phone_number, password, user_type) VALUES (:email, :phone, :password, :user_type)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':email' => $emailAddress,
            ':phone' => $phone_no,
            ':password' => $hashedPassword,
            ':user_type' => 2 //Creating the user for company type
        ]);

        // Get the inserted user ID
        $user_id = $pdo->lastInsertId();
		
		//Get all group List
		$stmt = $pdo->prepare("SELECT * FROM ".EMPLOYERS." a left join ".USERS." b on b.user_id  = a.user_id  WHERE employer_id = ? ");
				
		$stmt->execute([$_SESSION['employer_id']]); // Verify email and user type
		$company_details = $stmt->fetchAll();
		
		$companyName = $company_details[0]['company_name'];
		$companyWebsite = $company_details[0]['company_website'];
		
		$sql = "INSERT INTO employers (user_id, company_name, company_website) VALUES (:user_id, :company_name, :company_website)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([
			':user_id' => $user_id,
			':company_name' => $companyName,
			':company_website' => $companyWebsite
		]);
		echo json_encode(array("result"=> "User Created Succcessfully"));
 }
 catch (PDOException $e) {
	// Rollback the transaction in case of an error
	$pdo->rollBack();
	// Log and display the error message
	error_log("Error: " . $e->getMessage());
	print_r($e);
	echo "An error occurred during the registration process.";
 }	
?>