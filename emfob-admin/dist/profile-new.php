<!doctype html>
<?php include "header.php" ?>
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
</style>
<!--plugins-->
<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/simplebar/css/simplebar.css">
<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
<link href="assets/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet">

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
                        <h4 class="mb-sm-0">Profile page</h4>

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
             
            <!--start stepper three-->
            
            <div class="card">
                <div class="card-body">
                    <div id="stepper3" class="bs-stepper gap-4 vertical">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#test-vl-1">
                                <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
                                    <div class="bs-stepper-circle"><i class='material-icons-outlined'>perm_identity</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Personal Info</h5>
                                        <p class="mb-0 steper-sub-title">Enter Your Details</p>
                                    </div>
                                </div>
                            </div>

                            <div class="step" data-target="#test-vl-2">
                                <div class="step-trigger" role="tab" id="stepper3trigger2" aria-controls="test-vl-2">
                                    <div class="bs-stepper-circle"><i class='material-icons-outlined'>account_box</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Account Details</h5>
                                        <p class="mb-0 steper-sub-title">Setup Account Details</p>
                                    </div>
                                </div>
                            </div>

                            <div class="step" data-target="#test-vl-3">
                                <div class="step-trigger" role="tab" id="stepper3trigger3" aria-controls="test-vl-3">
                                    <div class="bs-stepper-circle"><i class='material-icons-outlined'>auto_stories</i>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Education</h5>
                                        <p class="mb-0 steper-sub-title">Education Details</p>
                                    </div>
                                </div>
                            </div>

                            <div class="step" data-target="#test-vl-4">
                                <div class="step-trigger" role="tab" id="stepper3trigger4" aria-controls="test-vl-4">
                                    <div class="bs-stepper-circle"><i class='material-icons-outlined'>more</i></div>
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Work Experience</h5>
                                        <p class="mb-0 steper-sub-title">Experience Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bs-stepper-content">
                            <form onSubmit="return false">
                                <div id="test-vl-1" class="bs-stepper-pane content fade"
                                    aria-labelledby="stepper3trigger1">
                                    <h5 class="mb-1">Your Personal Information</h5>
                                    <p class="mb-4">Enter your personal information to get closer to copanies</p>

                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">E-mail Address</label>
                                            <input type="text" class="form-control" placeholder="Enter Email Address">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Country</label>
                                            <select class="form-select">
                                                <option selected>---</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Language</label>
                                            <select class="form-select">
                                                <option selected>---</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <button class="btn btn-primary px-4" onclick="stepper3.next()">Next<i
                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
                                        </div>
                                    </div><!---end row-->

                                </div>

                                <div id="test-vl-2" class="bs-stepper-pane content fade"
                                    aria-labelledby="stepper3trigger2">

                                    <h5 class="mb-1">Account Details</h5>
                                    <p class="mb-4">Enter Your Account Details.</p>

                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" placeholder="jhon@123">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">E-mail Address</label>
                                            <input type="text" class="form-control" placeholder="example@xyz.com">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" value="12345678">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" value="12345678">
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn btn-outline-secondary px-4"
                                                    onclick="stepper3.previous()"><i
                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                <button class="btn btn-primary px-4" onclick="stepper3.next()">Next<i
                                                        class='bx bx-right-arrow-alt ms-2'></i></button>
                                            </div>
                                        </div>
                                    </div><!---end row-->

                                </div>

                                <div id="test-vl-3" class="bs-stepper-pane content fade"
                                    aria-labelledby="stepper3trigger3">
                                    <h5 class="mb-1">Your Education Information</h5>
                                    <p class="mb-4">Inform companies about your education life</p>

                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">School Name</label>
                                            <input type="text" class="form-control" placeholder="School Name">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Board Name</label>
                                            <input type="text" class="form-control" placeholder="Board Name">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">University Name</label>
                                            <input type="text" class="form-control" placeholder="University Name">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Course Name</label>
                                            <select class="form-select">
                                                <option selected>---</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn btn-outline-secondary px-4"
                                                    onclick="stepper3.previous()"><i
                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                <button class="btn btn-primary px-4" onclick="stepper3.next()">Next<i
                                                        class='bx bx-right-arrow-alt ms-2'></i></button>
                                            </div>
                                        </div>
                                    </div><!---end row-->

                                </div>

                                <div id="test-vl-4" class="bs-stepper-pane content fade"
                                    aria-labelledby="stepper3trigger4">
                                    <h5 class="mb-1">Work Experiences</h5>
                                    <p class="mb-4">Can you talk about your past work experience?</p>

                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Experience 1</label>
                                            <input type="text" class="form-control" placeholder="Experience 1">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Position</label>
                                            <input type="text" class="form-control" placeholder="Position">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Experience 2</label>
                                            <input type="text" class="form-control" placeholder="Experience 2">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Position</label>
                                            <input type="text" class="form-control" placeholder="Position">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Experience 3</label>
                                            <input type="text" class="form-control" placeholder="Experience 3">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label">Position</label>
                                            <input type="text" class="form-control" placeholder="Position">
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn btn-primary px-4" onclick="stepper3.previous()"><i
                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                <button class="btn btn-success px-4"
                                                    onclick="stepper3.next()">Submit</button>
                                            </div>
                                        </div>
                                    </div><!---end row-->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end stepper three-->




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


