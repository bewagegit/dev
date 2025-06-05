<?php
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");
$title = 'Dashboard | Emfob';


ini_set('display_errors', 1);
error_reporting(E_ALL);


include_once("dashboard-header.php");

//Get all group List
$stmt = $pdo->prepare("SELECT * FROM ".EMPLOYERS." a left join ".USERS." b on b.user_id  = a.user_id  WHERE employer_id = ? ");
		
$stmt->execute([$_SESSION['employer_id']]); // Verify email and user type
$company_details = $stmt->fetchAll();

$job_industry = getAllSelection(JOB_INDUSTRY);

//print_r($company_details);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    #stepper .step-number {
        font-weight: bold;
        margin-right: 10px;
    }

    #stepper .list-group-item {
        border: none;
        border-left: 4px solid transparent;
    }

    #stepper .list-group-item.active {
        border-left: 4px solid #007bff;
    }

    .step-number {
        font-size: 16px;
    }

    .step-label {
        margin-left: 10px;
    }

    .fa-arrow-right {
        font-size: 18px;
        color: #007bff;
    }
	
	
	
	#tag-container {
	  display: flex;
	  flex-wrap: wrap;
	  border: 1px solid #ccc;
	  padding: 5px;
	  border-radius: 5px;
	  max-width: auto;
	}

	.tag {
	  background-color: #b4c2e1;
	  padding: 5px 10px;
	  margin: 2px;
	  border-radius: 3px;
	  display: flex;
	  align-items: center;
	}

	.tag .remove-tag {
	  margin-left: 8px;
	  cursor: pointer;
	  color: red;
	}

	#languagesSpoken {
	  border: none;
	  outline: none;
	  flex-grow: 1;
	  min-width: 120px;
	}
	
	.suggestions-box {
	  border: 1px solid #ccc;
	  max-width: 300px;
	  position: absolute;
	  background: white;
	  z-index: 1000;
	}

	.suggestion {
	  padding: 8px;
	  cursor: pointer;
	}

	.suggestion:hover {
	  background-color: #f0f0f0;
	}
