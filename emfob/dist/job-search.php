<?php include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");


$employment_type = getAllSelection(EMPLOYMENT_TYPE);
$experience_level = getAllSelection(EXPERIENCE_LEVEL);
$categories = db_select('id,category_name',CATEGORIES);
$language = db_select('id,languages_name',LANGUAGES,'active = ? ',array(1),'order by id desc');

$job_industry = getAllSelection(JOB_INDUSTRY);

$title = 'Job Search | Emfob'; ?>

<!doctype html>

<?php include_once("dashboard-header.php"); ?>
<link rel="stylesheet" href="<?php echo BASE_URL."assets/css/job-search.css" ?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- noUiSlider CSS -->
<link href="https://cdn.jsdelivr.net/npm/nouislider@15.7.0/dist/nouislider.min.css" rel="stylesheet">

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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- Filter Section -->
                                <!--<div class="col-lg-4 mb-4" style="position: sticky; top: 0; z-index: 100;">
                                    <div class="filter-section">
                                        <h5>Filters</h5>
                                        <form id="filterForm">
                                            
                                            
                                           
											
                                            
                                            
                                            <button type="button" class="btn btn-primary btn-block"
                                                onclick="loadData(1)">Apply Filters
                                            </button>
                                            <button type="button" class="btn btn-primary btn-block"
                                                onclick="clearFilters()">Clear Filters
                                            </button>
                                        </form>
                                    </div>
                                </div>-->

                                <!-- Job Listings Section -->
                                <div class="col-lg-12">
									<div class="col-lg-12">
										<div style="position: sticky; top: 0; background: white; z-index: 100;">
											<div class="row mb-3">
												<div class="col-md-12">
													<div class="form-group">
														<label for="experienceLevel">Job Title</label>
														<input type="text" class="form-control jobSearchExp" id="searchInput"
														placeholder="Search for a Job Title">
													</div>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-md-3">
													<div class="form-group">
															<label for="jobType">Job Type</label>
															<select class="form-control jobsearchinput" id="jobType" multiple >
																<?php foreach($employment_type as $val){ ?>
																<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
																<?php } ?>
															</select>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label for="location">Location</label>
														<input type="text" class="form-control jobSearchExp" id="location"
															placeholder="Enter location">
													</div>
												</div>
												
												<div class="col-md-4">
													<div class="form-group">
														<label for="location">Language</label>
														<select class="form-control jobsearchinput" id="language" multiple>
														<?php foreach($language as $val){ ?>
															<option value="<?php echo $val['id'] ?>"><?php echo $val['languages_name'] ?></option>
														<?php } ?>
														</select>
													</div>
												</div>
												<div class="col-md-2">
													<div class="form-group">
														<label for="experienceLevel">Experience Level</label>
														<select class="form-control jobSearchExp" id="experienceLevel">
															<option value="">All</option>
															<?php for($i=0;$i<50;$i++){ ?>
															<option value="<?php echo $i ?>"><?php echo $i; ?></option>
															<?php } ?> 
														</select>
													</div>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-md-5">
													<div class="form-group">
														<label for="industry">Industry</label>
														<select class="form-control jobsearchinput" id="industry" multiple>
															<?php foreach($job_industry as $val){ ?>
															<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
											
												<div class="col-md-3">
													<div style="max-width: 400px; margin: 20px auto;">
													  <label><strong>Salary Range:</strong></label>
													  <div id="salarySlider" style="max-width: 400px; margin: 10px auto;"></div>
													  <div style="display: flex; justify-content: space-between; margin-top: 20px;">
														<span>Min: ₹<span id="minSalary">20000</span></span>
														<span>Max: ₹<span id="maxSalary">80000</span></span>
													  </div>
													</div>
												</div>
												
											</div>
											<br/>
											<div class="form-group d-flex">
												<button class="btn btn-primary ml-2" onclick="loadData(1,'title')">Search Job</button>&nbsp;&nbsp;
												<button type="button" class="btn btn-primary btn-block"
													onclick="clearFilters()">Clear Filters
												</button>
											</div>
										</div>
									</div>
									
                                    <div id="jobResults" class="row"
                                        style="overflow-y: scroll; position: relative; padding-top: 20px;">
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
				<div class="col-lg-6">
                    <div class="card col-lg-5 position-fixed" id="quickviewpage">
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
    <div class="col-md-12 cards" id="jobcards{{jobCardIds}}">
        <div class="job-card p-3">
            <div class="job-card-content text-start">
				<img src="<?php echo BASE_URL."assets/images/direct_hiring-icon1.png" ?>" class="postingTags float-end" />
				{{newlyAddedTag}}&nbsp;&nbsp;&nbsp;
				{{urgentlyHiring}}
				<i class="bi bi-three-dots-vertical float-end shareIcon" ></i>
                <h5><a href="javascript:void(0);" onclick="viewJobDetails('{{jobid}}')">{{jobTitle}}</a></h5>
                <p class="mb-0">{{companyName}}<img src="<?php echo BASE_URL."assets/images/shield.png" ?>" data-bs-toggle="tooltip" title="This is Verified" /></p>
				<p class="mb-0">{{location}}</p>
				<button class="btn btn-outline-secondary btn-sm jobtags jobCardTags salaryTag">{{salary}} per month</button>&nbsp;&nbsp;
				<button class="btn btn-outline-secondary btn-sm jobtags jobCardTags jobTypeTag">{{jobType}}</button> &nbsp;&nbsp;
				<button class="btn btn-outline-secondary btn-sm jobtags jobCardTags jobTypeTag">{{jobShift}} Shift</button>
				<div style="margin-top:5px">
					<div>
						<div class="mb-4">
							<button class="btn btn-info btn-lg rounded-pill" onclick="viewJobDetails('{{jobidEasy}}')" 
									style="width: 110px;margin-top: 10px;font-size: 12px;">
								<i class="fas fa-paper-plane"></i> Easy Apply
							</button>
						</div>
						<ul class="cardDescription ">
							<li>{{job_description}}</li>
							<li>Required : {{req_skills}}</li>
							<li>Min : {{experienceLevel}} Year(s)</li>
						<ul>
						<small class="float-end postedDate">{{postedDate}}</small>
					</div>
					<!--
					<div>
						<div class="text-center mb-4">
											<button class="btn btn-info btn-lg rounded-pill" onclick="easyApply()" style="width: 200px;">
												<i class="fas fa-paper-plane"></i> Easy Apply
											</button>
						 </div>
						<a href="javascript:void(0);" onclick="viewJobDetails('{{jobid}}')" class="btn btn-outline-success rounded-pill">View Details</a>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</script>

<!-- JavaScript (Bootstrap and jQuery) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyrKx3qDBUdn7_wwXP08LZ8-nh05M5e7A&libraries=places"></script>

<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<!-- noUiSlider JS -->
<script src="https://cdn.jsdelivr.net/npm/nouislider@15.7.0/dist/nouislider.min.js"></script>

<script>
	let currentPage;
	let pageNo = 1;
	let paginatedJobs;
	document.addEventListener('DOMContentLoaded', function () {
	  loadData(1);
	  // Your DOM manipulation code here
	  
	  const choices = new Choices('#language', {
		removeItemButton: true,
		maxItemCount: 25,
		searchResultLimit: 25,
		renderChoiceLimit: 25
	  });
	  
	  const choices1 = new Choices('#jobType', {
		removeItemButton: true,
		maxItemCount: 25,
		searchResultLimit: 25,
		renderChoiceLimit: 25
	  });
	  
	  const choices2 = new Choices('#industry', {
		removeItemButton: true,
		maxItemCount: 25,
		searchResultLimit: 25,
		renderChoiceLimit: 25
	  });
	  
	  
	});
	function loadData(pageNo,title='') {
		var minSal = minSalary.textContent;
		var maxSal = maxSalary.textContent;
		
		const selectLang = document.getElementById("language");
		const selectedLanguage = Array.from(selectLang.selectedOptions).map(option => option.value);
		
		document.getElementById('jobResults').innerHTML = 'Loading..';
		$('.pagination').html('');
		currentPage = pageNo;
		const xhr = new XMLHttpRequest();
		const qry = "job_type="+$('#jobType').val()+"&exp_level="+$('#experienceLevel').val()+"&location="+$('#location').val()+"&language="+selectedLanguage+"&industry="+$('#industry').val()+"&title="+$('#searchInput').val()+"&salmin="+minSal+"&salmax="+maxSal;
		
		xhr.open("GET", "<?php echo BASE_URL; ?>api/jobsearch.php?"+qry+"&limit="+pageNo, true);
		xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

		xhr.onload = function () {
			if (xhr.status === 200) {
			  const response = JSON.parse(xhr.responseText);
			  if(response.data.length !== 0){
				searchResJobs(response.data,response.totalcnt,pageNo);
			  }
			  else{
				  document.getElementById('jobResults').innerHTML = '<p>No jobs found.</p>';
			  }
			}
		  };
		xhr.send();
	}
	
	function searchResJobs(response,cnt,pageNo){
		
		// Example data (replace with actual API data)
        let jobs = response;
		if(response.length === 0){
			jobs = [];
		}

        // Filter jobs
        const filteredJobs = jobs;

        // Paginate results
        const totalResults = cnt;
        const totalPages = Math.ceil(totalResults / resultsPerPage);
        //const paginatedJobs = filteredJobs.slice((currentPage - 1) * resultsPerPage, currentPage * resultsPerPage);
		paginatedJobs = jobs;

        // Clear previous results
        $('#jobResults').empty();

        // Display paginated jobs
        if (paginatedJobs.length === 0) {
            $('#jobResults').append('<p>No jobs found.</p>');
        } else {
            paginatedJobs.forEach(function (job) {
				const date = new Date(job.postedDate);
				const formattedDate = `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
				var urgentlyHiring = `<button class="btn btn-outline-secondary btn-sm jobtags" id="urgentlyTag">Immediate Hiring</button>`
				var location = job.location.split(",");
				var locationStr = '';
				if(typeof(location[location.length-2]) != 'undefined'){
					locationStr += location[location.length-2]+",";
				}
				if(typeof(location[location.length-1]) != 'undefined'){
					locationStr += location[location.length-1]+",";
				}
                const jobTemplate = $('#jobTemplate').html()
					.replace('{{jobid}}', job.jobid)
					.replace('{{jobidEasy}}', job.jobid)
					.replace('{{jobCardIds}}', job.jobid)
                    .replace('{{jobTitle}}', job.jobTitle)
                    .replace('{{companyName}}', job.companyName)
                    .replace('{{location}}', locationStr.slice(0,locationStr.length-1) )
					.replace('{{job_description}}', job.job_description.slice(0, 100))
                    .replace('{{salary}}', job.salary)
					.replace('{{jobType}}', job.jobType)
					.replace('{{jobShift}}', job.jobShift)
					.replace('{{req_skills}}', job.req_skills)
					.replace('{{experienceLevel}}', job.experienceLevel)
                    .replace('{{companyLogo}}', '<?php echo BASE_URL_ADMIN; ?>'+job.companyLogo)
					.replace('{{newlyAddedTag}}',formatTimeAgo(formattedDate,1))
					.replace('{{urgentlyHiring}}', ((job.is_urgently_hiring)? urgentlyHiring:'') )
                    .replace('{{postedDate}}', formatTimeAgo(formattedDate) );


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
	
	
    currentPage = pageNo;
    const resultsPerPage = 10;
	
    function clearFilters() {
        $('#jobResults').empty();
    }

    function updatePagination(totalPages) {
        let paginationHTML = '';

        // Previous Button
        paginationHTML += `
            <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="loadData(${currentPage - 1})">Previous</a>
            </li>
        `;

        // Page Numbers
        for (let i = 1; i <= totalPages; i++) {
            paginationHTML += `
                <li class="page-item ${i === currentPage ? 'active' : ''}">
                    <a class="page-link" href="#" onclick="loadData(${i})">${i}</a>
                </li>
            `;
        }

        // Next Button
        paginationHTML += `
            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="loadData(${currentPage + 1})">Next</a>
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
	
	
	const input = document.getElementById('location');
	const autocomplete = new google.maps.places.Autocomplete(input)
	
	
	window.addEventListener('popstate', function(event) {
	  loadData(1);
	});
	
	function viewJobDetails(jobid){
		$(".cards").removeClass("cardselected");
		$("#jobcards"+jobid).addClass("cardselected");
		fetch("<?php echo BASE_URL; ?>api/quickviewjobbyid.php?job_id="+jobid)
		  .then(response => {
			  if (!response.ok) {
				throw new Error("Network response was not ok");
			  }
			  return response.text(); // Parse as plain text
		  })
		  .then(data => {
			  $("#quickviewpage").html(data);
		  })
		  .catch(error => {
			console.error("Error:", error);
		  });
	}
	function formatTimeAgo(date,isTags  = 0) {
		const now = new Date();
		const past = new Date(date);
		const diff = (now - past) / 1000; // in seconds

		const minute = 60;
		const hour = 60 * minute;
		const day = 24 * hour;
		const week = 7 * day;
		const month = 30 * day;
		
		if(isTags == 0){ 
			if (diff < 60) return 'Just now';
			if (diff < hour) return `${Math.floor(diff / minute)} minute(s) ago`;
			if (diff < day) return `${Math.floor(diff / hour)} hour(s) ago`;
			if (diff < week) return `${Math.floor(diff / day)} day(s) ago`;
			if (diff < month) return `${Math.floor(diff / week)} week(s) ago`;
			return `${Math.floor(diff / month)} month(s) ago`;
		}
		else{
			if (diff < 60) return '<button class="btn btn-outline-secondary btn-sm jobtags" id="urgentlyTag">New</button>';
			if (diff < hour) return `<button class="btn btn-outline-secondary btn-sm jobtags" id="urgentlyTag">New</button>`;
			if (diff < day) return `<button class="btn btn-outline-secondary btn-sm jobtags" id="urgentlyTag">New</button>`;
		}
		return '';
	}
	
	
	const salarySlider = document.getElementById('salarySlider');

	  noUiSlider.create(salarySlider, {
		start: [20000, 80000],
		connect: true,
		range: {
		  'min': 5000,
		  'max': 100000
		},
		step: 1000,
		format: {
		  to: value => Math.round(value),
		  from: value => Number(value)
		}
	  });

	  const minSalary = document.getElementById('minSalary');
	  const maxSalary = document.getElementById('maxSalary');

	  salarySlider.noUiSlider.on('update', function (values) {
		minSalary.textContent = values[0];
		maxSalary.textContent = values[1];
	  });
	
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