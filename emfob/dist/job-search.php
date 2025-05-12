<?php include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");


$employment_type = getAllSelection(EMPLOYMENT_TYPE);
$experience_level = getAllSelection(EXPERIENCE_LEVEL);
$categories = db_select('id,category_name',CATEGORIES);

$title = 'Job Search | Emfob'; ?>

<!doctype html>

<?php include_once("dashboard-header.php"); ?>
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
                        <h4 class="mb-sm-0">Job Search Page</h4>

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
                            <div class="row">
                                <!-- Filter Section -->
                                <div class="col-lg-3 mb-4" style="position: sticky; top: 0; z-index: 100;">
                                    <div class="filter-section">
                                        <h5>Filters</h5>
                                        <form id="filterForm">
                                            <div class="form-group">
                                                <label for="jobType">Job Type</label>
                                                <select class="form-control" id="jobType">
                                                    <option value="">All</option>
													<?php foreach($employment_type as $val){ ?>
													<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
													<?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="experienceLevel">Experience Level</label>
                                                <select class="form-control" id="experienceLevel">
                                                    <option value="">All</option>
                                                    <?php foreach($experience_level as $val){ ?>
													<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
													<?php } ?> 
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" class="form-control" id="location"
                                                    placeholder="Enter location">
                                            </div>
                                            <div class="form-group">
                                                <label for="salaryRange">Salary Range</label>
                                                <select class="form-control" id="salaryRange">
                                                    <option value="">All</option>
                                                    <option value="20000-40000">20,000 - 40,000</option>
                                                    <option value="40000-60000">40,000 - 60,000</option>
                                                    <option value="60000+">60,000+</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="industry">Industry</label>
                                                <select class="form-control" id="industry">
                                                    <option value="">All</option>
                                                    <?php foreach($categories as $val){ ?>
													<option value="<?php echo $val['id'] ?>"><?php echo $val['category_name'] ?></option>
													<?php } ?>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-block"
                                                onclick="loadData()">Apply Filters
                                            </button>
                                            <button type="button" class="btn btn-primary btn-block"
                                                onclick="clearFilters()">Clear Filters
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Job Listings Section -->
                                <div class="col-lg-9">
                                    <div style="position: sticky; top: 0; background: white; z-index: 100;">
                                        <div class="form-group d-flex">
                                            <input type="text" class="form-control" id="searchInput"
                                                placeholder="Search for a job">
                                            <button class="btn btn-primary ml-2" onclick="searchJobs()">Search
                                                Job</button>
                                        </div>
                                    </div>
                                    <div id="jobResults" class="row"
                                        style="height: 70vh; overflow-y: scroll; position: relative; padding-top: 20px;">
                                        <div class="job-item"
                                            style="position: absolute; width: 100%; transition: transform 0.5s ease;">
                                            <!-- Job items will be appended here -->
                                        </div>
                                    </div>

                                    <!-- Pagination -->
                                    <nav aria-label="Job results pagination">
                                        <ul class="pagination justify-content-center mt-4" style="display:none">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
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
<?php //include "sidebar.php"?>

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
            <div class="text-center mb-4">
                                <button class="btn btn-info btn-lg rounded-pill" onclick="easyApply()" style="width: 200px;">
                                    <i class="fas fa-paper-plane"></i> Easy Apply
                                </button>
                            </div>
                <a href="#" class="btn btn-outline-success rounded-pill">View Details</a>
            </div>
        </div>
    </div>
</script>

<!-- JavaScript (Bootstrap and jQuery) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
	function loadData() {
		const xhr = new XMLHttpRequest();
		const qry = "job_type="+$('#jobType').val();
		xhr.open("GET", "<?php echo BASE_URL; ?>api/jobsearch.php?"+qry+"&limit=1", true);
		xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

		xhr.onload = function () {
			if (xhr.status === 200) {
			  const response = JSON.parse(xhr.responseText);
			  console.log(response); // new post response
			  searchResJobs(response);
			}
		  };

		const postData = {
			jobType: $('#jobType').val(),
			limit: 1
		};

		xhr.send(JSON.stringify(postData));
	}
	
	function searchResJobs(response){
		
		// Example data (replace with actual API data)
        const jobs = response;

        // Filter jobs
        const filteredJobs = jobs;

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
                    .replace('{{companyLogo}}', '<?php echo BASE_URL_ADMIN; ?>'+job.companyLogo)
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






<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/node-waves/waves.min.js"></script>
<!-- apexcharts -->
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="<?php echo BASE_URL_ADMIN; ?>assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="<?php echo BASE_URL_ADMIN; ?>assets/js/app.js"></script>

</body>

</html>