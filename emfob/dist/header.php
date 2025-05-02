<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>
        <?php
        // Get the current file name dynamically
        $current_page = basename($_SERVER['PHP_SELF'], ".php");

        // Convert page name to title format
        $title = ucfirst($current_page) . " | Emfob";

        // Display the title, defaulting to Emfob if page is unknown
        echo isset($page_title) ? $page_title : $title;
        ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Choise Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" />
    <!--Custom Css-->
    <style>
        @media (max-width: 991.98px) {
            .navbar .navbar-nav .nav-item .nav-link {
                color: #bdbcbc;
            }
        }
    </style>

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

        <!-- START TOP-BAR -->
        <div class="top-bar">
            <div class="container-fluid custom-container">
                <div class="row g-0 align-items-center">
                    <div class="col-md-7">
                        <ul class="list-inline mb-0 text-center text-md-start">
                            <li class="list-inline-item">
                                <p class="fs-13 mb-0"> <i class="mdi mdi-map-marker"></i> Our Location: <a
                                        href="javascript:void(0)" class="text-dark">Chennai</a></p>
                            </li>
                            <li class="list-inline-item">
                                <ul class="topbar-social-menu list-inline mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-facebook-messenger-alt"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-envelope"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="social-link"><i
                                                class="uil uil-twitter-alt"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--end col-->
                    <div class="col-md-5">
                        <ul class="list-inline mb-0 text-center text-md-end">
                            <li class="list-inline-item py-2 me-2 align-middle">
                                <a href="#signupModal" class="text-dark fw-medium fs-13" data-bs-toggle="modal"><i
                                        class="uil uil-lock"></i>
                                    Sign Up</a>
                            </li>
                            <li class="list-inline-item align-middle">
                                <div class="dropdown d-inline-block language-switch">
                                    <button type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language"
                                            height="16" />
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                            data-lang="eng">
                                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1"
                                                height="12" />
                                            <span class="align-middle">English</span>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                            data-lang="sp">
                                            <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1"
                                                height="12" />
                                            <span class="align-middle">Spanish</span>
                                        </a>
                                        <!-- item-->

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!-- END TOP-BAR -->

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
            <div class="container-fluid custom-container">
                <a class="navbar-brand text-dark fw-bold me-auto" href="index.php">
                    <img src="assets/images/logo-dark.png" height="33" alt="" class="logo-dark" />
                    <img src="assets/images/logo-light.png" height="22" alt="" class="logo-light" />
                </a>
                <div>
                    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" id="homedrop" role="button">
                                Home
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" id="jobsdropdown" role="button">
                                About us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php" id="jobsdropdown" role="button">
                                Services
                            </a>
                        </li>

                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="javascript:void(0)" id="pagesdoropdown" role="button"
                                data-bs-toggle="dropdown">
                                Job Search
                                <div class="arrow-down"></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="productdropdown">
                                <li><a class="dropdown-item" href="job-list.php">Job List</a></li>
                                <li><a class="dropdown-item" href="company-list.php">Company List</a></li>
                            </ul>


                        </li><!--end dropdown-->
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php" id="productdropdown" role="button"
                                aria-expanded="false">
                                Blog

                            </a>
                        </li><!--end dropdown-->
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contact</a>
                        </li>
                    </ul><!--end navbar-nav-->
                </div>
                <!--end navabar-collapse-->
                <ul class="header-menu list-inline d-flex align-items-center mb-0">
                    <li class="list-inline-item dropdown me-4">
                        <a href="javascript:void(0)" class="header-item noti-icon position-relative" id="notification"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-bell fs-22"></i>
                            <div class="count position-absolute">3</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end p-0"
                            aria-labelledby="notification">
                            <div class="notification-header border-bottom bg-light">
                                <h6 class="mb-1"> Notification </h6>
                                <p class="text-muted fs-13 mb-0">You have 4 unread Notification</p>
                            </div>
                            <div class="notification-wrapper dropdown-scroll">
                                <a href="javascript:void(0)" class="text-dark notification-item d-block active">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs bg-primary text-white rounded-circle text-center">
                                                <i class="uil uil-user-check"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">22 verified registrations</h6>
                                            <p class="mb-0 fs-12 text-muted"><i class="mdi mdi-clock-outline"></i>
                                                <span>3 min
                                                    ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/user/img-02.jpg" class="rounded-circle avatar-xs"
                                                alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">James Lemire</h6>
                                            <p class="text-muted fs-12 mb-0"><i class="mdi mdi-clock-outline"></i>
                                                <span>15 min
                                                    ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/featured-job/img-04.png"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">Applications has been approved</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>45 min
                                                    ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/user/img-01.jpg" class="rounded-circle avatar-xs"
                                                alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">Kevin Stewart</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>1 hour
                                                    ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                                <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/featured-job/img-01.png"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-15">Creative Agency</h6>
                                            <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                                <span>2 hour
                                                    ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a><!--end notification-item-->
                            </div><!--end notification-wrapper-->
                            <div class="notification-footer border-top text-center">
                                <a class="primary-link fs-13" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <a href="sign-in.php" class="btn btn-primary">Login / Sign up</a>

                </ul><!--end header-menu-->
            </div>
            <!--end container-->
        </nav>
        <!-- Navbar End -->