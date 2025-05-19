<?php
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");
$title = 'Dashboard | Emfob';


ini_set('display_errors', 1);
error_reporting(E_ALL);

$userDetailsResult = getUserDetails('user_id,email,phone_number',USERS,'user_id = ?',array($_SESSION['user_id']));
foreach($userDetailsResult as $val){
	$userDetails= $val;
}

$department = db_select("id,category_name as name",CATEGORIES);

include_once("dashboard-header.php");

?>

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
                        <h4 class="mb-sm-0">Consultancy page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                <li class="breadcrumb-item active">Profile page</li>
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
                                <h4>Consultancy Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Stepper -->
                                    <div class="col-md-3">
                                        <ul class="list-group" id="stepper">
                                            <li class="list-group-item active" id="step-1" data-step="0">
                                                <div class="d-flex align-items-center">
                                                    <div class="step-label">
                                                        <strong>Consultancy Information</strong><br>
                                                        <small>Details about Consultancy</small>
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
														<label for="firstName" class="form-label">First Name <span style='color:red'>*</span>:</label>
														<input type="text" class="form-control" id="firstName"
															placeholder="Enter Your First Name" required>
															<div class="error" id="firstNameErr"></div>
													</div>
													<div class="col-md-6">
														<label for="lastName" class="form-label">Last Name <span style='color:red'>*</span>:</label>
														<input type="text" class="form-control" id="lastName"
															placeholder="Enter Your Last Name" required>
														<div class="error" id="lastNameErr"></div>
													</div>
													
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="dob" class="form-label">Designation <span style='color:red'>*</span>:</label>
														<input type="text" class="form-control" id="desgination"
															placeholder="Enter Your Designation" required>
														<div class="error" id="desginationErr"></div>
													</div>
													<div class="col-md-6">
														<label for="nationality" class="form-label">Department <span style='color:red'>*</span> :</label>
														<select class="form-control" id="department" required>
															<option value="" disabled selected>Select Department
															</option>
															<?php foreach($department as $val){ ?>
															<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
															<?php } ?>
														</select>
														<div class="error" id="departmentErr"></div>
													</div>
													
												</div>
												<div class="row mb-3">
													<div class="col-md-6">
														<label for="contactNumber" class="form-label">Contact
															Number :</label>
															<br/>
															<?php echo $userDetails['phone_number'] ?>	
													</div>
													<div class="col-md-6">
														<label for="emailAddress" class="form-label">Email
															Address :</label>
															<br/>
															<?php echo $userDetails['email'] ?>
													</div>
												</div>
												<!-- Navigation Buttons -->
												<div class="d-flex justify-content-between">
													<button type="button" class="btn btn-primary"
														id="nextStep1">Save</button>
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

<script src="<?php echo BASE_URL ?>js/common_functions.js"></script>

<script>

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
				handleFormSubmit();
			}
        });

       
    });


</script>

<script>
    // Add this JavaScript code after your HTML form

    document.addEventListener('DOMContentLoaded', function () {
        const candidateForm = document.getElementById('candidateForm');

        // Function to handle form submission
        async function handleFormSubmit(event) {
			console.log(1);
            event.preventDefault();
			
			const form = document.getElementById('form_step_1');
            // Create FormData object
            const formData = new FormData(form);

            // Add all form fields to FormData
            // Personal Information
            formData.append('firstName', document.getElementById('firstName').value);
            formData.append('lastName', document.getElementById('lastName').value);
            formData.append('desgination', document.getElementById('desgination').value);
            formData.append('department', document.getElementById('department').value);


            try {
                const response = await fetch('../dist/backend/save-company-profile.php', {
                    method: 'POST',
                    body: formData
                });

                if (response.ok) {
                    const result = await response.json();
                    alert('Profile saved successfully!');
                    // Redirect or show success message
                } else {
                    throw new Error('Failed to save profile');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to save profile. Please try again.');
            }
        }

        // Add form submit event listener
        //candidateForm.addEventListener('submit', handleFormSubmit);
    });
	
	
	//validation for page 1 form
	function page1Validation(){
		const array1 = {
						"firstName":"Full Name",
						"lastName":"Last Name",
						"desgination" : "Designation",
						"department" : "Department"
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
		
		// Personal Information
		formData.append('firstName', document.getElementById('firstName').value);
		formData.append('lastName', document.getElementById('lastName').value);
		formData.append('desgination', document.getElementById('desgination').value);
		formData.append('department', document.getElementById('department').value);
		
		
		fetch('<?php echo BASE_URL_ADMIN ?>backend/save-company-profile.php', {
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

</script>

</body>

</html>