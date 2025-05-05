<?php
include_once("backend/user_auth.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
$title = 'Sign In | Emfob';

$userTypes = getAllUserTypes();

$message = '';

if( isset($_COOKIE['email']) && $_COOKIE['email'] != '' &&
	isset($_COOKIE['passwordhash']) && $_COOKIE['passwordhash'] != '' &&
	isset($_COOKIE['userType']) && $_COOKIE['userType'] != ''){
	
	$email = $_COOKIE['email'];
	$userType = $_COOKIE['userType'];
	$cookiePassword = $_COOKIE['passwordhash'];
	
	$stmt = $pdo->prepare("SELECT * FROM users WHERE (email = ? or phone_number = ?) AND user_type = ?");
	$stmt->execute([$email, $email, $userType]); // Verify email and user type
	$user = $stmt->fetch();
	
	$hashpassword = $user['email'];
	$key = PASSWORDHASHKEY;
	$hash = hash_hmac('sha256', $hashpassword, $key);
	
	if ($user) {
		if ($cookiePassword == $hash ) {
			// Login successful
			$_SESSION['user_id'] = $user['user_id'];
			$_SESSION['email'] = $email;
			$_SESSION['user_type'] = $userType;
			header('Location: general_dashboard.php');
		}
	}
}

if(isset($_REQUEST['success']) ){
	$message = "Password updated successfully";
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
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" />
    <!--Custom Css-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">

</head>

<body>
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

                <!-- START SIGN-IN -->
                <section class="bg-auth">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <div class="card auth-box">
                                    <div class="row g-0">
                                        <div class="col-lg-6 text-center">
                                            <div class="card-body p-4">
                                                <a href="index.html">
                                                    <img src="assets/images/logo-light.png" alt="" class="logo-light">
                                                    <img src="assets/images/logo-dark.png" alt="" style="width:20%"
                                                        class="logo-dark">
                                                </a>
                                                <div class="mt-5">
                                                    <img src="assets/images/auth/sign-in.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="auth-content card-body p-5 h-100 text-white">
                                                <div class="w-100">
                                                    <div class="text-center mb-4">
                                                        <h5>Welcome Back !</h5>
                                                        <p class="text-white-70">Sign in to continue to Emfob.</p>
														<p style="color:red"><?php echo $message; ?></p>
                                                    </div>
                                                    <!-- Form-->


                                                    <div class="card p-4 shadow-lg fade-in active" id="login-card"
                                                    
                                                        style="max-width: 400px; width: 100%;">
                                                        <!-- Login Form -->
                                                        <form action="" method="POST">
                                                            <!-- Role Selection (2 rows of 2 buttons) -->
                                                            <div class="mb-3">
                                                                <label for="userType" class="form-label">User
                                                                    Type</label>
                                                                <select name="user_type" id="userType"
                                                                    class="form-select" required>
                                                                    <option value="" disabled selected>Select User Type
                                                                    </option>
																	<?php foreach($userTypes as $key => $val){ ?>
																	 <option value="<?php echo $val['users_types_id'] ?>"><?php echo $val['users_types_name'] ?></option>
																	<?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email / Phone
                                                                    Number <span class="text-danger">*</span></label>
                                                                <input name="email" type="text" class="form-control"
                                                                    id="email" placeholder="Enter Email / Phone number"
                                                                    required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control"
                                                                        name="password" id="password"
                                                                        placeholder="Please enter your Password"
                                                                        required>
                                                                    <button class="btn btn-outline-secondary"
                                                                        type="button" id="togglePassword">
                                                                        <i class="bi bi-eye"></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <!-- Remember Me and Forgot Password -->
                                                            <div
                                                                class="d-flex justify-content-between align-items-center mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" name="rememberMe" type="checkbox"
                                                                        id="rememberMe">
                                                                    <label class="form-check-label"
                                                                        for="rememberMe">Remember me</label>
                                                                </div>
                                                                <a href="<?php echo BASE_URL; ?>forgot-password.php" class="text-decoration-none">Forgot
                                                                    password?</a>
                                                            </div>

                                                            <!-- Login Button -->
                                                            <div class="d-grid">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Login</button>
                                                            </div>
                                                            <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

                                                        </form>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <p class="mb-0">Don't have an account ? <a href="sign-up.php"
                                                                class="fw-medium text-white text-decoration-underline">
                                                                Sign Up </a></p>
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
                <!-- END SIGN-IN -->

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

    <script src="assets/js/pages/sign-in.js">

    </script>

</body>

</html>