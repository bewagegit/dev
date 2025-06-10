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

$company_profile_details = [];

if(!$_SESSION['employer_id'] == ''){
	//check already company details entered
	$stmt = $pdo->prepare("SELECT * FROM ".COMPANIES." a WHERE employer_id = ? ");
	$stmt->execute([$_SESSION['employer_id']]); // Verify email and user type
	$company_profile_details = $stmt->fetchAll();
}
//print_r($company_profile_details);

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
            <div class="container" style="margin-left: 0px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
									
                            <div class="card-header">
                                <h4>Company Profile </h4>
                            </div>
							<div class="d-flex justify-content-end">
								<a href="javascript:void(0);" onclick="createUser()" class="me-3">Create Sub User</a>
								<?php if( isset($company_details[0]['is_admin']) && $company_details[0]['is_admin'] == 1){ ?>
								<span style='color:red;margin-right: 20px;'>Marked as Admin</span>
								<?php }else{ ?>
								<a href="javascript:void(0);" onclick="markAsAdmin()" class="me-3">Mark as Admin</a>
								<?php } ?>
									
							</div>
							
                            <div class="card-body">
                                <div class="row">
                                    <!-- Stepper -->
                                    <div class="col-md-3">
										<?php if( isset($company_profile_details[0]['logo']) && $company_profile_details[0]['logo']){ ?>
										<div class="d-flex align-items-center">
											<div class="row mb-3">
												<img src="<?php echo BASE_URL_ADMIN."backend/".$company_profile_details[0]['logo'] ?>" alt="Course" class="rounded mr-3">
											</div>
										</div>
										<?php } ?>
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
														<label for="fullName" class="form-label">
														<i class="bi bi-building"></i>
														Company Name :</label>
														<?php echo $company_details[0]['company_name'];  ?>
														<br/>
														<label for="fullName" class="form-label">
														<i class="bi bi-globe"></i> Website :</label>
														<?php echo $company_details[0]['company_website'];  ?>
														<br/>
														<label for="fullName" class="form-label">
														<i class="bi bi-telephone"></i>
														Phone No :</label>
														<?php echo $company_details[0]['phone_number'];  ?>
														<br/>
														<label for="fullName" class="form-label"> <i class="bi bi-envelope"></i> Email ID:</label>
														<?php echo $_SESSION['email'];  ?>
													</div>
													<div class="col-md-6">
														<label for="branch_address" class="form-label">Branch Address<span style='color:red'>*</span>:</label>
														<textarea class="form-control" id="branch_address" rows="3"
																placeholder="Enter Company Branch Address"><?php echo $company_profile_details[0]['branch_address']?? "";  ?></textarea>
														<div class="error" id="branch_addressErr"></div>
													</div>
													
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="secondary_branch_address" class="form-label">Secondary Branch Location:</label>
														<textarea class="form-control" id="secondary_branch_address" rows="3"
																placeholder="Enter Secondary Branch Location"><?php echo $company_profile_details[0]['secondary_branch_address']?? "";  ?></textarea>
														<div class="error" id=""></div>
													</div>
													<div class="col-md-6">
														<label for="overiew_aboutus" class="form-label">Overview / AboutUs<span style='color:red'>*</span>:</label>
														<textarea class="form-control" id="overiew_aboutus" rows="3"
																placeholder="Enter Overview / AboutUs"><?php echo $company_profile_details[0]['overiew_aboutus']?? '';  ?></textarea>
														<div class="error" id="overiew_aboutusErr"></div>
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="description" class="form-label">Company Description<span style='color:red'>*</span>:</label>
														<textarea class="form-control" id="description" rows="3"
																placeholder="Enter Company Description"><?php echo $company_profile_details[0]['description']?? '';  ?></textarea>
														<div class="error" id="descriptionErr"></div>
													</div>
													<div class="col-md-6">
															<label for="interview_venue" class="form-label">Interview Venue:</label>
															<textarea class="form-control" id="interview_venue" rows="3"
																	placeholder="Enter Interview Venue"><?php echo $company_profile_details[0]['interview_venue']?? '';  ?></textarea>
															<div class="error" id="interview_venueErr"></div>
													</div>
													
													
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="industry_domain" class="form-label">Industry & Domain Name<span style='color:red'>*</span>:
														</label>
														<select class="form-control" id="industryDomainName" name="industryDomainName" required>
																<option value="" disabled selected>Select Industry</option>
																<?php foreach($job_industry as $val){ ?>
																<option <?php echo ($company_profile_details[0]['industry_domain']?? '' ==  $val['id'])? 'selected':''; ?> value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
																<?php } ?>
														</select>
														<div class="error" id="industryDomainNameErr"></div>
													</div>
													<div class="col-md-6">
														<label for="no_of_employees" class="form-label">No. of Employees<span style='color:red'>*</span>:</label>
														<input type="text" class="form-control" id="no_of_employees" value="<?php echo ($company_profile_details[0]['no_of_employees'])?? ''; ?>"
															placeholder="Enter No. of Employees" required>
														<div class="error" id="no_of_employeesErr"></div>
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="year_of_establishment" class="form-label">Year of Establishment:</label>
														<input type="text" class="form-control" id="year_of_establishment" value="<?php echo ($company_profile_details[0]['year_of_establishment'])?? ''; ?>"
															placeholder="Enter No. of Establishment" required>
														<div class="error" id="year_of_establishmentErr"></div>
													</div>
													<div class="col-md-6">
														<label for="gst_no" class="form-label">GST No.:</label>
														<input type="text" class="form-control" id="gst_no" maxlength= "15" value="<?php echo ($company_profile_details[0]['gst_no'])?? ''; ?>"
															placeholder="Enter GST No." required>															
														<div class="error" id="gst_noErr"></div>
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="company_logo" class="form-label">Logo (.jpg, .png, .gif): </label>
														<input type="file" accept=".jpg,.jpeg,.png,.gif" class="form-control" id="company_logo">
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
															<label for="branch_location_map" class="form-label"><i class="bi bi-geo-alt"></i>Branch Location Map :</label>
															<textarea class="form-control" id="branch_location_map"  rows="3"
																	placeholder="Enter Branch Location Map"><?php echo ($company_profile_details[0]['branch_location_map'])?? ''; ?></textarea>
															<div class="error" id="branch_location_mapErr"></div>
														</div>
														<div class="col-md-6">
															<label for="linkedin_url"
																class="form-label">
																<img src="<?php echo BASE_URL."assets/images/icons8-linkedin-48.png" ?>" height="21" width="21" alt="linkedin url" class="rounded mr-3">
																LinkedIn URL :</label>
															<textarea class="form-control" id="linkedin_url" rows="3"
																placeholder="Enter LinkedIn URL"><?php echo ($company_profile_details[0]['linkedin_url'])?? ''; ?></textarea>
															<div class="error" id="linkedin_urlErr"></div>
														</div>
														<div class="col-md-6">
															<label for="instagram_url" class="form-label">
															<img src="<?php echo BASE_URL."assets/images/instagram.png" ?>" height="18" width="18"  /> Instagram URL:</label>
															<textarea class="form-control" id="instagram_url" rows="3"
																placeholder="Enter Instagram URL"><?php echo ($company_profile_details[0]['instagram_url'])?? ''; ?></textarea>
															<div class="error" id="graduationYearErr"></div>
														</div>
														<div class="col-md-6">
															<label for="google_business_page" class="form-label">
															<img src="<?php echo BASE_URL."assets/images/google_icon.png" ?>" height="18" width="18"  /> Google Business Page Link:</label>
															<textarea class="form-control" id="google_business_page" rows="3"
																placeholder="Enter Google Business Page Link"><?php echo ($company_profile_details[0]['google_business_page'])?? ''; ?></textarea>
															<div class="error" id="google_business_pageErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="facebookUrl" class="form-label">
															<img src="<?php echo BASE_URL."assets/images/icons8-facebook-48.png" ?>" height="21" width="21" alt="facebook url" class="rounded mr-3">
															Facebook URL:</label>
															<textarea class="form-control" id="facebookUrl" rows="3"
																placeholder="Enter Facebook URL"><?php echo ($company_profile_details[0]['facebook_url'])?? ''; ?></textarea>
															<div class="error" id="facebookUrlErr"></div>
														</div>
														<div class="col-md-6">
															<label for="officeTourVideo" class="form-label">Office Tour Video URL:</label>
															<textarea class="form-control" id="officeTourVideo" rows="3"
																placeholder="Enter Facebook URL"><?php echo ($company_profile_details[0]['officeTourVideo'])?? ''; ?></textarea>
															<div class="error" id="facebookUrlErr"></div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label for="otherUrl" class="form-label">Other URL:</label>
															<a style="float:right"  href="javascript:addOtherUrl()"><i class="bi-plus-square"></i></a>
															<textarea class="form-control otherUrl" id="otherUrl"  rows="3"
																placeholder="Enter Other URL"><?php echo ($company_profile_details[0]['other_media_url'])?? ''; ?></textarea>
															<div class="error" id="otherUrlErr"></div>
														</div>
														<div class="col-md-6">
															<label for="youtubeTourVideo" class="form-label">
															<img src="<?php echo BASE_URL."assets/images/icons8-youtube-48.png" ?>" height="21" width="21" alt="youtube url" class="rounded mr-3">
															Youtube URL:</label>
															<textarea class="form-control" id="youtube_url" rows="3"
																placeholder="Enter Youtube URL"><?php echo ($company_profile_details[0]['youtube_url'])?? ''; ?></textarea>
															<div class="error" id="youtubeUrlErr"></div>
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
	
	
	<!-- Modal HTML -->
	<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="modalTitle">Create User</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  
			 <!-- starts  -->
				 <div class="container my-5">
					<div class="card shadow-lg">
					  <div class="card-body">
						
						<div class="mb-4">
							<label for="email_address" class="form-label">Email Address <span style='color:red'>*</span>:</label>
							<input type="email" class="form-control" id="email_address" value="" placeholder="Email Address" required>
							<div class="error" id="email_addressErr"></div>
						</div>
						<div class="mb-4">
							<label for="phone_no" class="form-label">Phone No <span style='color:red'>*</span>:</label>
							<input type="number" maxlength="15" class="form-control" id="phone_no" value="" placeholder="Phone No." required>
							<div class="error" id="phone_noErr"></div>
						</div>
						<div class="" id="resultCreateUser"></div>
						<div class="modal-footer">
							<button type="button" onclick="createSaveUser()" class="btn btn-primary">Save</button>
						</div>
						
					  </div>
					</div>
				  </div>
			 <!-- ends -->
		</div>
	  </div>
	</div>
	
	
	
	

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
<script src="<?php echo BASE_URL ?>js/common_validation.js"></script>
<!-- jQuery Validation Plugin -->
	<?php 
		$other_media_url = explode("##@##",($company_profile_details[0]['other_media_url']?? '') );
		$tmpOtherMedia = [];
		$i = 0;
		foreach($other_media_url as $val){
			if($val != ''){
				$tmpOtherMedia[] = $val;
			}
			$i++;
		}
	?>