</style>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Company page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                <li class="breadcrumb-item active">Company page</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Main Content Starts Here-->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Company Profile</h4>
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
                                                        <strong>Company Profile</strong><br>
                                                        <small>Details About Company</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item" id="step-2" data-step="1">
                                                <div class="d-flex align-items-center">
                                                    <div class="step-number">Step 2</div>
                                                    <div class="step-label">
                                                        <strong>Social Media Link</strong><br>
                                                        <small>List of Social Media Links</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Form Section -->
                                    <div class="col-md-9">
										<form id="form_step_1" enctype="multipart/form-data">
                                            <!-- Step 1: Personal Information -->
											<div class="form-step" style="display: none;">
												<!-- Personal Information -->
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="fullName" class="form-label">Company Name :</label>
														<?php echo $company_details[0]['company_name'];  ?>
														<br/>
														<label for="fullName" class="form-label">Website :</label>
														<?php echo $company_details[0]['company_website'];  ?>
														<br/>
														<label for="fullName" class="form-label">Phone No :</label>
														<?php echo $company_details[0]['phone_number'];  ?>
													</div>
													<div class="col-md-6">
														<label for="branch_address" class="form-label">Branch Address <span style='color:red'>*</span>:</label>
														<textarea class="form-control" id="branch_address" rows="3"
																placeholder="Enter Company Branch Address"></textarea>
														<div class="error" id="branch_addressErr"></div>
													</div>
													
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="secondary_branch_address" class="form-label">Secondary Branch Location:</label>
														<textarea class="form-control" id="secondary_branch_address" rows="3"
																placeholder="Enter Secondary Branch Location"></textarea>
														<div class="error" id=""></div>
													</div>
													<div class="col-md-6">
														<label for="overiew_aboutus" class="form-label">Overview / AboutUs<span style='color:red'>*</span>:</label>
														<textarea class="form-control" id="overiew_aboutus" rows="3"
																placeholder="Enter Overview / AboutUs"></textarea>
														<div class="error" id="overiew_aboutusErr"></div>
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="description" class="form-label">Company Description<span style='color:red'>*</span>:</label>
														<textarea class="form-control" id="description" rows="3"
																placeholder="Enter Company Description"></textarea>
														<div class="error" id="descriptionErr"></div>
													</div>
													<div class="col-md-6">
															<label for="interview_venue" class="form-label">Interview Venue: <span style='color:red'>*</span>:</label>
															<textarea class="form-control" id="interview_venue" rows="3"
																	placeholder="Enter Interview Venue"></textarea>
															<div class="error" id="interview_venueErr"></div>
													</div>
													
													
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="industry_domain" class="form-label">Industry & Domain Name: 
														<span style='color:red'>*</span>:
														</label>
														<select class="form-control" id="industryDomainName" name="industryDomainName" required>
																<option value="" disabled selected>Select Industry</option>
																<?php foreach($job_industry as $val){ ?>
																<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
																<?php } ?>
														</select>
														<div class="error" id="industryDomainNameErr"></div>
													</div>
													<div class="col-md-6">
														<label for="no_of_employees" class="form-label">No. of Employees: <span style='color:red'>*</span>:</label>
														<input type="text" class="form-control" id="no_of_employees" value=""
															placeholder="Enter No. of Employees" required>
														<div class="error" id="no_of_employeesErr"></div>
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="year_of_establishment" class="form-label">Year of Establishment :</label>
														<input type="text" class="form-control" id="year_of_establishment" value=""
															placeholder="Enter No. of Establishment" required>
														<div class="error" id="year_of_establishmentErr"></div>
													</div>
													<div class="col-md-6">
														<label for="gst_no" class="form-label">GST No.:</label>
														<input type="text" class="form-control" id="gst_no" maxlength= "15" value=""
															placeholder="Enter GST No." required>															
														<div class="error" id="gst_noErr"></div>
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="company_logo" class="form-label">Logo: <span style='color:red'>*</span>:</label>
														<input type="file" class="form-control" id="company_logo">
														<div class="error" id="company_logoErr"></div>
													</div>
												</div>
												<div class="d-flex justify-content-between" style="float:right">
													<button type="button" class="btn btn-primary" 
														id="nextStep1">Next</button>
												</div>
											</div>
										
											<!-- Step 2: Education & Certifications -->
												<div class="form-step" id="form-step-2" style="display: none;">
													<!-- Educational Qualifications -->
								
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="branch_location_map" class="form-label">Branch Location Map :</label>
															<textarea class="form-control" id="branch_location_map" rows="3"
																	placeholder="Enter Branch Location Map"></textarea>
															<div class="error" id="branch_location_mapErr"></div>
														</div>
														<div class="col-md-6">
															<label for="linkedin_url"
																class="form-label">
																<a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a> LinkedIn URL :</label>
															<textarea class="form-control" id="linkedin_url" rows="3"
																placeholder="Enter LinkedIn URL"></textarea>
															<div class="error" id="linkedin_urlErr"></div>
														</div>
														<div class="col-md-6">
															<label for="degreeDetails" class="form-label">
															<a href="#" class="text-danger me-3"><i class="bi bi-instagram"></i></a> Instagram URL:</label>
															<textarea class="form-control" id="degreeDetails" rows="3"
																placeholder="Enter Instagram URL"></textarea>
															<div class="error" id="graduationYearErr"></div>
														</div>
														<div class="col-md-6">
															<label for="google_business_page" class="form-label">
															<a href="#" class="text-danger me-3"><i class="fab fa-google"></i></a> Google Business Page Link:</label>
															<textarea class="form-control" id="google_business_page" rows="3"
																placeholder="Enter Google Business Page Link"></textarea>
															<div class="error" id="google_business_pageErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="degreeDetails" class="form-label">
															<a href="#" class="text-primary me-3"><i class="bi bi-facebook"></i></a>
															Facebook URL:</label>
															<textarea class="form-control" id="facebookUrl" rows="3"
																placeholder="Enter Facebook URL"></textarea>
															<div class="error" id="facebookUrlErr"></div>
														</div>
														<div class="col-md-6">
															<label for="degreeDetails" class="form-label">Office Tour Video URL:</label>
															<textarea class="form-control" id="officeTourVideo" rows="3"
																placeholder="Enter Facebook URL"></textarea>
															<div class="error" id="facebookUrlErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="degreeDetails" class="form-label">Other URL:</label>
															<a style="float:right"  href="javascript:addOtherUrl()"><i class="bi-plus-square"></i></a>
															<textarea class="form-control" id="otherUrl" rows="3"
																placeholder="Enter Other URL"></textarea>
															<div class="error" id="otherUrlErr"></div>
														</div>
														<div id="addOtherUrlDiv">
														</div>
													</div>


													<!-- Navigation Buttons -->
													<div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary"
                                                        id="prevStep1">Previous</button>
                                                    <button type="button" class="btn btn-success" id="submitForm">Submit
                                                        Application</button>
                                                </div>
												</div>
                                            <!-- #region -->
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
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Emfob.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Emfob.com/"
                            target="_blank" class="text-muted">Emfob</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<div class="custom-setting bg-primary pe-0 d-flex flex-column rounded-start">
    <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm rounded-end-0" id="light-dark-mode">
        <i class="mdi mdi-brightness-7 align-middle"></i>
        <i class="mdi mdi-white-balance-sunny align-middle"></i>
    </button>
    <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm" data-toggle="fullscreen">
        <i class="mdi mdi-arrow-expand-all align-middle"></i>
    </button>
    <button type="button" class="btn btn-wide border-0 text-white fs-16 avatar-sm" id="layout-dir-btn">
        <span>RTL</span>
    </button>
</div>

