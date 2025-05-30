<?php
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");
$title = 'Skill Badges | Emfob';
?>

<!doctype html>
<?php 
include_once("dashboard-header.php");

//page 1 form
$companies = getAllSelection(COMPANIES);
$job_industry = getAllSelection(JOB_INDUSTRY);
$employment_type = getAllSelection(EMPLOYMENT_TYPE);

// Fetch available exams
try {
    $sql = "SELECT * FROM exams ORDER BY created_at DESC";
    $stmt = $pdo->query($sql);
    $exams = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Error fetching exams: " . $e->getMessage());
    $exams = [];
}
?>

<style>
    .logo-corner {
        position: absolute;
        top: 1px;
        right: 10px;
        width: 50px;
        height: 50px;
        opacity: 0.8;
        object-fit: contain;
    }

    .skill-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .skill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .card-header {
        position: relative;
        padding-right: 70px; /* Make space for the logo */
    }
</style>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Job Post</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tests</a></li>
                                <li class="breadcrumb-item active">Skill Tests</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exams Grid -->
				<div class="row">
				   <div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4>Post Job Details</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<!-- Stepper -->
										<div class="col-md-3">
											<ul class="list-group" id="stepper">
												<li class="list-group-item active" id="step-1" data-step="0">
													<div class="d-flex align-items-center">
														<div class="step-number">Step 1</div>
														<div class="step-label">
															<strong>Job Information</strong><br>
															<small>Details about Job</small>
														</div>
													</div>
												</li>
												<li class="list-group-item" id="step-2" data-step="1">
													<div class="d-flex align-items-center">
														<div class="step-number">Step 2</div>
														<div class="step-label">
															<strong>Requirements</strong><br>
															<small>Required qualification and skills </small>
														</div>
													</div>
												</li>
												<li class="list-group-item" id="step-3" data-step="2">
													<div class="d-flex align-items-center">
														<div class="step-number">Step 3</div>
														<div class="step-label">
															<strong>Application Details</strong><br>
															<small>Upload resume & job preferences</small>
														</div>
													</div>
												</li>
											</ul>
										</div>

										<!-- Form Section -->
										<div class="col-md-9">
											<form id="form_step_1" enctype="multipart/form-data">
												<!-- Step 1: Personal Information -->
												<div class="form-step" >
													<!-- Personal Information -->
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="jobtitle" class="form-label">Job Title <span style='color:red'>*</span>:</label>
															<input type="text" class="form-control" id="jobtitle" name="jobtitle"
																placeholder="Enter Job Title" required>
																<div class="error" id="jobtitleErr"></div>
														</div>
														<?php if($_SESSION['user_type'] == 3){ ?>
														<div class="col-md-6">
															<label for="companyname" class="form-label">Select Company<span style='color:red'>*</span>:</label>
															<select class="form-control" id="companyname" name="companyname" required>
																<option value="" disabled selected>Select Company</option>
																<?php foreach($companies as $val){ ?>
																<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
																<?php } ?>
															</select>
															<div class="error" id="companynameErr"></div>
														</div>
														<?php } ?>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="industryDomainName" class="form-label">Select Industry / Domain <span style='color:red'>*</span>:</label>
															<select class="form-control" id="industryDomainName" name="industryDomainName" required>
																<option value="" disabled selected>Select Industry</option>
																<?php foreach($job_industry as $val){ ?>
																<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
																<?php } ?>
															</select>
															<div class="error" id="industryDomainNameErr"></div>
														</div>
														<div class="col-md-6">
															<label for="job_type" class="form-label">Job Type <span style='color:red'>*</span> :</label>
															<select class="form-control" id="jobType" name="jobType" required>
																<option value="" disabled selected>Select Job Type</option>
																<?php foreach($employment_type as $val){ ?>
																<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
																<?php } ?>
															</select>
															<div class="error" id="jobTypeErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="empType" class="form-label">Employment Type <span style='color:red'>*</span> :</label>
															<select class="form-control" id="employmentType" name="employmentType" required>
																<option value="1" selected>Temporary</option>
																<option value="2" selected>Permanent</option>
															</select>
															<div class="error" id="employementTypeErr"></div>
														</div>
														<div class="col-md-6">
															<label for="jobLocation" class="form-label">Job Location <span style='color:red'>*</span> :</label>
																<input type="text" class="form-control" id="jobLocation" name="jobLocation"
																placeholder="Enter Job Location" required>
															<div class="error" id="jobLocationErr"></div>
														</div>
													</div>
													
													<!-- Navigation Buttons -->
													<div class="d-flex justify-content-between">
														<button type="button" class="btn btn-secondary"
															id="prevStep1">Previous</button>
														<button type="button" class="btn btn-primary"
															id="nextStep1">Next</button>
													</div>
												</div>
												
												<!-- Step 2: Education & Certifications -->
												<div class="form-step" id="form-step-2" style="display: none;">
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="jobTitle" class="form-label">Education Requirements <span style='color:red'>*</span>:</label>
															<input type="text" class="form-control" id="educationRequirements" name="educationRequirements"
																placeholder="Enter Education Requirements" required>
															<div class="error" id="educationRequirementsErr"></div>
														</div>
														<div class="col-md-6">
															<label for="companyName" class="form-label">Experience Requirements (in Yrs)<span style='color:red'>*</span>:</label>
															<input type="number" min="0" class="form-control" id="expRequirements" name="expRequirements"
																placeholder="Enter Experience Requirements" required>
															<div class="error" id="expRequirementsErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="reqSkills" class="form-label">Required Skills / Technical Skills <span style='color:red'>*</span>:</label>
															<input type="text" class="form-control" id="reqSkills" name="reqSkills"
																placeholder="Enter Required Skills">
															<div class="error" id="reqSkillsErr"></div>
														</div>
														<div class="col-md-6">
															<label for="prefSkills" class="form-label">Preferred Skills<span style='color:red'>*</span>:</label>
															<input type="text" class="form-control" id="prefSkills" name="prefSkills"
																placeholder="Enter Preferred Skills">
															<div class="error" id="prefSkillsErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="noticePeriod" class="form-label">Certifications (if any) :</label>
															<input type="text" class="form-control" id="certifications" name="certifications"
																placeholder="Enter Certifications">
															<div class="error" id="certificationsErr"></div>
														</div>
													</div>
													<!-- Educational Qualifications -->
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="jobDescription" class="form-label">Job Description / Summary <span style='color:red'>*</span>:</label>
															<textarea class="form-control" id="jobDescription" rows="7"  name="jobDescription"
															placeholder="Job Description / Summary"></textarea>
															<div class="error" id="jobDescriptionErr"></div>
														</div>
														<div class="col-md-6">
															<label for="keyResponsibility" class="form-label">Key Responsibilities / Duties <span style='color:red'>*</span>:</label>
															<textarea class="form-control" id="keyResponsibility" rows="7" name="keyResponsibility"
															placeholder="Job Description / Summary"></textarea>
															
															<div class="error" id="keyResponsibilityErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="preferredSkills" class="form-label">Expected Start Date <span style='color:red'>*</span>:</label>
															<input type="date" class="form-control" id="expectedStartDate" name="expectedStartDate" required>
															<div class="error" id="expectedStartDateErr"></div>
														</div>
														<div class="col-md-6">
															<label for="noOfOpenings" class="form-label">Number of Openings <span style='color:red'>*</span>:</label>
															<input type="number" min="0" class="form-control" id="noOfOpenings" name="noOfOpenings"
																placeholder="Enter No of Openings">
															<div class="error" id="noOfOpeningsErr"></div>
														</div>
													</div>
													<!-- Resume & Preferences -->
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="preferredJobTitle" class="form-label">Application Deadline <span style='color:red'>*</span>:</label>
															<input type="date" class="form-control" id="applicationDeadLine" name="applicationDeadLine" required>
															<div class="error" id="applicationDeadLineErr"></div>
														</div>
														<div class="col-md-6">
															<label for="preferredJobLocation" class="form-label">Job Posting Date<span style='color:red'>*</span>:</label>
															<input type="date" class="form-control" id="jobPostingsDate" name="jobPostingsDate" required>
															<div class="error" id="jobPostingsDateErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="institution"
																class="form-label">Recruiter Name :</label>
															<input type="text" class="form-control" id="reportingTo" name="reportingTo"
																placeholder="Enter Recruiter Name">
															<div class="error" id="reportingToErr"></div>
														</div>
														<div class="col-md-6">
															<label for="certifications" class="form-label">Travel Requirements :</label>
															<input type="text" class="form-control" name="travelRequirements"
																id="travelRequirements"
																placeholder="Enter Travel Requirements" required>
															<div class="error" id="travelRequirementsErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="salaryRange" class="form-label">Salary (Monthly)
															₹ <input type="number" class="form-control" id="salaryRangeMin" name="salaryRangeMin"
																placeholder="Min">
															<div class="error" id="salaryRangeMinErr"></div>
														</div>
														<div class="col-md-6">
															<label for="salaryRange" class="form-label">Salary (Monthly)
															₹ <input type="number" class="form-control" id="salaryRangeMax" name="salaryRangeMax"
																placeholder="Max">
															<div class="error" id="salaryRangeMaxErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="otherCompensation" class="form-label">Incentives / Bonus :</label>
															<input type="text" class="form-control" id="otherCompensation" name="otherCompensation"
																placeholder="Enter other compensation" required>
															<div class="error" id="otherCompensationErr"></div>
														</div>
														<div class="col-md-6">
															<label for="preferredJobLocation" class="form-label">Benefits (e.g., Health Insurance, Paid Time Off) :</label>
															<input type="text" class="form-control" name="preferredJobLocation"
																id="preferredJobLocation"
																placeholder="Enter your preferred location" required>
															<div class="error" id="preferredJobLocationErr"></div>
														</div>
													</div>
													<!-- Navigation Buttons -->
													<div class="d-flex justify-content-between">
														<button type="button" class="btn btn-secondary"
															id="prevStep2">Previous</button>
														<button type="button" class="btn btn-primary"
															id="nextStep2">Next</button>
													</div>
												</div>
												<!-- #region -->
												

												
												<!-- Step 3: Resume & Preferences -->
												<div class="form-step" id="form-step-3" style="display: none;">
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="contactName" class="form-label">Contact Name<span style='color:red'>*</span>:</label>
															<input type="text" class="form-control" name="contactName"
																id="contactName"
																placeholder="Enter your contact name" required>
															<div class="error" id="contactNameErr"></div>
														</div>
														<div class="col-md-6">
															<label for="contactEmail" class="form-label">Contact Email<span style='color:red'>*</span>:</label>
															<input type="text" class="form-control"
																id="contactEmail" name="contactEmail"
																placeholder="Enter your contact email" required>
															<div class="error" id="contactEmailErr"></div>
														</div>
														<div class="col-md-6">
															<label for="contactPhone" class="form-label">Contact Phone<span style='color:red'>*</span>:</label>
															<input type="text" class="form-control"
																id="contactPhone" name="contactPhone"
																placeholder="Enter contact phone no" required>
															<div class="error" id="contactPhoneErr"></div>
														</div>
														<div class="col-md-12">
															<label for="screenQuestions" class="form-label">Screening Questions :</label>
															<textarea class="form-control" name="ScreeningQuestions" id="ScreeningQuestions" rows="3"
															placeholder="Screening Questions"></textarea>
															<div class="error" id="screenQuestionsErr"></div>
														</div>
														<div class="mt-3"></div>
														<!-- Navigation and Submit Buttons -->
														<div class="d-flex justify-content-between">
															<button type="button" class="btn btn-secondary"
																id="prevStep3">Previous</button>
															<button type="button" class="btn btn-success" id="submitForm">Submit
																Application</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Main Content Ends Here-->
			</div> <!-- container-fluid -->

        </div>
        </div>
    </div>
	<!-- this is footer path  -->
	<footer class="footer">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Emfob.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="http://Emfob.com/"
                            target="_blank" class="text-muted">Emfob</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!-- -->
    <?php //include "footer.php"; ?>