<script>
	var mediaURL = <?php echo json_encode($tmpOtherMedia); ?>;
	
	addOtherUrlEdit(mediaURL);
	var addOtherUrlId = 0;
	console.log(mediaURL.length);
	function addOtherUrlEdit(mediaURL){
		var addOtherUrlId = 0;
		for(var i=0;i<mediaURL.length;i++){
			if(i == 0){
				document.getElementById("otherUrl").value = mediaURL[i];
			}
			else{
				var html = `<div class="col-md-6" id="otherUrl${addOtherUrlId}">
						<label for="addOtherUrl" class="form-label">Other URL:</label>
						<a style="float:right" href="javascript:removeOtherUrl(${addOtherUrlId})"><i class="bi bi-trash"></i></a>
						<textarea class="form-control otherUrl"  rows="3"
							placeholder="Enter Other URL">${mediaURL[i]}</textarea>
					</div>`;
				document.getElementById("addOtherUrlDiv").insertAdjacentHTML("beforeend",html);
			}
			addOtherUrlId++;
		}
	}
	
	function addOtherUrl(){
		var html = `<div class="col-md-6" id="otherUrl${addOtherUrlId}">
						<label for="addOtherUrl" class="form-label">Other URL:</label>
						<a style="float:right" href="javascript:removeOtherUrl(${addOtherUrlId})"><i class="bi bi-trash"></i></a>
						<textarea class="form-control otherUrl"  rows="3"
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
						"overiew_aboutus" : "Overview Aboutus",
						"description" 	  : "Descrption",
						"industryDomainName" : "Industry Domain",
						"no_of_employees" : "No. of Employees"
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
			handleFormSubmit();
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
		var otherUrl = '';
		$(".otherUrl").each(function(){
			if($(this).val() != ''){
				otherUrl += $(this).val()+"##@##";
			}
		});
		
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
		formData.append('instagram_url', document.getElementById('instagram_url').value);
		formData.append('google_business_page', document.getElementById('google_business_page').value);
		formData.append('facebookUrl', document.getElementById('facebookUrl').value);
		formData.append('officeTourVideo', document.getElementById('officeTourVideo').value);
		formData.append('youtube_url', document.getElementById('youtube_url').value);
		formData.append('otherUrl', otherUrl);
		
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
			alert("Company details updated successfully.");
			window.location.href = "<?php echo BASE_URL ?>company_dashboard.php";
		})
		.catch(error => {
		  console.error('Error:', error);
		});

	}
	
	
	document.getElementById('company_logo').addEventListener('change', function () {
		const file = document.getElementById('company_logo').files[0];
		const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

		if (file && !allowedTypes.includes(file.type)) {
			alert("Only JPG, PNG, and GIF images are allowed.");
			this.value = ''; // Clear the input
		}
	});
	
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


function createUser(){
	// Get the modal element
	const myModalEl = document.getElementById('myModal');
  
	// Create a new Bootstrap modal instance
	const myModal = new bootstrap.Modal(myModalEl);
	myModal.show(); 
}

function createAdmin(){
	
}

function createSaveUser(){
	const array1 = {
					"email_address":"Email Address",
					"phone_no" : "Phone No"
					};
					
	clearHtmlError(array1);
	chkValidInput(array1,0);
	
	
	const array2 = { "email_address" : "Email Address"};
	chkValidInput(array2,3);
	
	const array3 = { "phone_no" : "Phone No"};
	chkValidInput(array3,1);
	
	var validation = 0;
	$('.error').each(function(index, element) {
		if(element.innerHTML != ''){
			validation = 1;
		}
	});
	
	var emailAddress = document.getElementById('email_address').value;
	var phone_no = document.getElementById('phone_no').value;
	
	const formData = new FormData();
	// Personal Information
	formData.append('emailAddress', document.getElementById('email_address').value);
	formData.append('phone_no', document.getElementById('phone_no').value);
	
	if(!validation){
		fetch('<?php echo BASE_URL ?>api/saveCreateUser.php', {
		  method: 'POST',
		  body: formData
		})
		.then(response => response.json())
		.then(data => {
			$("#resultCreateUser").show();
			console.log('Success:', data);
			if(data.error == 1){
				$("#resultCreateUser").addClass('error');
			}
			else{
				$("#resultCreateUser").addClass('text-primary');
			}
			$("#resultCreateUser").html(data.result); 
			$("#resultCreateUser").fadeOut(2000);
		})
		.catch(error => {
		  console.error('Error:', error);
		});
	}
	
	return validation;	
}

function markAsAdmin(){
	let result = confirm("Are you sure want to mark as Admin?");
	if (result) {
		fetch('<?php echo BASE_URL ?>api/markAsAdmin.php', {
			  method: 'POST'
			})
			.then(response => response.json())
			.then(data => {
				alert("Marked as admin")
			})
			.catch(error => {
			  console.error('Error:', error);
			});
	}
}

</script>

</body>

</html>