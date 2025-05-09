<?php
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
$title = 'Forgot / Reset Password | Emfob';

$output = "";

extract($_POST);
if(isset($submit)){
	$result = db_select('user_id,email,phone_number,user_type',USERS,'email = :email ',array('email' => $email)  );

	//send mail to user
	if(count($result)){
		//send reset password link to the customer email address
		$row = $result[0];
		$username = explode("@",$row['email']);
		$message = '<html>
					<head>
					  <title>Reset Password - Bewage</title>
					</head>
					<body>
					  <h1>Hi, '.ucfirst($username[0]).',</h1>
					  <p>Please click the below reset password link</p>
					</body>
					</html>';
		//echo $message;
		//sendMail($row['email'],"Reset Password - Bewage",$message);
		
		$output = "<p style='color:white'><b>Reset Password Link will be sent to your email address</b></p>";
	}
	else{
		$output = "<p style='color:red'><b>Invalid Email or Email address not available</b></p>";
	}
}
?>


<!doctype html>
<html lang="en">

    <head>
        
        
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"/>
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" />
        <!--Custom Css-->

    </head>

    <body >
         <!--start page Loader -->
         <div id="preloader">
            <div id="status">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
            </div>
        </div>
        <!--end page Loader -->

        <!-- Begin page -->
        <div>

            
            <div class="main-content">

                <div class="page-content">

                    <!-- START RESET-PASSWORD -->
                    <section class="bg-auth">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12">
                                    <div class="card auth-box">
                                        <div class="row g-0">
                                            <div class="col-lg-6 text-center">
                                                <div class="card-body p-4">
                                                    <a href="index.html">
                                                        <img src="assets/images/logo-light.png" style="width:20%" alt="" class="logo-light">
                                                        <img src="assets/images/logo-dark.png" style="width:20%" alt="" class="logo-dark">
                                                    </a>
                                                    <div class="mt-5">
                                                        <img src="assets/images/auth/reset-password.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="auth-content card-body p-5 h-100 text-white">
                                                    <div class="text-center mb-4">
                                                        <h5>Forgot Password</h5>
                                                        <p class="text-white-50">Reset your password with Emfob.</p>
                                                    </div>
                                                    <form class="auth-form text-white" method="post">
                                                        <div class="alert alert-warning text-center mb-4" role="alert">  Enter your Email and instructions will be sent to you!  </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="email">Email address</label>
                                                            <input type="email" class="form-control" name="email" id="email" required
                                                                placeholder="Enter email address">
                                                        </div>
                                                        <div class="mt-3">
                                                            <button type="submit" name="submit" class="btn btn-white w-100">Send Request</button>
															<?php echo $output; ?>
                                                        </div>
                                                    </form><!-- end form -->
                
                                                    <div class="mt-5 text-center text-white-50">
                                                        <p>Remembered It ? <a href="sign-in.php" class="fw-medium text-white text-decoration-underline"> Go to Login </a></p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end auth-box-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END RESET-PASSWORD -->
                    
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

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
            <div class="bottom d-none d-md-block" >
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

    </body>
</html>