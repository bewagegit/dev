<!doctype html>
<?php include "header.php" ?>
<style>
    .category-btn {
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .course-card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .course-card:hover {
        transform: translateY(-5px);
    }

    .course-thumbnail {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .course-info {
        padding: 15px;
    }

    .action-buttons {
        display: flex;
        justify-content: space-between;
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
                        <h4 class="mb-sm-0">Courses</h4>

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
            <div class="container mt-5">
                <h2 class="text-center mb-4">Explore Courses</h2>

                <!-- Category Section -->
                <div class="d-flex flex-wrap justify-content-center mb-4">
                    <button class="btn btn-outline-primary category-btn" onclick="filterCourses('all')">All</button>
                    <button class="btn btn-outline-secondary category-btn" onclick="filterCourses('web')">Web
                        Development</button>
                    <button class="btn btn-outline-success category-btn" onclick="filterCourses('data')">Data
                        Science</button>
                    <button class="btn btn-outline-warning category-btn" onclick="filterCourses('ai')">Artificial
                        Intelligence</button>
                    <button class="btn btn-outline-info category-btn" onclick="filterCourses('marketing')">Digital
                        Marketing</button>
                </div>

                <!-- Course List -->
                <div class="row" id="courseList">
                    <!-- Web Development Course 1 -->
                    <div class="col-md-4 mb-4 course-item" data-category="web">
                        <div class="course-card">
                            <img src="https://www.pankajkumarseo.com/wp-content/uploads/2022/06/Web-Development-Training-Course-Delhi.jpg"
                                alt="Web Development Course" class="course-thumbnail">
                            <div class="course-info">
                                <h5>Introduction to Web Development</h5>
                                <p class="text-muted">Learn HTML, CSS, and JavaScript to build stunning websites.
                                </p>
                                <div class="action-buttons">
                                    <button class="btn btn-primary btn-sm">Enroll Now</button>
                                    <button class="btn btn-outline-secondary btn-sm">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Web Development Course 2 -->
                    <div class="col-md-4 mb-4 course-item" data-category="web">
                        <div class="course-card">
                            <img src="https://i0.wp.com/www.institutedata.com/wp-content/uploads/2024/04/Levelling-Up-Delving-into-Advanced-JavaScript-Techniques.png?fit=940%2C470&ssl=1"
                                alt="Web Development Course" class="course-thumbnail">
                            <div class="course-info">
                                <h5>Advanced JavaScript Techniques</h5>
                                <p class="text-muted">Master JavaScript and build interactive web applications.</p>
                                <div class="action-buttons">
                                    <button class="btn btn-primary btn-sm">Enroll Now</button>
                                    <button class="btn btn-outline-secondary btn-sm">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Science Course 1 -->
                    <div class="col-md-4 mb-4 course-item" data-category="data">
                        <div class="course-card">
                            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20230222183754/Data-Science-Fir-beginner.png"
                                alt="Data Science Course" class="course-thumbnail">
                            <div class="course-info">
                                <h5>Data Science for Beginners</h5>
                                <p class="text-muted">Get started with data analysis, statistics, and machine
                                    learning.</p>
                                <div class="action-buttons">
                                    <button class="btn btn-primary btn-sm">Enroll Now</button>
                                    <button class="btn btn-outline-secondary btn-sm">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Artificial Intelligence Course -->
                    <div class="col-md-4 mb-4 course-item" data-category="ai">
                        <div class="course-card">
                            <img src="https://www.simplilearn.com/ice9/app/Introduction-to-Artificial-Intelligence_360X194.jpg"
                                alt="AI Course" class="course-thumbnail">
                            <div class="course-info">
                                <h5>Artificial Intelligence Basics</h5>
                                <p class="text-muted">Explore AI concepts and build basic AI models.</p>
                                <div class="action-buttons">
                                    <button class="btn btn-primary btn-sm">Enroll Now</button>
                                    <button class="btn btn-outline-secondary btn-sm">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Digital Marketing Course -->
                    <div class="col-md-4 mb-4 course-item" data-category="marketing">
                        <div class="course-card">
                            <img src="https://media.licdn.com/dms/image/D5612AQEGi6lhmUDKNQ/article-cover_image-shrink_720_1280/0/1713018098797?e=2147483647&v=beta&t=shmVMbbgIWZ9TWoOFcr0cNNjgqqBAKKKQPrL5Hx9zc8"
                                alt="Marketing Course" class="course-thumbnail">
                            <div class="course-info">
                                <h5>Digital Marketing Essentials</h5>
                                <p class="text-muted">Learn SEO, SEM, and social media marketing to grow your
                                    business.</p>
                                <div class="action-buttons">
                                    <button class="btn btn-primary btn-sm">Enroll Now</button>
                                    <button class="btn btn-outline-secondary btn-sm">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more courses as needed -->
                </div>
            </div>


        </div>

        <script>
            // Filter courses by category
            function filterCourses(category) {
                const courses = document.querySelectorAll('.course-item');
                courses.forEach(course => {
                    if (category === 'all' || course.getAttribute('data-category') === category) {
                        course.style.display = 'block';
                    } else {
                        course.style.display = 'none';
                    }
                });
            }
        </script>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php include "footer.php" ?>

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

</body>

</html>