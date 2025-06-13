<?php
header('Content-Type: application/json');
include_once("../backend/config.php");
include_once("../backend/constants.php");
include_once("../backend/db_functions.php");
include_once("../backend/common_functions.php");

include_once("chkAuthenticate.php");

header('Content-Type: application/json');
extract($_GET);

$userid = $_SESSION['user_id'];


//Get all group List
$stmt = $pdo->prepare("SELECT *,(SELECT GROUP_CONCAT(name) 
					   FROM `benefits` 
					   where FIND_IN_SET (id, a.otherCompensation)) benefits,
					   (SELECT GROUP_CONCAT(languages_name) FROM `".LANGUAGES."` where FIND_IN_SET (id, a.language)) language 
					   FROM `".JOB_POSTINGS."` a
					   LEFT JOIN `".JOB_INDUSTRY."` f on f.id = a.industry_domain_name 
					   LEFT JOIN `".COMPANIES."` c on c.employer_id = a.company_id 
					   LEFT JOIN `".EMPLOYERS."` d on d.employer_id = a.company_id 
					   LEFT JOIN `".EMPLOYMENT_TYPE."` e on e.id = a.job_type 
					   LEFT JOIN `".USERS."` b on a.posted_by_user_id  = b.user_id
					   where a.id= ? order by a.id desc ");

/*echo "SELECT *,(SELECT GROUP_CONCAT(name) 
					   FROM `benefits` 
					   where FIND_IN_SET (id, a.otherCompensation)) benefits,
					   (SELECT GROUP_CONCAT(languages_name) FROM `".LANGUAGES."` where FIND_IN_SET (id, a.language)) language 
					   FROM `".JOB_POSTINGS."` a
					   LEFT JOIN `".JOB_INDUSTRY."` f on f.id = a.industry_domain_name 
					   LEFT JOIN `".COMPANIES."` c on c.employer_id = a.company_id 
					   LEFT JOIN `".EMPLOYERS."` d on d.employer_id = a.company_id 
					   LEFT JOIN `".EMPLOYMENT_TYPE."` e on e.id = a.job_type 
					   LEFT JOIN `".USERS."` b on a.posted_by_user_id  = b.user_id
					   where a.id= ? order by a.id desc ";*/
		
