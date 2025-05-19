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

$userid = $_SESSION['user_id'];

if($_SESSION['user_type'] ==2)
	$usertype = 1;
if($_SESSION['user_type'] ==1)
	$usertype = 2;


// Fetch available exams
$sql = "SELECT * FROM `".USERS."` WHERE `user_type` = $usertype and is_online =1 and user_id !='".$userid."' ";	
$stmt = $pdo->query($sql);
$recruiters = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Get all group List
$groups = db_select("id,group_name as name",GROUPS);


//Get all group List
$stmt = $pdo->prepare("SELECT * FROM `".CHAT_MESSAGES."` a
					   inner join `".USERS."` b on a.userid_to = b.user_id
					   where a.user_id_from = ? group by user_id_from order by a.created_at desc");
		
$stmt->execute([$userid]); // Verify email and user type
$messages = $stmt->fetchAll();
?>

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
                                <h4 class="mb-sm-0">Chat</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Chat</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="d-lg-flex mb-4">
                        <!-- left sidebar -->
                        <div class="chat-leftsidebar card mb-0">
                            <div class="search-box card-body pb-0">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <i class="mdi mdi-magnify search-icon fs-20"></i>
                                </div>
                            </div>

                            <div class="card-body border-bottom">
                                <div class=" d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="mb-0">Recruiters</h5>
                                    <a href="#!">All</a>
                                </div>
                                <div class="hstack gap-3 flex-wrap">
								<?php
								foreach($recruiters as $val){
									?>
									<div onclick="DisplayChatMessages('<?php echo $val['user_id'] ?>')" class="user-img online align-self-center">
										<div class="avatar-2xs avatar avatar-circle align-self-center">
											<span class="bg-light text-body">
												<?php echo substr($val['email'],0,1); ?> 
											</span>
										</div>
										<span class="user-status"></span>
									</div>
									<?php 
								}
								?>
                                </div>
                            </div>

                            <div class="card-body border-bottom">
                                <div class="d-flex">
                                    <div class="align-self-center me-3">
                                        <img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-6.png"
                                            class="avatar-2xs avatar rounded-circle" alt="avatar-2">
                                    </div>
                                    <div class="flex-1">
                                        <h5 class="font-size-15 mb-1">Ricky Clark</h5>
                                        <p class="text-muted mb-0"><i
                                                class="mdi mdi-circle text-success align-middle me-1"></i> Active</p>
                                    </div>

                                    <div>
                                        <div class="dropdown chat-noti-dropdown">
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal fs-20"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="py-3 border-bottom">
                                <h5 class="fs-14 px-3 mb-3"><i class="mdi mdi-pin align-middle text-muted"></i> Pinned
                                </h5>
                                <ul class="list-unstyled chat-list" data-simplebar style="max-height: 120px;">
                                    <li class="active">
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img online align-self-center me-3">
                                                    <img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-5.png"
                                                        class="rounded-circle avatar-2xs avatar" alt="avatar-2">
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Frank Vickery</h5>
                                                    <p class="text-truncate mb-0">Manager - Bewage</p>
                                                </div>
                                                <div class="fs-11">04 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img away align-self-center me-3">
                                                    <img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-4.png"
                                                        class="rounded-circle avatar-2xs avatar" alt="avatar-3">
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Robert Winter</h5>
                                                    <p class="text-truncate mb-0">HR - Dell Technologies</p>
                                                </div>
                                                <div class="fs-11">09 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img online align-self-center me-3">
                                                    <img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-6.png"
                                                        class="rounded-circle avatar-2xs avatar" alt="avatar-6">
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Stephen Hadley</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="fs-11">5hrs</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img online me-3">
                                                    <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                        <span class="bg-light text-body">
                                                            C
                                                        </span>
                                                    </div>
                                                    <span class="user-status mb-2"></span>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Crystal Elliott</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="fs-11">21 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img align-self-center me-3">
                                                    <img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-4.png"
                                                        class="rounded-circle avatar-2xs avatar" alt="avatar-4">
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Kristen Steele</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="fs-11">1 hr</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img away me-3">
                                                    <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                        <span class="bg-light text-body">
                                                            M
                                                        </span>
                                                    </div>
                                                    <span class="user-status mb-2"></span>
                                                </div>

                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Mitchel Givens</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div class="fs-11">3 hrs</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img online me-3">
                                                    <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                        <span class="bg-light text-body">
                                                            K
                                                        </span>
                                                    </div>
                                                    <span class="user-status mb-2"></span>
                                                </div>

                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Tracy Penley</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="fs-11">24/03</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="chat-leftsidebar-nav pt-3">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a href="#chat" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link active">
                                            <i class="mdi mdi-android-messages fs-16 align-middle me-2"></i>
                                            <span class="">Chat</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#group" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-account-multiple-outline fs-16 align-middle me-2"></i>
                                            <span class="">Group</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content py-3">
                                <div class="tab-pane show active" id="chat">
                                    <div>
                                        <h5 class="fs-14 px-3 mb-3"><i class="mdi mdi-android-messages text-muted"></i>
                                            Recent</h5>
                                        <ul class="list-unstyled chat-list" data-simplebar style="max-height: 250px;">
										<?php
										if(count($messages) == 0){
											?>
											<li class="active">
                                                <a href="#">
                                                    <div class="d-flex">
                                                        <div class="user-img online align-self-center me-3">
														No Chat messages to show
														</div>
													</div>
												</a>
											</li>
											<?php
										}
										else{
											foreach($messages as $key => $val){
												$uname = explode("@",$val['email']);
											?>
												<li class="active" onclick="DisplayChatMessages('<?php echo $val['userid_to']; ?>')">
													<a href="#">
														<div class="d-flex">
															<div class="user-img online align-self-center me-3">
																<img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-6.png"
																	class="rounded-circle avatar-2xs avatar" alt="avatar-2">
																<span class="user-status"></span>
															</div>

															<div class="flex-1 overflow-hidden">
																<h5 class="text-truncate fs-14 mb-1"><?php echo $uname[0]; ?></h5>
																<p class="text-truncate mb-0"><?php echo $val['message']; ?></p>
															</div>
															<div>
																<p class="fs-11 mb-0">04 min</p>
																<div><i
																		class="mdi mdi-check-all align-middle ms-2 text-info"></i>
																</div>
															</div>
														</div>
													</a>
												</li>
											<?php 
											}
										} ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane" id="group">
                                    <h5 class="fs-14 px-3 mb-3"><i
                                            class="mdi mdi-account-multiple-outline align-middle"></i> Group</h5>
                                    <ul class="list-unstyled chat-list" data-simplebar style="max-height: 250px;">
                                        <?php foreach($groups as $val){ ?>
										<li>
                                            <a href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-2xs avatar avatar-circle me-3">
                                                        <span class="bg-light text-body">
                                                            <?php echo ucfirst(substr($val['name'],0,1)); ?>
                                                        </span>
                                                    </div>

                                                    <div class="flex-1">
                                                        <h5 class="fs-14 mb-0"><?php echo $val['name']; ?></h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
										<?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- chat content -->
                        <div class="w-100 user-chat mt-4 mt-sm-0">
                            <div class="p-3 px-lg-4 user-chat-border">
                                <div class="row">
                                    <!-- User Info Section -->
                                    <div class="col-md-4 col-6">
                                        <h5 class="font-size-15 mb-1 text-truncate" id="username">Frank Vickery</h5>
										<input type="hidden" id="useridVal" />
                                        <p class="text-muted text-truncate mb-0">
                                            <i class="mdi mdi-circle text-success align-middle me-1"></i> Active now
                                        </p>
                                    </div>

                                    <!-- Advertisement Banner Section -->
                                    <div class="col-md-4 d-none d-md-block">
                                        <!-- Advertisement banner, can be an image, text, or anything you want -->
                                        <div class="ad-banner text-center p-2">
                                            <a href="#"><img src="https://placehold.co/800x200" class="img-fluid"
                                                    alt="Ad Banner" /></a>
                                        </div>
                                    </div>

                                    <!-- Settings Icons Section -->
                                    <div class="col-md-4 col-6">
                                        <ul class="list-inline user-chat-nav text-end mb-0">
                                            <li class="list-inline-item d-inline-block d-sm-none">
                                                <div class="dropdown">
                                                    <button class="btn nav-btn dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="mdi mdi-magnify"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                                        <form class="p-2">
                                                            <div class="search-box">
                                                                <div class="position-relative">
                                                                    <input type="text" class="form-control rounded"
                                                                        placeholder="Search...">
                                                                    <i class="mdi mdi-magnify search-icon"></i>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item m-0 d-none d-sm-inline-block">
                                                <div class="dropdown">
                                                    <button class="btn nav-btn dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="mdi mdi-cog"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">View Profile</a>
                                                        <a class="dropdown-item" href="#">Clear chat</a>
                                                        <a class="dropdown-item" href="#">Muted</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button class="btn nav-btn dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="px-lg-2">
                                <div class="chat-conversation p-3">
                                    <ul class="list-unstyled mb-0 pe-3" id="chatConversations" data-simplebar style="max-height: 650px;">
										 
                                    </ul>
                                </div>

                            </div>
                            <div class="px-lg-3">
                                <div class="p-3 chat-input-section">
                                    <div class="row">
                                        <div class="col">
                                            <div class="position-relative">
                                                <input type="text" class="form-control chat-input" id="chatTextMessage"
                                                    placeholder="Enter Message...">

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" onclick="sendMessage()"
                                                class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                                                    class="d-none d-sm-inline-block me-2">Send</span> <i
                                                    class="mdi mdi-send"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<input type="hidden" id="currentChatId" value="" />
                    <!-- end row -->

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
        <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm rounded-end-0"
            id="light-dark-mode">
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
                                    <p class="mb-0">System shutdown <span
                                            class="badge badge-label-success">pending</span></p>
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
                                    <p class="mb-0">New order received <span
                                            class="badge badge-label-danger">urgent</span></p>
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
                                            <img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-1.png" alt="Avatar image"
                                                class="avatar-2xs" />
                                        </div>
                                        <div class="avatar avatar-circle">
                                            <img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-2.png" alt="Avatar image"
                                                class="avatar-2xs" />
                                        </div>
                                        <div class="avatar avatar-circle">
                                            <img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-3.png" alt="Avatar image"
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
                                <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                    labore et dolore magna elit enim at minim veniam quis nostrud</p>
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
                                <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                    labore et dolore magna.</p>
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

    <!-- Dragula js -->
    <!-- <link rel="stylesheet" href="assets/libs/glightbox/css/glightbox.min.js" /> -->

    <!-- <link rel="stylesheet" href="assets/js/chat.init.js"> -->
	<script>
	</script>

    <script src="<?php echo BASE_URL_ADMIN; ?>assets/js/app.js"></script>
	<script>
	function DisplayChatMessages(id){
		console.log(id);
		$.ajax({
			url: "api/getAllOnlineCmpyDetails.php" + "?user_id=" + id,
			method: 'GET',
			success: function(data) {
				
				var resp = data['data'];
				if(data['data'].length == 0){
					var noChats = `
								<li>
									<div class="conversation-list"> No Chats yet
									</div>
								</li>
								`;
					$("#chatConversations").html(noChats);
				}
				else{
					for(var i=0;i<resp.length;i++){
						//username
						$("#useridVal").val(id);
						var username = resp[i]['email'].split("@"); 
						$("#username").html(username[0]);
						if(resp[i]['ismessaged'] == 'no'){
							var noChats = `
										<li>
											<div class="conversation-list"> No Chats yet
											</div>
										</li>
										`;
							$("#chatConversations").html(noChats);
						}
						else{
							var html = '';
							for(var i=0;i<resp.length;i++){
								var createdAt = resp[i].created_at.split(" ");
								createdAt = createdAt[1].substring(0,5);
								var username = resp[i].email.split('@');
								if(resp[i].message_type == "s"){
									html += `
											<li>
												<div class="conversation-list">
													<div class="chat-avatar">
														<img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-6.png" alt="avatar-2">
													</div>
													<div class="ctext-wrap">
														<div class="conversation-name">${username[0]}</div>
														<div class="chat-bubble chat-bubble-primary">
															<p class="mb-0">
																${resp[i].message}
															</p>
														</div>
														<p class="chat-time mb-0"><i
																class="mdi mdi-clock-outline align-middle me-1"></i> ${createdAt}
														</p>
													</div>
												</div>
											</li>
											`;
								}
								else{
									html += `<li class="right">
												<div class="conversation-list">
													<div class="chat-avatar">
														<img src="<?php echo BASE_URL_ADMIN; ?>assets/images/users/avatar-6.png" alt="avatar-2">
													</div>
													<div class="ctext-wrap">
														<div class="conversation-name">${username[0]}</div>
														<div class="chat-bubble chat-bubble-primary">
															<p class="mb-0">
																${resp[i].message}
															</p>
														</div>
														<p class="chat-time mb-0"><i
																class="mdi mdi-clock-outline align-middle me-1"></i> ${createdAt}
														</p>
													</div>
												</div>
											</li>
											`;
								}
							}
							$("#chatConversations").html(html);
						}
					}
				}
			},
			error: function(err) {
				console.error('Error:', err);
			}
		});
	}
	function sendMessage(){
		id = $("#useridVal").val();
		$("#useridVal").val('');
		$("#currentChatId").val(id);
		message = $("#chatTextMessage").val();
		$.ajax({
			url: "api/sendMessageToUser.php" + "?user_id=" + id+"&message="+message,
			method: 'GET',
			success: function(data) {
				DisplayChatMessages($userid);
			},
			error: function(err) {
				console.error('Error:', err);
			}
		});
	}
	</script>

</body>

</html>