<!doctype html>
<?php include "header.php" ?>

<style>
    body {
        background-color: #f8f9fa;
    }

    #searchInput {}

    /* Styling for the Job Cards */
    .job-card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #fff;
        margin-bottom: 10px;
        margin-top: 10px;
        display: flex;
        align-items: center;
        padding: 15px;
    }

    .job-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Flexbox layout to align the logo and content */
    .job-card .logo {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
        border-radius: 8px;
    }

    .job-card-content {
        flex-grow: 1;
    }

    .job-card h5 {
        font-weight: bold;
        margin: 0;
        font-size: 1.2rem;
    }

    .job-card p {
        margin: 5px 0;
        color: #6c757d;
    }

    .job-card small {
        font-size: 0.9rem;
        color: #adb5bd;
    }

    .job-card .btn {
        font-size: 0.875rem;
        padding: 5px 12px;
        text-align: center;
    }

    /* Filter section */
    .filter-section {
        background-color: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);

    }

    .filter-section h5 {
        font-weight: 600;
    }

    .form-group label {
        font-weight: 800;
    }

    .form-group select,
    .form-group input {
        border-radius: 4px;
    }

    @media (max-width: 768px) {
        .job-card {
            flex-direction: column;
            text-align: center;
        }

        .job-card img {
            margin-bottom: 15px;
        }
    }

    /* Card layout styling */
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #fff;
        margin-bottom: 20px;
    }

    .card-body {
        padding: 20px;
    }

    .pagination {
        margin-top: 20px;
    }

    .pagination .page-link {
        border-radius: 50%;
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
                        <h4 class="mb-sm-0">Job Applications</h4>

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
            <div class="row">
                <!-- Left Side - Search and Filters -->
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <!-- // content to display in card //  -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-icon">
                                        <i class="fas fa-address-card fs-14 text-muted"></i>
                                    </div>
                                    <h4 class="card-title mb-0">Job Data</h4>
                                    <div class="dropdown card-addon">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-sidebar"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                                <div>
                                                    <p class="text-muted text-truncate mb-2">Jobs Applied</p>
                                                    <h5 class="mb-0">30</h5>
                                                </div>
                                                <div class="text-success float-end">
                                                    <i class="mdi mdi-menu-up"> </i>2.2%
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                                <div>
                                                    <p class="text-muted text-truncate mb-2">Pending Applications</p>
                                                    <h5 class="mb-0">5</h5>
                                                </div>
                                                <div class="text-success float-end">
                                                    <i class="mdi mdi-menu-up"> </i>2.1%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                                <div>
                                                    <p class="text-muted text-truncate mb-2">In Review</p>
                                                    <h5 class="mb-0">25</h5>
                                                </div>
                                                <div class="text-success float-end">
                                                    <i class="mdi mdi-menu-up"> </i>1.8%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="body">
                                            <div class="table">
                                                <table
                                                    class="table table-hover js-basic-example dataTable table-custom">
                                                    <thead>
                                                        <tr>
                                                            <th>Job Title</th>
                                                            <th>Date</th>
                                                            <th>Company</th>
                                                            <th>Status</th>
                                                            <th>Timeline</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Software Engineer</td>
                                                            <td>07 March, 2020</td>
                                                            <td><img src="https://static.vecteezy.com/system/resources/previews/020/500/331/original/hyundai-logo-brand-symbol-with-name-blue-design-south-korean-car-automobile-illustration-free-vector.jpg"
                                                                    style="width:50px" class="rounded width45"
                                                                    alt="paypal"></td>
                                                            <td><span class="badge badge-warning">Pending</span></td>
                                                            <td><button class="btn btn-primary">View Timeline</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>SEO Expert</td>
                                                            <td>17 Jun, 2020</td>
                                                            <td><img src="https://static.vecteezy.com/system/resources/previews/020/500/331/original/hyundai-logo-brand-symbol-with-name-blue-design-south-korean-car-automobile-illustration-free-vector.jpg"
                                                                    style="width:50px" class="rounded width45"
                                                                    alt="paypal">
                                                            </td>
                                                            <td><span class="badge badge-success">Approved</span></td>
                                                            <td><button class="btn btn-primary">View Timeline</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Project Manager</td>
                                                            <td>21 Jun, 2020</td>
                                                            <td><img src="https://static.vecteezy.com/system/resources/previews/020/500/331/original/hyundai-logo-brand-symbol-with-name-blue-design-south-korean-car-automobile-illustration-free-vector.jpg"
                                                                    style="width:50px" class="rounded width45"
                                                                    alt="paypal">
                                                            </td>
                                                            <td><span class="badge badge-success">Approved</span></td>
                                                            <td><button class="btn btn-primary">View Timeline</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>SME</td>
                                                            <td>22 July, 2020</td>
                                                            <td><img src="https://static.vecteezy.com/system/resources/previews/020/500/331/original/hyundai-logo-brand-symbol-with-name-blue-design-south-korean-car-automobile-illustration-free-vector.jpg"
                                                                    style="width:50px" class="rounded width45"
                                                                    alt="paypal"></td>
                                                            <td><span class="badge badge-warning">Pending</span></td>
                                                            <td><button class="btn btn-primary">View Timeline</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Personal Assistant</td>
                                                            <td>28 July, 2020</td>
                                                            <td><img src="https://static.vecteezy.com/system/resources/previews/020/500/331/original/hyundai-logo-brand-symbol-with-name-blue-design-south-korean-car-automobile-illustration-free-vector.jpg"
                                                                    style="width:50px" class="rounded width45"
                                                                    alt="paypal"></td>
                                                            <td><span class="badge badge-success">Approved</span></td>
                                                            <td><button class="btn btn-primary">View Timeline</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right-side Ad Section -->
                <div class="col-lg-3" style="position: sticky; top: 0;">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Buy Yamaha FZ @ Rs 9999/-</h5>
                            <p class="card-text">No cost EMI. Low Down Payment</p>
                            <img src="https://img.indianautosblog.com/2018/01/Bajaj-Auto-Insurance-offer-banner.jpg"
                                class="img-fluid mb-3" alt="Ad Image">
                            <h5 class="card-title">Need Home Loan?</h5>
                            <p class="card-text">Get SBI Home Loan @ 9.07%</p>
                            <img src="https://5.imimg.com/data5/SELLER/Default/2022/12/VE/IG/SG/18660198/sbi-home-loan-500x500.jpg"
                                class="img-fluid" alt="Ad Image">
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Main Content Ends Here -->

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

<!-- Template for Job Cards -->
<script id="jobTemplate" type="text/template">
    <div class="col-md-12">
        <div class="job-card p-3">
            <img src="{{companyLogo}}" alt="Company Logo" class="logo">
            <div class="job-card-content">
                <h5>{{jobTitle}}</h5>
                <p class="mb-0">{{companyName}} - {{location}}</p>
                <p class="text-muted mb-0">{{salary}} per month</p>
                <small class="text-muted">{{postedDate}}</small>
            </div>
            <div>
                <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
        </div>
    </div>
</script>

<!-- JavaScript (Bootstrap and jQuery) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    let currentPage = 1;
    const resultsPerPage = 10;

    function searchJobs() {
        const jobType = $('#jobType').val();
        const experienceLevel = $('#experienceLevel').val();
        const location = $('#location').val();
        const salaryRange = $('#salaryRange').val();
        const industry = $('#industry').val();
        const searchInput = $('#searchInput').val().toLowerCase();

        // Example data (replace with actual API data)
        const jobs = [
            // Add your job listings here...
            {
                jobTitle: 'Software Engineer',
                companyName: 'Tech Corp',
                location: 'New York, USA',
                salary: '50,000',
                companyLogo: 'https://static.vecteezy.com/system/resources/previews/020/500/331/original/hyundai-logo-brand-symbol-with-name-blue-design-south-korean-car-automobile-illustration-free-vector.jpg',
                postedDate: '2 days ago',
                jobType: 'Full-time',
                experienceLevel: 'Mid-level',
                industry: 'Tech'
            },
            {
                jobTitle: 'Marketing Specialist',
                companyName: 'Market Guru',
                location: 'San Francisco, USA',
                salary: '40,000',
                companyLogo: 'https://cdn.iconscout.com/icon/free/png-256/free-toshiba-logo-icon-download-in-svg-png-gif-file-formats--company-brand-world-logos-vol-7-pack-icons-282829.png?f=webp',
                postedDate: '1 week ago',
                jobType: 'Part-time',
                experienceLevel: 'Entry-level',
                industry: 'Marketing'
            },
            {
                jobTitle: 'Marketing Specialist',
                companyName: 'Market Guru',
                location: 'San Francisco, USA',
                salary: '40,000',
                companyLogo: 'https://w7.pngwing.com/pngs/738/709/png-transparent-netflix-square-logo-tech-companies-thumbnail.png',
                postedDate: '1 week ago',
                jobType: 'Part-time',
                experienceLevel: 'Entry-level',
                industry: 'Marketing'
            },
            {
                jobTitle: 'Marketing Specialist',
                companyName: 'Market Guru',
                location: 'San Francisco, USA',
                salary: '40,000',
                companyLogo: 'https://s3.amazonaws.com/cdn.designcrowd.com/blog/2017/April/35-Famous-Square-Logos/2_300.png',
                postedDate: '1 week ago',
                jobType: 'Part-time',
                experienceLevel: 'Entry-level',
                industry: 'Marketing'
            },
            {
                jobTitle: 'Marketing Specialist',
                companyName: 'Market Guru',
                location: 'San Francisco, USA',
                salary: '40,000',
                companyLogo: 'https://cdn.dribbble.com/userupload/3703063/file/original-74325d68b7d0808d1eb8446e098166c1.jpg?resize=752x',
                postedDate: '1 week ago',
                jobType: 'Part-time',
                experienceLevel: 'Entry-level',
                industry: 'Marketing'
            },
            {
                jobTitle: 'Marketing Specialist',
                companyName: 'Market Guru',
                location: 'San Francisco, USA',
                salary: '40,000',
                companyLogo: 'https://images.squarespace-cdn.com/content/v1/5ede2122e582b96630a4a73e/1609375996518-DZU53FYNB3FMBYB1JHG6/HP-logo+2021.jpg',
                postedDate: '1 week ago',
                jobType: 'Part-time',
                experienceLevel: 'Entry-level',
                industry: 'Marketing'
            },
            {
                jobTitle: 'Marketing Specialist',
                companyName: 'Market Guru',
                location: 'San Francisco, USA',
                salary: '40,000',
                companyLogo: 'https://www.zarla.com/images/coca-cola-logo-2400x2400-20223105.png?crop=1:1,smart&width=150&dpr=2',
                postedDate: '1 week ago',
                jobType: 'Part-time',
                experienceLevel: 'Entry-level',
                industry: 'Marketing'
            },
            {
                jobTitle: 'Marketing Specialist',
                companyName: 'Market Guru',
                location: 'San Francisco, USA',
                salary: '40,000',
                companyLogo: 'https://www.zarla.com/images/google-logo-2400x2400-20220519.png?crop=1:1,smart&width=150&dpr=2',
                postedDate: '1 week ago',
                jobType: 'Part-time',
                experienceLevel: 'Entry-level',
                industry: 'Marketing'
            },
            {
                jobTitle: 'Marketing Specialist',
                companyName: 'Market Guru',
                location: 'San Francisco, USA',
                salary: '40,000',
                companyLogo: 'https://s3.amazonaws.com/cdn.designcrowd.com/blog/100-Famous-Brand%20Logos-From-The-Most-Valuable-Companies-of-2020/mcdonalds-logo.png',
                postedDate: '1 week ago',
                jobType: 'Part-time',
                experienceLevel: 'Entry-level',
                industry: 'Marketing'
            },
            {
                jobTitle: 'Software Engineer',
                companyName: 'Tech Corp',
                location: 'New York, USA',
                salary: '50,000',
                companyLogo: 'https://assets.hongkiat.com/uploads/logo-evolution/vw-today.jpg',
                postedDate: '2 days ago',
                jobType: 'Full-time',
                experienceLevel: 'Mid-level',
                industry: 'Tech'
            },
            {
                jobTitle: 'Software Engineer',
                companyName: 'Tech Corp',
                location: 'New York, USA',
                salary: '50,000',
                companyLogo: 'https://www.zarla.com/images/apple-logo-2400x2400-20220512.png?crop=1:1,smart&width=150&dpr=2',
                postedDate: '2 days ago',
                jobType: 'Full-time',
                experienceLevel: 'Mid-level',
                industry: 'Tech'
            }
        ];

        // Filter jobs
        const filteredJobs = jobs.filter(function (job) {
            return (
                (jobType === '' || job.jobType === jobType) &&
                (experienceLevel === '' || job.experienceLevel === experienceLevel) &&
                (location === '' || job.location.toLowerCase().includes(location.toLowerCase())) &&
                (salaryRange === '' || withinSalaryRange(job.salary, salaryRange)) &&
                (industry === '' || job.industry === industry) &&
                (searchInput === '' || job.jobTitle.toLowerCase().includes(searchInput))
            );
        });

        // Paginate results
        const totalResults = filteredJobs.length;
        const totalPages = Math.ceil(totalResults / resultsPerPage);
        const paginatedJobs = filteredJobs.slice((currentPage - 1) * resultsPerPage, currentPage * resultsPerPage);

        // Clear previous results
        $('#jobResults').empty();

        // Display paginated jobs
        if (paginatedJobs.length === 0) {
            $('#jobResults').append('<p>No jobs found.</p>');
        } else {
            paginatedJobs.forEach(function (job) {
                const jobTemplate = $('#jobTemplate').html()
                    .replace('{{jobTitle}}', job.jobTitle)
                    .replace('{{companyName}}', job.companyName)
                    .replace('{{location}}', job.location)
                    .replace('{{salary}}', job.salary)
                    .replace('{{companyLogo}}', job.companyLogo)
                    .replace('{{postedDate}}', job.postedDate);

                $('#jobResults').append(jobTemplate);
            });
        }

        // Only display pagination if there are more than 10 items
        if (totalResults > resultsPerPage) {
            updatePagination(totalPages);
            $('.pagination').show();  // Show pagination
        } else {
            $('.pagination').empty().hide();  // Hide pagination if not needed
        }
    }
    function clearFilters() {
        $('#jobResults').empty();
    }

    function updatePagination(totalPages) {
        let paginationHTML = '';

        // Previous Button
        paginationHTML += `
            <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Previous</a>
            </li>
        `;

        // Page Numbers
        for (let i = 1; i <= totalPages; i++) {
            paginationHTML += `
                <li class="page-item ${i === currentPage ? 'active' : ''}">
                    <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
                </li>
            `;
        }

        // Next Button
        paginationHTML += `
            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Next</a>
            </li>
        `;

        // Render Pagination
        $('.pagination').html(paginationHTML);
    }

    function changePage(pageNumber) {
        currentPage = pageNumber;
        searchJobs();
    }

    function withinSalaryRange(salary, range) {
        const salaryValue = parseInt(salary.replace(/,/g, ''));
        if (range === '20000-40000') return salaryValue >= 20000 && salaryValue <= 40000;
        if (range === '40000-60000') return salaryValue >= 40000 && salaryValue <= 60000;
        if (range === '60000+') return salaryValue >= 60000;
        return true;
    }
</script>






<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>


<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/datatablescripts.bundle.js"></script>

<!-- page js file -->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/pages/jquery-datatable.js"></script>


</body>

</html>