</div>

<!-- JAVASCRIPT -->
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/js/app.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyrKx3qDBUdn7_wwXP08LZ8-nh05M5e7A&libraries=places"></script>
<script src="<?php echo BASE_URL ?>js/common_validation.js"></script>

<script>
const input = document.getElementById('jobLocation');
const autocomplete = new google.maps.places.Autocomplete(input);

document.addEventListener('DOMContentLoaded', function () {
	const steps = document.querySelectorAll('.form-step');
	const stepperItems = document.querySelectorAll('#stepper li');

	let currentStep = 0;

	// Function to show a step
	function showStep(step) {
		steps.forEach((stepElement, index) => {
			if (index === step) {
				stepElement.style.display = 'block';
				stepperItems[index].classList.add('active');
			} else {
				stepElement.style.display = 'none';
				stepperItems[index].classList.remove('active');
			}
		});
	}

	// Make stepper clickable
	stepperItems.forEach((item, index) => {
		item.addEventListener('click', () => {
			currentStep = index;
			showStep(currentStep);
		});
	});

	// Next buttons
	document.getElementById('nextStep1').addEventListener('click', () => {
		if(!page1Validation()){
			currentStep++;
			showStep(currentStep);
		}
	});

	document.getElementById('nextStep2').addEventListener('click', () => {
		if(!page2Validation()){
			currentStep++;
			showStep(currentStep);
		}
	});
	
	document.getElementById('submitForm').addEventListener('click', () => {
		if(!page4Validation()){
			handleFormSubmit();
		}
	});

	
	// Previous buttons
	document.getElementById('prevStep2').addEventListener('click', () => {
		currentStep--;
		showStep(currentStep);
	});

	document.getElementById('prevStep3').addEventListener('click', () => {
		currentStep--;
		showStep(currentStep);
	});

	// Initialize first step
	showStep(currentStep);
});

