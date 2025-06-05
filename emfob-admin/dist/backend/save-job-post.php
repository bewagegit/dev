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
			$sql = "INSERT INTO ".JOB_POSTINGS." (
				posted_by_user_id, company_id,job_title,industry_domain_name,job_type,employment_type,
				job_location, job_description ,education_requirements,
				experience_requirement,req_skills,pref_skills,certifications,notice_period,language,incentives_bonus,travel_requirement,salaryRangeMin,salaryRangeMax,otherCompensation,noOfOpenings,applicationDeadLine,job_postings_date,shift_timing,
				contact_name,contact_email,contact_phone,screening_questions
			) VALUES (
				:posted_by_user_id, :company_id, :jobtitle, :industryDomainName, :jobType, :employmentType, :jobLocation, :jobDescription,
				:educationRequirements,
				:expRequirements, :reqSkills, :prefSkills, :certifications, :noticePeriod, :language ,:incentives_bonus, :travelRequirements, :salaryRangeMin, :salaryRangeMax , :benefits,
				:noOfOpenings, :applicationDeadLine, :jobPostingsDate,
				:shift_timing, :contactName, :contactEmail, :contactPhone,
				:ScreeningQuestions
			)";
			
			
			$stmt = $pdo->prepare($sql);
			
			// Bind parameters
			$params = [
				':posted_by_user_id' => $_SESSION['user_id'],
				':company_id' => $_SESSION['employer_id'],
				':jobtitle' => $jobtitle ?? null,
				':industryDomainName' => $industryDomainName ?? null,
				':jobType' => $jobType ?? null,
				':employmentType' => $employmentType ?? null,
				':jobLocation' => $jobLocation ?? null,
				':jobDescription' => $jobDescription ?? null,
				':educationRequirements' => $educationRequirements ?? null,
				':expRequirements' => $expRequirements ?? null,
				':reqSkills' => $reqSkills ?? null,
				':prefSkills' => $prefSkills ?? null,
				':certifications' => $certifications ?? null,
				':noticePeriod' => $noticePeriod ?? null,
				':language' => $language ?? null,
				':travelRequirements' => $travelRequirements ?? null,
				':incentives_bonus' => $incentivesBonus ?? null,
				':salaryRangeMin' => $salaryRangeMin ?? null,
				':salaryRangeMax' => $salaryRangeMax ?? null,
				':benefits' => $benefits ?? null,
				':noOfOpenings' => $noOfOpenings ?? null,
				':applicationDeadLine' => $applicationDeadLine ?? null,
				':jobPostingsDate' => $jobPostingsDate ?? null,
				':shift_timing' => $shfitTiming ?? null,
				':contactName' => $contactName ?? null,
				':contactEmail' => $contactEmail ?? null,
				':contactPhone' => $contactPhone ?? null,
				':ScreeningQuestions' => $ScreeningQuestions ?? null
			];
			
			foreach ($params as $key => $value) {
				$sql = str_replace($key, "'" . addslashes($value) . "'", $sql);
			}
			
			// Execute the statement
			$stmt->execute($params);
			
			
			// Return success response
			echo json_encode([
				'success' => true,
				'message' => 'Job saved successfully',
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