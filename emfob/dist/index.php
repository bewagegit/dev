<!doctype html>
<?php
include "header.php"
?>


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
                                <input type="text" class="form-control" id="usernameInput"
                                    placeholder="Enter your username">
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
                                <div class="form-check"><input class="form-check-input" type="checkbox"
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">I agree to the <a
                                            href="javascript:void(0)"
                                            class="text-primary form-text text-decoration-underline">Terms and
                                            conditions</a></label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">
                            <p class="mb-0">Already a member ? <a href="sign-in.php"
                                    class="form-text text-primary text-decoration-underline"> Sign-in </a></p>
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

        <!-- START HOME -->
        <?php include "sections/search-job.php"?>
        <!-- End Home -->

        <!-- START SHAPE -->
        <div class="position-relative">
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 220">
                    <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                        <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z" fill="rgba(255, 255, 255, 1)">
                        </path>
                    </g>
                    <defs>
                        <mask id="SvgjsMask1004">
                            <rect width="1440" height="250" fill="#ffffff"></rect>
                        </mask>
                    </defs>
                </svg>
            </div>
        </div>
        <!-- END SHAPE -->

        <!-- START CATEGORY -->
        <?php include "sections/job-category.php"?>
        <!-- END CATEGORY -->

        <!-- START JOB-LIST -->
        <?php include "sections/job-list2.php"?>
        <!-- END JOB-LIST -->

        <!-- START PROCESS -->
        <?php include "sections/how-it-works.php"?>

        <!-- END PROCESS -->

        <!--START CTA-->
        <?php include "sections/browse-latest-jobs.php"?>
        <!--END CTA-->

        <!-- START TESTIMONIAL -->
        <?php include "sections/testimonals.php"?>

        <!-- END TESTIMONIAL -->

        <!-- START BLOG -->
        <?php include "sections/career-tips.php"?>

        <!-- END BLOG -->

        <!-- START CLIENT -->
        <?php include "sections/clients.php"?>

        <!-- END CLIENT -->

        <!-- START APPLY MODAL 
        <div class="modal fade" id="applyNow" tabindex="-1" aria-labelledby="applyNow" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div class="text-center mb-4">
                            <h5 class="modal-title" id="staticBackdropLabel">Apply For This Job</h5>
                        </div>
                        <div class="position-absolute end-0 top-0 p-3">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="nameControlInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameControlInput" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="emailControlInput2" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailControlInput2"
                                placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="messageControlTextarea" class="form-label">Message</label>
                            <textarea class="form-control" id="messageControlTextarea" rows="4"
                                placeholder="Enter your message"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="inputGroupFile01">Resume Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Application</button>
                    </div>
                </div>
            </div>
        </div> END APPLY MODAL -->
    </div>
    <!-- End Page-content -->

    <!-- START SUBSCRIBE -->
    <?php include "sections/news-letter.php"?>
    <!-- END SUBSCRIBE -->

    <?php include "footer.php" ?>

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
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


<!-- Choice Js -->
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

<!-- Swiper Js -->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- Job-list Init Js -->
<script src="assets/js/pages/job-list.init.js"></script>

<!-- Switcher Js -->
<script src="assets/js/pages/switcher.init.js"></script>

<script src="assets/js/pages/index.init.js"></script>

<script src="assets/js/app.js"></script>

</body>
</html>