//validation for page 1 form
function page1Validation(){
	const array1 = {
					"jobtitle":"Job Title",
					"industryDomainName" : "Industry Domain Name",
					"jobType" : "Job Type",
					"employmentType" : "Employment Type",
					"jobLocation" : "Job Location",
					};
					
	clearHtmlError(array1);
	chkValidInput(array1,0);
	var validation = 0;
	$('.error').each(function(index, element) {
		if(element.innerHTML != ''){
			validation = 1;
		}
	});
	
	return validation;
}
//validation for page 2 form
function page2Validation(){
	const array1 = {
					"educationRequirements":"Education Requirements",
					"expRequirements":"Experience Requirements",
					"reqSkills":"Required Skills",
					"prefSkills":"Preferred Skills",
					"expectedStartDate" : "Expected start date",
					"noOfOpenings" : "No. of Openings",
					"applicationDeadLine" : "Application DeadLine",
					"jobPostingsDate" : "Job Posting Date",
					"jobDescription":"Job Description",
					"keyResponsibility":"Key Responsibilities",
					"noOfOpenings":"No. or Openings",
					"applicationDeadLine":"Application Dead Line",
					"jobPostingsDate":"Job Postings",
					"expectedStartDate":"Expected Start Date"
					};
					
	clearHtmlError(array1);
	chkValidInput(array1,0);
	var validation = 0;
	$('.error').each(function(index, element) {
		if(element.innerHTML != ''){
			validation = 1;
		}
	});
	return validation;
}
//validation for page 3 form
function page3Validation(){
	const array1 = {
					"salaryRange":"Salary Range",
					};	
	clearHtmlError(array1);
	chkValidInput(array1,0);
	var validation = 0;
	$('.error').each(function(index, element) {
		if(element.innerHTML != ''){
			validation = 1;
		}
	});
	return validation;
}

