<?php
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");
$title = 'Skill Badges | Emfob';
?>

<!doctype html>
<?php 
include_once("dashboard-header.php");


// Fetch available exams
try {
    $sql = "SELECT * FROM ".USERS." a inner join ".CANDIDATES_PROFILES." b on a.user_id = b.user_id where a.usertype = 1 or a.usertyp = 4  ORDER BY a.created_at DESC";
    $stmt = $pdo->query($sql);
    $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Error fetching exams: " . $e->getMessage());
    $jobs = [];
}

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
</style>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Candidate Search</h4>
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
						
                        <div class="card">
							
                            <div class="card-header">
                                <div class="card-icon text-muted"><i class="fas fa-sync-alt fs-14"></i></div>
                                <h3 class="card-title">Candidate Search</h3>
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
                                                <th>Email ID</th>
                                                <th>Phone No</th>
                                                <th>User Type</th>
                                                <th>Full Name</th>
                                                <th>Company Name</th>
                                                <th>Job Title</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($jobs as $val){ ?>
                                            <tr>
                                                <td class="align-middle"><?php echo $val['email'] ?></td>
												<td class="align-middle"><?php echo $val['phone_number'] ?></td>
												<td class="align-middle"><?php echo $val['user_type'] ?></td>
												<td class="align-middle"><?php echo $val['full_name'] ?></td>
												<td class="align-middle"><?php echo $val['current_job_title'] ?></td>
												<td class="align-middle"><?php echo $val['current_job_title'] ?></td>
												<td class="align-middle">view</td>
                                            </tr>
										<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
	<!-- -->
    <?php //include "footer.php"; ?>
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