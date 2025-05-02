<!doctype html>
<?php include "header.php" ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css"
    rel="stylesheet">

<style>
    /* Custom styles */
    .profile-card {
        border: 1px solid #e9e9e9;
        border-radius: 10px;
        padding: 20px;
        background-color: #fff;
        position: relative;
    }

    ul {
        list-style-type: none;
    }

    .profile-card .thumbnail-container {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
    }

    .thumbnail-container img {
        width: 100%;
        height: auto;
    }

    .play-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2rem;
        color: rgba(255, 255, 255, 0.8);
    }

    .profile-info {
        display: flex;
        align-items: center;
        margin-top: 15px;
    }

    .verified-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
    }

    .profile-info img {
        border-radius: 50%;
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    .filters,
    .sort-bar {
        background-color: #f8f8f8;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .session-info {
        color: #6c757d;
        font-size: 0.9rem;
    }

    .session-info i {
        margin-right: 5px;
    }

    .tips-section {
        background-color: #fdfcf9;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e9e9e9;
    }

    .tips-section img {
        border-radius: 10px;
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
                        <h4 class="mb-sm-0">Document Management</h4>

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
            <div class="container py-4">
                <!-- Page Title and Subtitle -->
                <h3 class="text-center">Applied Candidates</h3>
                <p class="text-center text-muted">Review the qualifications, experience, and skills of potential
                    candidates.</p>

                <!-- Main Content Row -->
                <div class="row">
                    <!-- Main Column with Tutor Profiles -->
                    <div class="col-md-8">
                        <!-- Filter/Search Bar -->
                        <div class="filters d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-wrap gap-3">
                                <select class="form-select" style="width: 150px;">
                                    <option selected>Position Applied</option>
                                    <option>Software Engineer</option>
                                    <option>Product Manager</option>
                                </select>
                                <select class="form-select" style="width: 150px;">
                                    <option selected>Location</option>
                                    <option>USA</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="d-flex gap-3">
                                <input type="text" class="form-control" placeholder="Search by keyword">
                                <select class="form-select" style="width: 120px;">
                                    <option selected>Sort by</option>
                                    <option>Experience</option>
                                    <option>Skills</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tutor Profile Card -->
                        <div class="profile-card mb-4 p-3">
                            <!-- Profile Verified Badge at Top-Right Corner -->
                            <span class="badge bg-success verified-badge">Profile Verified</span>

                            <div class="row">
                                <!-- Thumbnail and Buttons -->
                                <div class="col-md-3">
                                    <div class="thumbnail-container" data-bs-toggle="modal"
                                        data-bs-target="#videoModal">
                                        <img src="assets/images/vid_resu_placeholder.png" alt="Custom Thumbnail">
                                        <div class="play-overlay">
                                            <i class="bi bi-play-circle-fill"></i>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-3">Shortlist Candidate</button>
                                    <button class="btn btn-outline-secondary w-100 mt-2">Send message</button>
                                </div>

                                <!-- Profile Details -->
                                <div class="col-md-9">
                                    <div class="profile-info">
                                        <img src="https://gohire.io/hubfs/GoHire_May2022/Images/dru-dalton-realthread-sq-1.jpg"
                                            alt="Profile Picture">
                                        <div>
                                            <h5 class="mb-0">Cynthia Hunter <span class="text-success"><i
                                                        class="bi bi-check-circle"></i></span></h5>
                                            <p class="text-muted mb-0">Empowering Students with Customized Learning
                                                Support</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div>
                                            <span class="rating">★ 4.8/5.0</span> (12 endorsements) <br>
                                            <span class="session-info"><i class="bi bi-briefcase-fill"></i> Last
                                                Position: Senior Developer at XYZ Corp</span> <br>
                                            <span class="session-info"><i class="bi bi-geo-alt-fill"></i> Location: San
                                                Francisco, CA</span>
                                        </div>
                                    </div>
                                    <p class="mt-2">Hi! I am Cynthia Hunter, a dedicated and experienced tutor with a
                                        passion for helping students excel in their academic pursuits...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tips Section Column -->
                    <div class="col-md-4">
                        <div class="tips-section">
                            <div class="thumbnail-container">
                                <img src="https://placehold.co/300x150" alt="Tips Thumbnail" class="img-fluid">
                            </div>
                            <h6 class="mt-3">Tips to find the best Tutor</h6>
                            <p>Choosing the right tutor online requires careful consideration. Here are tips to help you
                                make an informed decision.</p>
                            <ul>
                                <li><i class="bi bi-arrow-right-square-fill"></i> </i>Filter your requirements</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> </i>Check qualifications and
                                    experience</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> </i>Read reviews and ratings</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> </i>Evaluate communication skills</li>
                                <li><i class="bi bi-arrow-right-square-fill"></i> </i>Check availability and flexibility
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Modal for Video -->
                <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="ratio ratio-16x9">
                                    <iframe id="videoIframe" src="https://www.youtube.com/embed/gyFaBZ_BQhc?autoplay=1"
                                        title="YouTube video" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






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

<script>
    // JavaScript to set the video URL when the modal is shown and stop it when closed
    const videoModal = document.getElementById('videoModal');
    const videoIframe = document.getElementById('videoIframe');
    const videoSrc = 'https://www.youtube.com/embed/gyFaBZ_BQhc?autoplay=1';

    videoModal.addEventListener('show.bs.modal', () => {
        videoIframe.src = videoSrc;
    });

    videoModal.addEventListener('hide.bs.modal', () => {
        videoIframe.src = '';
    });
</script>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>