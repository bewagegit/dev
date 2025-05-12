<?php 
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");
$title = 'Dashboard | Emfob';
?>
<!doctype html>
<?php
include_once("dashboard-header.php"); ?>
<style>
    /* Minimal custom styling */
    .print-btn {
        margin-top: 20px;
    }

    @media print {
        .print-btn {
            display: none;
        }
    }

    .course-txt {
        padding-left: 15px;
    }
    .trending-logo{
        width: 100px;
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
                        <h4 class="mb-sm-0">Career Roadmap</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                <li class="breadcrumb-item active">Starter page</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="container my-5">
                <div class="text-center mb-4">
                    <button onclick="window.print()" class="btn btn-primary print-btn">
                        <i class="fas fa-print"></i> Print Roadmap
                    </button>
                </div>

                <!-- Career Goal Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-briefcase"></i> Career Goal</h5>
                        <p><strong>Goal:</strong> Full Stack Developer</p>
                        <p><strong>Current Skill Level:</strong> Intermediate</p>
                        <p><strong>Skills:</strong> HTML, CSS, JavaScript, Basic PHP</p>
                    </div>
                </div>

                <!-- Roadmap Steps Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-map-signs"></i> Roadmap Steps</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Step 1: Master Frontend Frameworks (Bootstrap, React)</li>
                            <li class="list-group-item">Step 2: Deepen your PHP skills and learn MySQL</li>
                            <li class="list-group-item">Step 3: Build full-stack projects with front and backend
                                integration</li>
                            <li class="list-group-item">Step 4: Apply for internships to gain practical experience</li>
                        </ul>
                    </div>
                </div>

                <!-- Recommended Courses Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Recommended Courses</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center">
                                <img src="https://placehold.co/100" alt="Course" class="rounded mr-3">
                                <div class="course-txt">
                                    <strong>Full-Stack Web Development with React and Node.js</strong>
                                    <p class="mb-0 text-muted">Platform: Coursera</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <img src="https://placehold.co/100" alt="Course" class="rounded mr-3">
                                <div class="course-txt">
                                    <strong>Advanced PHP Programming</strong>
                                    <p class="mb-0 text-muted">Platform: Udemy</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <img src="https://placehold.co/100" alt="Course" class="rounded mr-3">
                                <div class="course-txt">
                                    <strong>MySQL Database Management and Optimization</strong>
                                    <p class="mb-0 text-muted">Platform: LinkedIn Learning</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Trending Technologies Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-chart-line"></i> Trending Technologies</h5>
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <img src="https://www.linkfactory.dk/sites/default/files/2020-12/React.png" alt="ReactJS" class="img-fluid rounded mb-2 trending-logo">
                                <h4><strong>ReactJS</strong></h4>
                            </div>
                            <div class="col-md-2 text-center">
                                <img src="https://www.litespeedtech.com/images/icons/nodejs.png" alt="NodeJS" class="img-fluid rounded mb-2 trending-logo">
                                <h4><strong>NodeJS</strong></h4>
                            </div>
                            <div class="col-md-2 text-center">
                                <img src="https://leaherb.com/wp-content/uploads/docker-logo-blue.png" alt="Docker" class="img-fluid rounded mb-2 trending-logo" >
                                <h4><strong>Docker</strong></h4>
                            </div>
                            <div class="col-md-2 text-center">
                                <img src="https://pngimg.com/d/php_PNG29.png" alt="Docker" class="img-fluid rounded mb-2 trending-logo">
                                <h4><strong>PHP</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Suggested Job Types Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-briefcase"></i> Suggested Job Types</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Junior Web Developer
                                <a href="#" class="btn btn-sm btn-primary">Apply Now</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Full Stack Developer Intern
                                <a href="#" class="btn btn-sm btn-primary">Apply Now</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                PHP Developer
                                <a href="#" class="btn btn-sm btn-primary">Apply Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <script>
                // Placeholder function to simulate roadmap generation
                function generateRoadmap() {
                    document.getElementById("careerGoalDisplay").innerText = "Full Stack Developer";
                }

                // Automatically generate roadmap content (for demo purposes)
                generateRoadmap();
            </script>



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
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="http://Emfob.com/"
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
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/node-waves/waves.min.js"></script>

<script src="<?php echo BASE_URL_ADMIN; ?>assets/js/app.js"></script>

</body>

</html>