<!-- Rightbar Sidebar -->
<div class="offcanvas offcanvas-end" id="offcanvas-rightsidabar">
    <div class="card h-100 rounded-0" data-simplebar="init">
        <div class="card-header bg-light">
            <h6 class="card-title text-uppercase">Activities</h6>
            <div class="card-addon">
                <button class="btn btn-label-danger" data-bs-dismiss="offcanvas">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <h3 class="card-title">Company summary</h3>
                <div class="border rounded p-2">
                    <p class="text-muted mb-2">Server Load</p>
                    <h4 class="fs-16 mb-2">489</h4>
                    <div class="progress progress-sm" style="height:4px;">
                        <div class="progress-bar bg-success" style="width: 49.4%"></div>
                    </div>
                    <p class="text-muted mb-0 mt-1">49.4% <span>Avg</span></p>
                </div>
                <div class="border rounded p-2">
                    <p class="text-muted mb-2">Members online</p>
                    <h4 class="fs-16 mb-2">3,450</h4>
                    <div class="progress progress-sm" style="height:4px;">
                        <div class="progress-bar bg-danger" style="width: 34.6%"></div>
                    </div>
                    <p class="text-muted mb-0 mt-1">34.6% <span>Avg</span></p>
                </div>
                <div class="border rounded p-2">
                    <p class="text-muted mb-2">Today's revenue</p>
                    <h4 class="fs-16 mb-2">$18,390</h4>
                    <div class="progress progress-sm" style="height:4px;">
                        <div class="progress-bar bg-warning" style="width: 20%"></div>
                    </div>
                    <p class="text-muted mb-0 mt-1">$37,578 <span>Avg</span></p>
                </div>
                <div class="border rounded p-2">
                    <p class="text-muted mb-2">Expected profit</p>
                    <h4 class="fs-16 mb-2">$23,461</h4>
                    <div class="progress progress-sm" style="height:4px;">
                        <div class="progress-bar bg-info" style="width: 60%"></div>
                    </div>
                    <p class="text-muted mb-0 mt-1">$23,461 <span>Avg</span></p>
                </div>
            </div>

            <div class="mt-4">
                <h3 class="card-title">Latest log</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-dot text-primary"></i></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">12 new users registered</p>
                                <span class="text-muted">Just now</span>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-dot text-success"></i></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">System shutdown <span class="badge badge-label-success">pending</span>
                                </p>
                                <span class="text-muted">2 mins</span>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-dot text-primary"></i></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">New invoice received</p>
                                <span class="text-muted">3 mins</span>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-dot text-danger"></i></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">New order received <span class="badge badge-label-danger">urgent</span>
                                </p>
                                <span class="text-muted">10 mins</span>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-dot text-warning"></i></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Production server down</p>
                                <span class="text-muted">1 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-dot text-info"></i></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">System error <a href="#">check</a></p>
                                <span class="text-muted">2 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-dot text-secondary"></i></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">DB overloaded 80%</p>
                                <span class="text-muted">5 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-pin"><i class="marker marker-dot text-success"></i></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Production server up</p>
                                <span class="text-muted">6 hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h3 class="card-title">Upcoming activities</h3>
                <div class="timeline timeline-timed">
                    <div class="timeline-item">
                        <span class="timeline-time">10:00</span>
                        <div class="timeline-pin"><i class="marker marker-circle text-primary"></i></div>
                        <div class="timeline-content">
                            <div>
                                <span>Meeting with</span>
                                <div class="avatar-group ms-2">
                                    <div class="avatar avatar-circle">
                                        <img src="assets/images/users/avatar-1.png" alt="Avatar image"
                                            class="avatar-2xs" />
                                    </div>
                                    <div class="avatar avatar-circle">
                                        <img src="assets/images/users/avatar-2.png" alt="Avatar image"
                                            class="avatar-2xs" />
                                    </div>
                                    <div class="avatar avatar-circle">
                                        <img src="assets/images/users/avatar-3.png" alt="Avatar image"
                                            class="avatar-2xs" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-time">12:45</span>
                        <div class="timeline-pin"><i class="marker marker-circle text-warning"></i></div>
                        <div class="timeline-content">
                            <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore
                                et dolore magna elit enim at minim veniam quis nostrud</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-time">14:00</span>
                        <div class="timeline-pin"><i class="marker marker-circle text-danger"></i></div>
                        <div class="timeline-content">
                            <p class="mb-0">Received a new feedback on <a href="#">GoFinance</a> App product.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-time">15:20</span>
                        <div class="timeline-pin"><i class="marker marker-circle text-success"></i></div>
                        <div class="timeline-content">
                            <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore
                                et dolore magna.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-time">17:00</span>
                        <div class="timeline-pin"><i class="marker marker-circle text-info"></i></div>
                        <div class="timeline-content">
                            <p class="mb-0">Make Deposit <a href="#">USD 700</a> o ESL.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card-->
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<script src="assets/js/app.js"></script>

<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/metismenu/metisMenu.min.js"></script>
<script src="assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="assets/plugins/bs-stepper/js/main.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>