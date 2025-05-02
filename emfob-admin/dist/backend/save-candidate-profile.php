<?php
session_start();
require_once 'config.php'; // Include your PDO database connection

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

try {
    // Handle file uploads
    $uploadDir = 'uploads/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    // Handle profile picture upload
    $profilePicturePath = null;
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $profilePicturePath = $uploadDir . uniqid() . '_' . basename($_FILES['profile_picture']['name']);
        move_uploaded_file($_FILES['profile_picture']['tmp_name'], $profilePicturePath);
    }
    
    // Handle certificate upload
    $certificateFilePath = null;
    if (isset($_FILES['certificate_file']) && $_FILES['certificate_file']['error'] === UPLOAD_ERR_OK) {
        $certificateFilePath = $uploadDir . uniqid() . '_' . basename($_FILES['certificate_file']['name']);
        move_uploaded_file($_FILES['certificate_file']['tmp_name'], $certificateFilePath);
    }
    
    // Handle resume upload
    $resumeFilePath = null;
    if (isset($_FILES['resume_file']) && $_FILES['resume_file']['error'] === UPLOAD_ERR_OK) {
        $resumeFilePath = $uploadDir . uniqid() . '_' . basename($_FILES['resume_file']['name']);
        move_uploaded_file($_FILES['resume_file']['tmp_name'], $resumeFilePath);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO candidate_profiles (
        user_id, full_name, gender, date_of_birth, nationality, contact_number, 
        email_address, residential_address, linkedin_url, github_url, twitter_url,
        marital_status, preferred_comm_method, emergency_contact_name, 
        emergency_contact_number, languages_spoken, hobbies_interests,
        profile_picture_path, current_job_title, company_name, total_experience,
        job_location, notice_period, employment_type, key_skills, job_responsibilities,
        achievements, previous_job_title, previous_company_name, previous_duration_from,
        previous_duration_to, highest_qualification, field_of_study, institution_name,
        graduation_year, degree_details, grade_percentage, academic_achievements,
        certification_title, issuing_organization, certification_date, certification_link,
        certificate_file_path, resume_file_path, preferred_job_title, 
        preferred_job_location, preferred_employment_type, preferred_salary_range,
        willingness_to_relocate, expected_joining_date, additional_preferences,
        cover_letter, portfolio_url
    ) VALUES (
        :user_id, :full_name, :gender, :date_of_birth, :nationality, :contact_number,
        :email_address, :residential_address, :linkedin_url, :github_url, :twitter_url,
        :marital_status, :preferred_comm_method, :emergency_contact_name,
        :emergency_contact_number, :languages_spoken, :hobbies_interests,
        :profile_picture_path, :current_job_title, :company_name, :total_experience,
        :job_location, :notice_period, :employment_type, :key_skills, :job_responsibilities,
        :achievements, :previous_job_title, :previous_company_name, :previous_duration_from,
        :previous_duration_to, :highest_qualification, :field_of_study, :institution_name,
        :graduation_year, :degree_details, :grade_percentage, :academic_achievements,
        :certification_title, :issuing_organization, :certification_date, :certification_link,
        :certificate_file_path, :resume_file_path, :preferred_job_title,
        :preferred_job_location, :preferred_employment_type, :preferred_salary_range,
        :willingness_to_relocate, :expected_joining_date, :additional_preferences,
        :cover_letter, :portfolio_url
    )";

    $stmt = $pdo->prepare($sql);
    
    // Bind parameters
    $params = [
        ':user_id' => $_SESSION['user_id'],
        ':full_name' => $_POST['full_name'] ?? null,
        ':gender' => $_POST['gender'] ?? null,
        ':date_of_birth' => $_POST['date_of_birth'] ?? null,
        ':nationality' => $_POST['nationality'] ?? null,
        ':contact_number' => $_POST['contact_number'] ?? null,
        ':email_address' => $_POST['email_address'] ?? null,
        ':residential_address' => $_POST['residential_address'] ?? null,
        ':linkedin_url' => $_POST['linkedin_url'] ?? null,
        ':github_url' => $_POST['github_url'] ?? null,
        ':twitter_url' => $_POST['twitter_url'] ?? null,
        ':marital_status' => $_POST['marital_status'] ?? null,
        ':preferred_comm_method' => $_POST['preferred_comm_method'] ?? null,
        ':emergency_contact_name' => $_POST['emergency_contact_name'] ?? null,
        ':emergency_contact_number' => $_POST['emergency_contact_number'] ?? null,
        ':languages_spoken' => $_POST['languages_spoken'] ?? null,
        ':hobbies_interests' => $_POST['hobbies_interests'] ?? null,
        ':profile_picture_path' => $profilePicturePath,
        ':current_job_title' => $_POST['current_job_title'] ?? null,
        ':company_name' => $_POST['company_name'] ?? null,
        ':total_experience' => $_POST['total_experience'] ?? null,
        ':job_location' => $_POST['job_location'] ?? null,
        ':notice_period' => $_POST['notice_period'] ?? null,
        ':employment_type' => $_POST['employment_type'] ?? null,
        ':key_skills' => $_POST['key_skills'] ?? null,
        ':job_responsibilities' => $_POST['job_responsibilities'] ?? null,
        ':achievements' => $_POST['achievements'] ?? null,
        ':previous_job_title' => $_POST['previous_job_title'] ?? null,
        ':previous_company_name' => $_POST['previous_company_name'] ?? null,
        ':previous_duration_from' => $_POST['previous_duration_from'] ?? null,
        ':previous_duration_to' => $_POST['previous_duration_to'] ?? null,
        ':highest_qualification' => $_POST['highest_qualification'] ?? null,
        ':field_of_study' => $_POST['field_of_study'] ?? null,
        ':institution_name' => $_POST['institution_name'] ?? null,
        ':graduation_year' => $_POST['graduation_year'] ?? null,
        ':degree_details' => $_POST['degree_details'] ?? null,
        ':grade_percentage' => $_POST['grade_percentage'] ?? null,
        ':academic_achievements' => $_POST['academic_achievements'] ?? null,
        ':certification_title' => $_POST['certification_title'] ?? null,
        ':issuing_organization' => $_POST['issuing_organization'] ?? null,
        ':certification_date' => $_POST['certification_date'] ?? null,
        ':certification_link' => $_POST['certification_link'] ?? null,
        ':certificate_file_path' => $certificateFilePath,
        ':resume_file_path' => $resumeFilePath,
        ':preferred_job_title' => $_POST['preferred_job_title'] ?? null,
        ':preferred_job_location' => $_POST['preferred_job_location'] ?? null,
        ':preferred_employment_type' => $_POST['preferred_employment_type'] ?? null,
        ':preferred_salary_range' => $_POST['preferred_salary_range'] ?? null,
        ':willingness_to_relocate' => $_POST['willingness_to_relocate'] ?? null,
        ':expected_joining_date' => $_POST['expected_joining_date'] ?? null,
        ':additional_preferences' => $_POST['additional_preferences'] ?? null,
        ':cover_letter' => $_POST['cover_letter'] ?? null,
        ':portfolio_url' => $_POST['portfolio_url'] ?? null
    ];

    // Execute the statement
    $stmt->execute($params);
    
    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Profile saved successfully',
        'profile_id' => $pdo->lastInsertId()
    ]);

} catch (Exception $e) {
    // Log the error (you should implement proper error logging)
    error_log("Error saving candidate profile: " . $e->getMessage());
    
    // Return error response
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Failed to save profile. Please try again.'
    ]);
}

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}
?>