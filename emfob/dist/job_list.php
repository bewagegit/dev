<?php
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");
$title = 'Skill Badges | Emfob';
extract($_GET);
?>

<!doctype html>
<?php 
include_once("dashboard-header.php");

$userid = $_SESSION['user_id'];

$limit = 10; // Results per page
$page = isset($_GET['pagelimit']) ? (int)$_GET['pagelimit'] : 1;
$start = ($page - 1) * $limit;

// Fetch total number of rows
$stmt = $pdo->prepare("SELECT COUNT(id) AS total FROM `".JOB_POSTINGS."` a
					   inner join `".USERS."` b on a.posted_by_user_id  = b.user_id
					   where a.posted_by_user_id = ? and status = 1  order by a.id desc");

$stmt->execute([$userid]); // Verify email and user type
$row = $stmt->fetchAll();
$total = $row[0]['total'];
$pages = ceil($total / $limit);


//Get all group List
$stmt = $pdo->prepare("SELECT * FROM `".JOB_POSTINGS."` a
					   inner join `".USERS."` b on a.posted_by_user_id  = b.user_id
					   where a.posted_by_user_id = ? and status = 1 order by a.id desc LIMIT $start, $limit ");
		
$stmt->execute([$userid]); // Verify email and user type
$jobs = $stmt->fetchAll();

?>

<style>
    .logo-corner {
        position: absolute;
        top: 1px;
        right: 10px;
        width: 50px;
        height: 50px;
        opacity: 0.8;
        object-fit: contain;
    }

    .skill-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .skill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .card-header {
        position: relative;
        padding-right: 70px; /* Make space for the logo */
    }
	
	.job-container {
      max-width: 800px;
      margin: 40px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .job-header {
      border-bottom: 1px solid #ddd;
      margin-bottom: 20px;
    }

    .job-header h1 {
      margin: 0;
    }

    .company-info {
      color: #777;
      margin-top: 5px;
    }

    .job-section {
      margin-bottom: 20px;
    }

    .job-section h3 {
      margin-bottom: 10px;
      color: #333;
    }

    .job-section p {
      margin: 0;
      line-height: 1.6;
    }

    .apply-btn {
      display: inline-block;
      background-color: #007bff;
      color: white;
      padding: 12px 25px;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .apply-btn:hover {
      background-color: #0056b3;
    }
</style>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Job Post</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tests</a></li>
                                <li class="breadcrumb-item active">Skill Tests</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exams Grid -->
            <div class="row mt-4">
			
               <!-- starts -->
			   <div class="row">
                    <div class="col-xxl-12">
						<?php if($pages){ ?>
                        <div class="card">
							
                            <div class="card-header">
                                <div class="card-icon text-muted"><i class="fas fa-sync-alt fs-14"></i></div>
                                <h3 class="card-title">Job Listing</h3>
                                <div class="card-addon dropdown">
                                    <button class="btn btn-label-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"> <i class="fas fa-filter fs-12 align-middle ms-1"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">
                                            <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                                            <span class="dropdown-content">Today</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                                            <span class="dropdown-content">Yesterday</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                                            <span class="dropdown-content">Week</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Status</th>
                                                <th>Title</th>
                                                <th>Location</th>
                                                <th>Application Deadline</th>
                                                <th>Application End Date</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($jobs as $val){ ?>
                                            <tr>
                                                <td class="align-middle"><?php echo $val['id'] ?></td>
                                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-primary"></i> <?php echo ($val['status'] == 1)? "Active":"" ?></td>
                                                <td class="align-middle">
                                                    <?php echo $val['job_title'] ?>
                                                </td>
                                                <td class="align-middle"><?php echo $val['job_location'] ?></td>
                                                <td class="align-middle"><?php echo date("d/m/Y",strtotime($val['applicationDeadLine'])) ?></td>
                                                <td class="align-middle"><?php echo date("d/m/Y",strtotime($val['job_postings_date']) ) ?></td>
												<td class="align-middle">
													<a class="btn btn-primary waves-effect waves-light" onclick="viewJob('<?php echo $val['id']; ?>')" >View</a>
													<a class="btn btn-primary waves-effect waves-light" href="<?php echo BASE_URL."job-post-edit.php?edit_id=".$val['id'] ?>">Edit</a>
													<a class="btn btn-primary waves-effect waves-light" onclick="deleteJobId('<?php echo $val['id']; ?>')" href="javascript:void(0);">Archieve</a>
												</td>
                                            </tr>
										<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<?php echo getPaginationLinks($pagelimit ?? 0,$pages); ?>
                        </div>
						<?php }else{ ?>
						No jobs to show
						<?php } ?>
                    </div>
                </div>
                <!-- end row -->
			   <!-- ends -->
			   
			   
            </div>

        </div>
    </div>
	<!-- this is footer path  -->
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

<!-- Modal HTML -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">View Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	 <!-- starts  -->
	 <div class="container my-5">
		<div class="card shadow-lg">
		  <div class="card-body">
			<!-- Job Header -->
			<h2 id="cardTitle" class="card-title"></h2>
			<h6 id="cardLocation" class="text-muted"></h6>
			<hr />

			<!-- Job Description -->
			<div class="mb-4">
			  <h5>Job Description</h5>
			  <p id="jobDescription">
			  </p>
			</div>

			<!-- Requirements -->
			<div class="mb-4">
			  <h5>Requirements</h5>
			   <ul id="jobRequirement">
				<!--<li>3+ years of experience in frontend development</li>
				<li>Proficiency in React or Vue.js</li>
				<li>Strong understanding of web standards and responsive design</li>-->
			  </ul>
			</div>

			<!-- Salary -->
			<div class="mb-4">
			  <h5>Salary</h5>
			  <p id="jobSalary"><!-- $80,000 - $100,000 / year--></p>
			</div>
			<div class="mb-4">
			  <h5>Benefits</h5>
			  <p id="benefits"><!-- $80,000 - $100,000 / year--></p>
			</div>
			<div class="mb-4">
			  <h5>Application Deadline</h5>
			  <p id="applicationDeadLine"><!-- $80,000 - $100,000 / year--></p>
			</div>
			<div class="mb-4">
			  <h5>Application Posting Date</h5>
			  <p id="job_postings_date"><!-- $80,000 - $100,000 / year--></p>
			</div>
		  </div>
		</div>
	  </div>
	 <!-- ends -->
	 
	 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- JAVASCRIPT -->
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/js/app.js"></script>
<script>
function deleteJobId(id){
	if (confirm("Do you really want to archieve this job ?")) {
		fetch('<?php echo BASE_URL ?>api/archievejob.php?archieve_id='+id, {
		  method: 'GET'
		})
		.then(response => response.json())
		.then(data => {
			window.location.href ="<?php echo BASE_URL; ?>/job_list.php"
		})
		.catch(error => {
			console.log(error);
			console.error('Error:', error);
		});
		// User clicked OK
		//window.location.href ="<?php echo BASE_URL; ?>api/archievejob.php?archieve_id="+id
	} 
}
function viewJob(id){
	// Get the modal element
	const myModalEl = document.getElementById('myModal');
  
	// Create a new Bootstrap modal instance
	const myModal = new bootstrap.Modal(myModalEl);
	myModal.show(); 
	fetch('<?php echo BASE_URL ?>api/getJobList.php?job_id='+id, {
	  method: 'GET'
	})
	.then(response => response.json())
	.then(data => {
		$("#cardTitle").html(data[0].job_title);
		$("#cardLocation").html(data[0].job_location);
		var requirement = '';
		requirement += '<li>'+data[0].education_requirements+'</li>';
		requirement += '<li>Min '+data[0].experience_requirement+' experienced</li>';
		requirement += '<li>Required : '+data[0].req_skills+'</li>';
		requirement += '<li>Preferred : '+data[0].pref_skills+'</li>';
		$("#jobRequirement").html(requirement);
		$("#benefits").html(data[0].benefits);
		$("#jobSalary").html('<li>Salary : ₹ '+data[0].salaryRangeMin + '-'+ data[0].salaryRangeMax +'</li>');
		$("#applicationDeadLine").html(data[0].applicationDeadLine);
		$("#job_postings_date").html(data[0].job_postings_date);
	})
	.catch(error => {
		console.log(error);
		console.error('Error:', error);
	});
}
</script>

</body>
</html>