$stmt->execute([$job_id]); // Verify email and user type
$jobs = $stmt->fetchAll();
//print_r($jobs);
$location = explode(",",$jobs[0]['job_location']);
$benefits = explode(",",$jobs[0]['benefits']);
?>
<div class="card-body">
	<img src="<?php echo BASE_URL."assets/images/close.png" ?>" alt="Company Logo" height="20" width="20" class="float-end">
	<div class="row" style="text-align: left;">
		<div class="job-card rounded-top col-lg-12"> 
		  <ul class="list-unstyled mb-0 col-lg-12">
			  <li style="padding-bottom:10px"><b class="jobviewtitle"><?php echo ($jobs[0]['job_title'])?? ''; ?></b></li>
			  <li style="padding-bottom:5px" class="cardtext"><?php echo ($jobs[0]['company_name'])?? ''; ?></li>
			  <li style="padding-bottom:5px" class="cardtext"><?php echo (($location[count($location)-1])?? '')." ".(($location[count($location)-2])?? ''); ?></li>
			  <li><button class="btn btn-primary ml-2 applynow">Apply Now</button>&nbsp;&nbsp;
					<span class="jobcardicon">
						<img src="<?php echo BASE_URL."assets/images/save-instagram.png" ?>" width="25" height="25" 
						data-bs-toggle="tooltip" 
						data-bs-placement="top" 
						title="Save this Job" />
					</span>&nbsp;&nbsp;
					<span style="padding-right:5px" class="jobcardicon">
						<img src="<?php echo BASE_URL."assets/images/link.png" ?>" width="30" height="30"
						data-bs-toggle="tooltip" 
						data-bs-placement="top" 
						title="Copy link to this Job"
						/>
					</span>
					</svg>
			  </li>
			  <hr class="my-4 shadow-hr">
			  <!-- starts -->
				<div class="cardScroll">
					  <div class="cardlineheight">
						  <li><b class="cardtitle">Job Details</b></li>
						  <li class="cardsmallheader"> 
								<img src="<?php echo BASE_URL."assets/images/industrial-park.png" ?>" height="20" width="20" />
								<span style="margin-left: 25px;"></span>Industry
						  </li>
						  <li class="cardsmallheaderli">
								<span class="jobcardspacing"></span><button class="btn btn-outline-secondary btn-sm jobtags boxstyle" >₹<?php echo number_format($jobs[0]['salaryRangeMin'])?? ''; ?> - ₹<?php echo number_format($jobs[0]['salaryRangeMax'])?? ''; ?> a month</button>
						  </li>
						  <li class="cardsmallheader">
									<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-suitcase-lg-fill" viewBox="0 0 16 16">
									  <path d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2zM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM3 13V3h1v10zm9 0V3h1v10z"/>
									</svg>
									<span style="margin-left: 25px;"></span>Job type
						  </li>
						  <li class="cardsmallheaderli">
							<span class="jobcardspacing"></span><button class="btn btn-outline-secondary btn-sm jobtags boxstyle"><?php echo ($jobs[0]['name'])?? ''; ?></button>
						  </li>
						   <li class="cardsmallheader"> 
									<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
									  <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
									  <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
									</svg><span style="margin-left: 25px;"></span>Salary
						  </li>
						  <li class="cardsmallheaderli">
								<span class="jobcardspacing"></span>
								<button class="btn btn-outline-secondary btn-sm jobtags boxstyle" >₹<?php echo number_format($jobs[0]['salaryRangeMin'])?? ''; ?> - ₹<?php echo number_format($jobs[0]['salaryRangeMax'])?? ''; ?> a month
								</button>
						  </li>
						  	
						  <li class="cardsmallheader">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
									  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
									</svg>
									<span style="margin-left: 25px;"></span>Shift and schedule
						   </li>
						   <li class="cardsmallheaderli">
								<span class="jobcardspacing"></span><button class="btn btn-outline-secondary btn-sm jobtags boxstyle"><?php echo ($jobs[0]['shift_timing'])?? ''; ?></button>			
						   </li>
						</div>
						<hr class="my-4" />
						<li><b class="cardtitle">Full Job Description</b></li>
						<li class="jobdescription">
							<?php echo ($jobs[0]['job_description'])?? ''; ?>
						</li>
						<li>
							<div class="cardlineheight30">
								<ul>
									<li class="cardsmallheaderli">Job Type: <?php echo ($jobs[0]['name'])?? ''; ?></li>
									<li class="cardsmallheaderli">Pay: ₹<?php echo number_format($jobs[0]['salaryRangeMin'])?? ''; ?> - ₹<?php echo number_format($jobs[0]['salaryRangeMax'])?? ''; ?> a month</li>
									<li class="cardsmallheaderli">Benefits:
										<ul>
										<?php foreach($benefits as $val){ ?>
											<li><?php echo $val; ?></li>
										<?php } ?>
										</ul>
									</li>
									<li class="cardsmallheaderli">Work Location:
										<ul>
											<li><?php echo (($location[count($location)-2])?? '').",".(($location[count($location)-1])?? ''); ?></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<hr class="my-4" />
						<?php if($jobs[0]['benefits'] != ''){ ?>
							<li><b class="cardtitle">Benefits</b></li>
							<li><b class="cardsmallheaderli"><?php echo ($jobs[0]['benefits'])?? ''; ?></b></li>
						<?php } ?>
						<hr class="my-4" />
						<li><b class="cardtitle">Location</b></li>
						<li><b class="cardsmallheaderli">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
								  <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
								  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
								</svg>
								<?php echo (($location[count($location)-2])?? '').",".(($location[count($location)-1])?? ''); ?>
							</b>
						</li>
						
				 </div>
				 <!-- ends -->
		   </ul> 
		</div>
	</div>
</div>