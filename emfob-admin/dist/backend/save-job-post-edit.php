<?php

session_start();

require_once 'config.php'; // Include your PDO database connection
include_once("../../../emfob/dist/backend/config.php");

extract($_POST);

try {
	if(isset($jobtitle) && isset($industryDomainName) && isset($jobType) &&
		isset($employmentType) && isset($jobLocation) && isset($jobDescription) &&
		isset($educationRequirements) && isset($expRequirements) && isset($reqSkills) &&
		isset($prefSkills) && isset($salaryRangeMin) && isset($salaryRangeMax) && isset($noOfOpenings) &&
		isset($applicationDeadLine) && isset($jobPostingsDate)  && isset($contactName) &&
		isset($contactEmail) && isset($contactPhone) && isset($ScreeningQuestions)  ){
			
		
			// Prepare SQL statement
			$sql = " UPDATE ".JOB_POSTINGS." SET 
				job_title = :jobtitle,
				industry_domain_name = :industryDomainName,
				job_type = :jobType,
				employment_type = :employmentType,
				job_location = :jobLocation, 
				job_description = :jobDescription,
				education_requirements = :educationRequirements,
				experience_requirement = :expRequirements,
				req_skills = :reqSkills,
				pref_skills = :prefSkills,
				certifications = :certifications,
				notice_period = :noticePeriod,
				language = :language,
				travel_requirement = :travelRequirements,
				salaryRangeMin = :salaryRangeMin,
				salaryRangeMax = :salaryRangeMax,
				incentives_bonus = :incentivesBonus,
				otherCompensation = :benefits,
				noOfOpenings = :noOfOpenings,
				applicationDeadLine = :applicationDeadLine,
				job_postings_date = :jobPostingsDate,
				shift_timing  = :shfitTiming,
				contact_name =  :contactName,
				contact_email = :contactEmail,
				contact_phone = :contactPhone,
				screening_questions = :ScreeningQuestions
				WHERE ID = :id and posted_by_user_id = :posted_by_user_id 
			 ";
			
			$stmt = $pdo->prepare($sql);
			
			$stmt->bindValue(':id', $edit_id);
			$stmt->bindValue(':jobtitle', $jobtitle ?? null);
			$stmt->bindValue(':industryDomainName', $industryDomainName ?? null);
			$stmt->bindValue(':jobType', $jobType ?? null);
			$stmt->bindValue(':employmentType', $employmentType ?? null);
			$stmt->bindValue(':jobLocation', $jobLocation ?? null);
			$stmt->bindValue(':jobDescription', $jobDescription ?? null);
			$stmt->bindValue(':educationRequirements', $educationRequirements ?? null);
			$stmt->bindValue(':expRequirements', $expRequirements ?? null);
			$stmt->bindValue(':reqSkills', $reqSkills ?? null);
			$stmt->bindValue(':prefSkills', $prefSkills ?? null);
			$stmt->bindValue(':certifications', $certifications ?? null);
			$stmt->bindValue(':noticePeriod', $noticePeriod ?? null);
			$stmt->bindValue(':language', $language ?? null);
			$stmt->bindValue(':travelRequirements', $travelRequirements ?? null);
			$stmt->bindValue(':salaryRangeMin', $salaryRangeMin ?? null);
			$stmt->bindValue(':salaryRangeMax', $salaryRangeMax ?? null);
			$stmt->bindValue(':incentivesBonus', $incentivesBonus ?? null);
			$stmt->bindValue(':benefits', $benefits ?? null);
			$stmt->bindValue(':noOfOpenings', $noOfOpenings ?? null);
			$stmt->bindValue(':applicationDeadLine', $applicationDeadLine ?? null);
			$stmt->bindValue(':jobPostingsDate', $jobPostingsDate ?? null);
			$stmt->bindValue(':shfitTiming', $shfitTiming ?? null);
			$stmt->bindValue(':contactName', $contactName ?? null);
			$stmt->bindValue(':contactEmail', $contactEmail ?? null);
			$stmt->bindValue(':contactPhone', $contactPhone ?? null);
			$stmt->bindValue(':ScreeningQuestions', $ScreeningQuestions ?? null);
		
			
			// Execute the statement
			$stmt->execute();
			
			
			// Return success response
			echo json_encode([
				'success' => true,
				'message' => 'Job Updated Successfully',
				'profile_id' => $pdo->lastInsertId()
			]);
	}
} catch (Exception $e) {
	echo $e->getMessage();
    // Log the error (you should implement proper error logging)
    error_log("Error posting job: " . $e->getMessage());
    
    // Return error response
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Failed to save job. Please try again.'
    ]);
}

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

?>