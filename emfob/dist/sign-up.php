<?php
include "backend/config.php";
include "backend/user_auth.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sign Up | Emfob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" />

    <script>
        // Function to show/hide form fields based on user type
        function showFormFields(userType) {
            // Hide all sections first
            document.querySelectorAll('.form-section').forEach(function (section) {
                section.style.display = 'none';
            });

            // Show the selected user type's section
            if (userType === 'candidate') {
                document.getElementById('candidate').style.display = 'block';
            } else if (userType === 'employer') {
                document.getElementById('employer').style.display = 'block';
            } else if (userType === 'freelancer') {
                document.getElementById('freelancer').style.display = 'block';
            } else if (userType === 'consultancy') {
                document.getElementById('consultancy').style.display = 'block';
            }
        }

    </script>

</head>

<body>

    <!-- Begin page -->
    <div>

        <div class="main-content">

            <div class="page-content">

                <!-- START SIGN-UP -->
                <section class="bg-auth">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <div class="card auth-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 text-center">
                                            <div class="card-body p-4">
                                                <a href="index.html">
                                                    <img src="assets/images/logo-light.png" alt="" class="logo-light">
                                                    <img src="assets/images/logo-dark.png" alt="" style="width:20%"
                                                        class="logo-dark">
                                                </a>
                                                <div class="mt-5">
                                                    <img src="assets/images/auth/sign-up.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="auth-content card-body p-5 text-white">
                                                <div class="w-100">
                                                    <div class="text-center">
                                                        <h5>Let's Get Started</h5>
                                                        <p class="text-white-70">Sign Up and get access to all the
                                                            features of Emfob</p>
                                                    </div>
                                                    <form id="registrationForm" action="backend/signup_process.php"
                                                        class="auth-form" method="POST">
                                                        <!-- Select User Type -->
                                                        <div class="mb-3">
                                                            <label for="userType" class="form-label">I am a</label>
                                                            <select id="userType" class="form-control" name="userType"
                                                                style="background-color: #f8f9fa; color: #6e68c9;"
                                                                onchange="showFormFields(this.value)">
                                                                <option value="" disabled selected>Select</option>
                                                                <option value="candidate">Candidate</option>
                                                                <option value="employer">Employer</option>
                                                                <option value="freelancer">Freelancer</option>
                                                                <option value="consultancy">Consultancy</option>
                                                            </select>
                                                        </div>

                                                        <!-- Common Fields -->
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" placeholder="Enter your email" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="phone" class="form-label">Phone Number</label>
                                                            <input type="tel" class="form-control" required id="phone"
                                                                name="phone" pattern="[6-9]{1}[0-9]{9}"
                                                                placeholder="Enter your 10 digit phone number">
                                                            <div class="invalid-feedback">Please enter a valid phone
                                                                number</div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" class="form-control" required
                                                                id="password" name="password"
                                                                placeholder="Enter your password">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="confirmPassword" class="form-label">Confirm
                                                                Password</label>
                                                            <input type="password" class="form-control" required
                                                                id="confirmPassword" name="confirmPassword"
                                                                placeholder="Confirm your password">
                                                            <div class="invalid-feedback">Passwords do not match.</div>
                                                        </div>

                                                        <!-- User Type Specific Fields -->
                                                        <div id="candidate" class="form-section" style="display:none">
                                                            <h5>Candidate Information</h5>
                                                            <div class="mb-3">
                                                                <label for="candidateNameInput"
                                                                    class="form-label">Candidate Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="candidateNameInput" name="candidate_name"
                                                                    placeholder="Enter your name" >
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="experienceLevel" class="form-label">Are you
                                                                    a Fresher or Experienced?</label>
                                                                <select
                                                                    style="background-color: #f8f9fa; color: #6e68c9;"
                                                                    id="experienceLevel" class="form-control"
                                                                    name="experienceLevel" >
                                                                    <option value="" disabled selected>Select</option>
                                                                    <option value="fresher">Fresher</option>
                                                                    <option value="experienced">Experienced</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div id="employer" class="form-section" style="display:none">
                                                            <h5>Employer Information</h5>
                                                            <div class="mb-3">
                                                                <label for="companyName" class="form-label">Company
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="companyName"
                                                                    name="company_name"
                                                                    placeholder="Enter your company name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="companyWebsite" class="form-label">Company
                                                                    Website</label>
                                                                <input type="text" class="form-control"
                                                                    id="companyWebsite" name="company_website"
                                                                    placeholder="Enter your company website">
                                                            </div>
                                                        </div>

                                                        <div id="freelancer" class="form-section" style="display:none">
                                                            <h5>Freelancer Information</h5>
                                                            <div class="mb-3">
                                                                <label for="freelancerNameInput" class="form-label">Your
                                                                    Full Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="freelancerNameInput" name="freelancer_name"
                                                                    placeholder="Enter your name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="portfolio" class="form-label">Portfolio
                                                                    Link</label>
                                                                <input type="text" class="form-control"
                                                                    id="portfolioLink" name="portfolio_link"
                                                                    placeholder="Enter your Portfolio Link">
                                                            </div>
                                                        </div>

                                                        <div id="consultancy" class="form-section" style="display:none">
                                                            <h5>Consultancy Information</h5>
                                                            <div class="mb-3">
                                                                <label for="consultancyName"
                                                                    class="form-label">Consultancy Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="consultancyName" name="consultancy_name"
                                                                    placeholder="Enter consultancy name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="consultancyWebsite"
                                                                    class="form-label">Website Link</label>
                                                                <input type="text" class="form-control"
                                                                    id="consultancyWebsite" name="consultancy_website"
                                                                    placeholder="Enter your website URL">
                                                            </div>
                                                        </div>

                                                        <div class="mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">I
                                                                    agree to the <a href="javascript:void(0)"
                                                                        class="text-white text-decoration-underline">Terms
                                                                        and Conditions</a></label>
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit"
                                                                class="btn btn-white btn-hover w-100">Sign Up</button>
                                                        </div>
                                                    </form>

                                                    <div class="mt-3 text-center">
                                                        <p class="mb-0">Already a member? <a href="sign-in.php"
                                                                class="fw-medium text-white text-decoration-underline">
                                                                Sign In </a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end auth-box-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </section>
                <!-- END SIGN-UP -->

            </div>
            <!-- End Page-content -->

        </div>
        <!-- END layout-wrapper -->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
            <div>
                <h6>Select your color</h6>
                <ul class="pattern list-unstyled mb-0">
                    <li>
                        <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                    </li>
                    <li>
                        <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                    </li>
                    <li>
                        <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                    </li>
                </ul>
                <div class="mt-3">
                    <h6>Light/dark Layout</h6>
                    <div class="text-center mt-3">
                        <!-- light-dark mode -->
                        <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                            <i class="uil uil-brightness mode-dark mx-auto"></i>
                            <i class="uil uil-moon mode-light"></i>
                        </a>
                        <!-- END light-dark Mode -->
                    </div>
                </div>
            </div>
            <div class="bottom d-none d-md-block">
                <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
            </div>
        </div>
        <!-- end switcher-->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>
        <script>
            // Validate the password and confirm password fields
            function validatePassword() {
                const password = document.getElementById('passwordInput');
                const confirmPassword = document.getElementById('confirmPasswordInput');

                if (password.value !== confirmPassword.value) {
                    confirmPassword.setCustomValidity('Passwords do not match');
                    confirmPassword.classList.add('is-invalid');
                } else {
                    confirmPassword.setCustomValidity('');
                    confirmPassword.classList.remove('is-invalid');
                }
            }

            // Custom validation for phone number input
            document.getElementById('phoneNumberInput').addEventListener('input', function () {
                if (this.validity.patternMismatch) {
                    this.setCustomValidity('Please enter valid phone number ');
                    this.classList.add('is-invalid');
                } else {
                    this.setCustomValidity('');
                    this.classList.remove('is-invalid');
                }
            });

            // Additional listener to validate passwords on input
            document.getElementById('confirmPasswordInput').addEventListener('input', function () {
                validatePassword();
            });
        </script>

</body>

</html>