//validation for page 4 form
function page4Validation(){
	const array1 = {
					"applyBy":"Apply By",
					"contactName":"Contact Name",
					"contactEmail":"Contact Email",
					"contactPhone":"Contact Phone"
					};	
	clearHtmlError(array1);
	chkValidInput(array1,0);
	var validation = 0;
	$('.error').each(function(index, element) {
		if(element.innerHTML != ''){
			validation = 1;
		}
	});
	return validation;
}

function handleFormSubmit(event) {
	// Create FormData object
	const formData = new FormData();
	
	//generate forma data
	let formDataIds = ['jobtitle','industryDomainName','jobType','employmentType','jobLocation','jobDescription','keyResponsibility','expectedStartDate','noOfOpenings','applicationDeadLine','jobPostingsDate','reportingTo','travelRequirements','educationRequirements','expRequirements','reqSkills','prefSkills','certifications','salaryRange','otherCompensation','preferredJobLocation','applyBy','contactName','contactEmail','contactPhone','ScreeningQuestions']
	
	for(var i=0;i<formDataIds.length;i++){
		formData.append(formDataIds[i], document.getElementById(formDataIds[i]).value);
	}	

	fetch('<?php echo BASE_URL_ADMIN ?>backend/save-job-post.php', {
	  method: 'POST',
	  body: formData
	})
	.then(response => response.json())
	.then(data => {
	  console.log('Success:', data);
	})
	.catch(error => {
		console.log(error);
	  console.error('Error:', error);
	});
	
}


</script>

</body>
</html>