<!-- JAVASCRIPT -->
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/node-waves/waves.min.js"></script>

<script src="<?php echo BASE_URL_ADMIN ?>assets/js/app.js"></script>
<!-- jQuery Validation Plugin -->

<script>
	var addOtherUrlId = 0;
	function addOtherUrl(){
		var html = `<div class="col-md-6" id="otherUrl${addOtherUrlId}">
						<label for="degreeDetails" class="form-label">Other URL:</label>
						<a style="float:right"  href="javascript:removeOtherUrl(${addOtherUrlId})"><i class="bi bi-trash"></i></a>
						<textarea class="form-control"  rows="3"
							placeholder="Enter Other URL"></textarea>
					</div>`;
		document.getElementById("addOtherUrlDiv").insertAdjacentHTML("beforeend",html);
		addOtherUrlId++;
	}
	function removeOtherUrl(id){
		document.getElementById("otherUrl"+id).remove();
	}
	//validation for page 1 form
	function page1Validation(){
		const array1 = {
						"branch_address" : "Branch Address",
						"overiew_aboutus" : "Overiew Aboutus",
						"description" 	  : "Descrption",
						"interview_venue" : "Interview Venue",
						"industryDomainName" : "Industry Domain",
						"no_of_employees" : "No. of Employees",
						"company_logo" : "Company Logo"
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
	function page2Validation(){
		var validation = 0;
		$('.error').each(function(index, element) {
			if(element.innerHTML != ''){
				validation = 1;
			}
		});
		return validation;
	}


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
		
		document.getElementById('prevStep1').addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });

		document.getElementById('submitForm').addEventListener('click', () => {
			console.log("handle form submit");
			if(!page2Validation()){
				handleFormSubmit();
			}
        });        
        // Initialize first step
        showStep(currentStep);
    });


</script>

<script>
    // Add this JavaScript code after your HTML form
	
	
	$(document).ready(function(){
		var restrictNo = '#contactNumber,#emergencyContactNumber';
		//restrict only number 
		//restrictNumbers(restrictNo);
	});
	

	function handleFormSubmit(event) {
		
		// Create FormData object
		const formData = new FormData();
		
		// Add all form fields to FormData
		// Personal Information
		formData.append('branch_address', document.getElementById('branch_address').value);
		formData.append('secondary_branch_address', document.getElementById('secondary_branch_address').value);
		formData.append('overiew_aboutus', document.getElementById('overiew_aboutus').value);
		formData.append('description', document.getElementById('description').value);
		formData.append('interview_venue', document.getElementById('interview_venue').value);
		formData.append('industryDomainName', document.getElementById('industryDomainName').value);
		formData.append('no_of_employees', document.getElementById('no_of_employees').value);
		formData.append('year_of_establishment', document.getElementById('year_of_establishment').value);
		formData.append('gst_no', document.getElementById('gst_no').value);
		formData.append('branch_location_map', document.getElementById('branch_location_map').value);
		formData.append('linkedin_url', document.getElementById('linkedin_url').value);
		formData.append('degreeDetails', document.getElementById('degreeDetails').value);
		formData.append('google_business_page', document.getElementById('google_business_page').value);
		formData.append('facebookUrl', document.getElementById('facebookUrl').value);
		formData.append('officeTourVideo', document.getElementById('officeTourVideo').value);
		formData.append('otherUrl', document.getElementById('otherUrl').value);
		
		// Handle file uploads
		const company_logo = document.getElementById('company_logo').files[0];
		if (company_logo) {
			formData.append('company_logo', company_logo);
		}
		
		fetch('<?php echo BASE_URL_ADMIN ?>backend/save-company-profile-details.php', {
		  method: 'POST',
		  body: formData
		})
		.then(response => response.json())
		.then(data => {
		  console.log('Success:', data);
		})
		.catch(error => {
		  console.error('Error:', error);
		});

	}
	
function clearHtmlError(array){
	
	$('.error').each(function(index, element) {
		element.innerHTML = '';
	})
}

	
//1 :  number, 2  : valid url,  3 : valid email
function chkValidInput(array,type){
	for (var obj in array) {
		var tmp = document.getElementById(obj).value;
		
		if(type == 0){
			if(tmp == ''){
				document.getElementById(obj+"Err").innerHTML = 'Please enter '+array[obj];
			}
		}
		if(type == 1){
			if(tmp != '' && isNaN(tmp) ){
				document.getElementById(obj+"Err").innerHTML = 'Please enter valid '+array[obj];
			}
		}
		else if(type == 2){
			if(tmp != '' && !isValidURL(tmp) ){
				document.getElementById(obj+"Err").innerHTML = 'Please enter valid '+array[obj];
			}
		}
		else if(type == 3){
			if(tmp != '' && !isValidEmail(tmp) ){
				document.getElementById(obj+"Err").innerHTML = 'Please enter valid '+array[obj];
			}
		}
	};
}

</script>

</body>

</html>