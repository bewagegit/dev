<?php
session_start();
require_once 'config.php'; // Include your PDO database connection

include_once("../../../emfob/dist/backend/config.php");

require_once 'check-userlogged.php'; 

extract($_POST);

try {
	
	$stmt = $pdo->prepare("SELECT * FROM ".CONSULTANCIES." a WHERE user_id = ? ");
	$stmt->execute([$_SESSION['user_id']]); // Verify email and user type
	$company_profile_details = $stmt->fetchAll();
   
    $uploadDir = 'uploads/companylogo/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
	
	if (  isset($_FILES['company_logo']['size']) && $_FILES['company_logo']['size'] > MAXSIZE) {
		echo json_encode([
			'success' => false,
			'error' => 'Image size should not exceed 1MB.'
		]);
		exit;
	}
	
	$allowedTypes = ['image/jpeg','image/jpg', 'image/png', 'image/gif'];
	if ( isset($_FILES['company_logo']) && !in_array($_FILES['company_logo']['type'], $allowedTypes)) {
        echo json_encode([
			'success' => false,
			'error' => 'Upload valid image file'
		]);
		exit;
    }
	
	// Handle resume upload
    $resumeFilePath = $company_profile_details[0]['logo']?? '';
    if ( isset($_FILES['company_logo']) && isset($_FILES['company_logo']) && $_FILES['company_logo']['error'] === UPLOAD_ERR_OK) {
        $resumeFilePath = $uploadDir . uniqid() . '_' . basename($_FILES['company_logo']['name']);
        move_uploaded_file($_FILES['company_logo']['tmp_name'], $resumeFilePath);
    }
	
	if(!count($company_profile_details)){
		// Prepare SQL statement
		$sql = "INSERT INTO ".CONSULTANCIES." (
			user_id,
			logo,
			location,
			branch_address,
			secondary_branch_address,
			branch_location_map,
			description,
			overiew_aboutus,
			year_of_establishment,
			no_of_employees,
			industry_domain,
			gst_no,
			linkedin_url,
			instagram_url,
			facebook_url,
			youtube_url,
			google_business_page,
			other_media_url
		) VALUES (
			:user_id,
			:logo,
			:location,
			:branch_address,
			:secondary_branch_address,
			:branch_location_map,
			:description,
			:overiew_aboutus,
			:year_of_establishment,
			:no_of_employees,
			:industry_domain,
			:gst_no,
			:linkedin_url,
			:instagram_url,
			:facebook_url,
			:youtube_url,
			:google_business_page,
			:other_media_url
		)";
	}
	else{
		$sql = "UPDATE ".CONSULTANCIES." SET
				user_id = :user_id,
				logo = :logo,
				location = :location,
				branch_address = :branch_address,
				secondary_branch_address = :secondary_branch_address,
				branch_location_map = :branch_location_map,
				description = :description,
				overiew_aboutus = :overiew_aboutus,
				year_of_establishment = :year_of_establishment,
				no_of_employees = :no_of_employees,
				industry_domain = :industry_domain,
				gst_no = :gst_no,
				linkedin_url = :linkedin_url,
				instagram_url = :instagram_url,
				facebook_url = :facebook_url,
				youtube_url = :youtube_url,
				google_business_page = :google_business_page,
				other_media_url = :other_media_url
				WHERE user_id = '".$_SESSION['user_id']."'
		";
	}
	
    $stmt1 = $pdo->prepare($sql);
    
    // Bind parameters
    $params = [
		':user_id' => $_SESSION['user_id'] ?? '',
		':logo' => $resumeFilePath ?? '',
        ':location' => $location ?? '',
		':branch_address' => $branch_address ?? '',
		':secondary_branch_address' => $secondary_branch_address ?? '',
		':branch_location_map' => $branch_location_map ?? '',
		':description' => $description ?? '',
		':overiew_aboutus' => $overiew_aboutus ?? '',
		':year_of_establishment' => $year_of_establishment ?? '',
		':no_of_employees' => $no_of_employees ?? '',
		':industry_domain' => $industryDomainName ?? '',
		':gst_no' => $gst_no ?? '',
		':linkedin_url' => $linkedin_url ?? '',
		':instagram_url' => $instagram_url ?? '',
		':facebook_url' => $facebookUrl ?? '',
		':youtube_url' => $youtube_url ?? '',
		':google_business_page' => $google_business_page ?? '',
		':other_media_url' => $otherUrl ?? ''
    ];
	
	/*
	$debugSql = $sql;
	foreach ($params as $key => $value) {
		$escaped = is_numeric($value) ? $value : "'" . addslashes($value) . "'";
		$debugSql = str_replace($key, $escaped, $debugSql);
	}
	echo $debugSql;
	exit;
	*/
	
	
    // Execute the statement
    $stmt1->execute($params);
	
	
	
	
    
    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Consultancy saved successfully',
        'profile_id' => $_SESSION['user_id']
    ]);

} catch (Exception $e) {
	print_r($e);
    // Log the error (you should implement proper error logging)
    error_log("Error saving consultancy profile: " . $e->getMessage());
    
    // Return error response
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Failed to save consultancy profile. Please try again.'
    ]);
}

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}
?>