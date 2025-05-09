<!doctype html>
<?php include "header.php"?>


            <!-- START SIGN-UP MODAL -->
            <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-5">
                            <div class="position-absolute end-0 top-0 p-3">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="auth-content">
                                <div class="w-100">
                                    <div class="text-center mb-4">
                                        <h5>Sign Up</h5>
                                        <p class="text-muted">Sign Up and get access to all the features of Emfob</p>
                                    </div>
                                    <form action="#" class="auth-form">
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="usernameInput" placeholder="Enter your username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-primary form-text text-decoration-underline">Terms and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Already a member ? <a href="sign-in.php" class="form-text text-primary text-decoration-underline"> Sign-in </a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end modal-body-->
                    </div><!--end modal-content-->
                </div><!--end modal-dialog-->
            </div>
            <!-- END SIGN-UP MODAL -->

            
            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
                    <section class="page-title-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white">
                                        <h3 class="mb-4">Contact</h3>
                                        <div class="page-next">
                                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                                <ol class="breadcrumb justify-content-center">
                                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page"> Contact </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- end home -->

                    <!-- START SHAPE -->
                    <div class="position-relative" style="z-index: 1">
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                                <path fill="" fill-opacity="1"
                                    d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->


                    <!-- START CONTACT-PAGE -->
                    <section class="section">
                        <div class="container">
                            <div class="row align-items-center mt-5">
                                <div class="col-lg-6">
                                    <div class="section-title mt-4 mt-lg-0">
                                        <h3 class="title">Get in touch</h3>
                                        <p class="text-muted">Start working with Emfob that can provide everything you need to generate
                                            awareness, drive traffic, connect.</p>
                                        <form method="post" onsubmit="return validateForm()" class="contact-form mt-4" name="myForm" id="myForm">
                                            <span id="error-msg"></span>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="nameInput" class="form-label">Name</label>
                                                        <input type="text" name="name" id="name" class="form-control"
                                                            placeholder="Enter your name">
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="emaiol" name="email"
                                                            placeholder="Enter your email">
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="subjectInput" class="form-label">Subject</label>
                                                        <input type="text" class="form-control" id="subjectInput" name="subject" id="subject"
                                                            placeholder="Enter your subject">
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="meassageInput" class="form-label">Your Message</label>
                                                        <textarea class="form-control" id="meassageInput" placeholder="Enter your message" name="comments" id="comments" rows="3"></textarea>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="text-end">
                                                <button type="submit" id="submit" name="submit" class="btn btn-primary"> Send Message <i class="uil uil-message ms-1"></i></button>
                                            </div>
                                        </form><!--end form-->
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-5 ms-auto order-first order-lg-last">
                                    <div class="text-center">
                                        <img src="assets/images/contact.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="mt-4 pt-3">
                                        <div class="d-flex text-muted align-items-center mt-2">
                                            <div class="flex-shrink-0 fs-22 text-primary">
                                                <i class="uil uil-map-marker"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0">2453 Clinton StreetLittle Rock, California, USA</p>
                                            </div>
                                        </div>
                                        <div class="d-flex text-muted align-items-center mt-2">
                                            <div class="flex-shrink-0 fs-22 text-primary">
                                                <i class="uil uil-envelope"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0">contactus@Emfob.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex text-muted align-items-center mt-2">
                                            <div class="flex-shrink-0 fs-22 text-primary">
                                                <i class="uil uil-phone-alt"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <p class="mb-0">(+245) 223 1245</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- START CONTACT-PAGE -->

                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509157.364974411!2d-123.79641389801948!3d37.193115265681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1628684675253!5m2!1sen!2sin" height="350" style="border:0;width: 100%;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
                <!-- End Page-content -->

                <!-- START SUBSCRIBE -->
                <section class="bg-subscribe">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center text-lg-start">
                                    <h4 class="text-white">Get New Jobs Notification!</h4>
                                    <p class="text-white-50 mb-0">Subscribe & get all related jobs notification.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4 mt-lg-0">
                                    <form class="subscribe-form" action="#">
                                        <div class="input-group justify-content-center justify-content-lg-end">
                                            <input type="text" class="form-control" id="subscribe" placeholder="Enter your email">
                                            <button class="btn btn-primary" type="button" id="subscribebtn">Subscribe</button>
                                        </div>
                                    </form><!--end form-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                    <div class="email-img d-none d-lg-block">
                        <img src="assets/images/subscribe.png" alt="" class="img-fluid">
                    </div>
                </section>
                <!-- END SUBSCRIBE -->

                <?php include "footer.php"?>


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
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

        <!-- Contact Js -->
        <script src="assets/js/pages/contact.js"></script>

        <!-- App Js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>