<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Kanban Board | Emfob - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Emfob" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    
    <!-- dark layout js -->
    <script src="assets/js/pages/layout.js"></script>

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- simplebar css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Dragula css -->
    <link rel="stylesheet" href="assets/libs/dragula/dragula.min.css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        
        <!-- Start topbar -->
        <header id="page-topbar">
            <div class="navbar-header">

                <!-- Logo -->

                <!-- Start Navbar-Brand -->
                <div class="navbar-logo-box">
                    <a href="index.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="logo-sm-dark" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="logo-dark" height="18">
                        </span>
                    </a>

                    <a href="index.php" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="logo-light" height="18">
                        </span>
                    </a>

                    <button type="button" class="btn btn-sm top-icon sidebar-btn" id="sidebar-btn">
                        <i class="mdi mdi-menu-open align-middle fs-19"></i>
                    </button>
                </div>
                <!-- End navbar brand -->

                <!-- Start menu -->
                <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
                    <div class="d-flex align-items-center gap-2">
                        <div class="dropdown d-none d-lg-block">
                            <button type="button" class="btn btn-primary btn-sm fs-14 d-inline" data-bs-toggle="dropdown">
                                Apps
                                <i class="mdi mdi-chevron-down align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-start dropdown-menu-animated">
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-icon"><i class="fa fa-boxes"></i></div>
                                    <span class="dropdown-content">Inventory Manager</span>
                                    <div class="dropdown-addon"><span class="badge badge-warning rounded-pill">20</span></div>
                                </a>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-icon"><i class="fa fa-project-diagram"></i></div>
                                        <span class="dropdown-content">Project manager</span>
                                        <div class="dropdown-addon"><i class="mdi mdi-chevron-right align-middle"></i></div>
                                    </a>
                                    <div class="dropdown-submenu-menu dropdown-submenu-end">
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Create project</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Delete project</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Ongoing project</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Completed project</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Urgent project</span></a>
                                    </div>
                                </div>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-icon"><i class="fa fa-tasks"></i></div>
                                        <span class="dropdown-content">Task manager</span>
                                        <div class="dropdown-addon"><i class="mdi mdi-chevron-right align-middle"></i></div>
                                    </a>
                                    <div class="dropdown-submenu-menu dropdown-submenu-end">
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Show task</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Assign task</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Assign member</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Completed task</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Urgent task</span></a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-icon"><i class="fa fa-dollar-sign"></i></div>
                                    <span class="dropdown-content">Invoice</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="apps-contact.php" class="dropdown-item">
                                    <div class="dropdown-icon"><i class="fa fa-user-cog"></i></div>
                                    <span class="dropdown-content">My Account</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-block">
                            <button type="button" class="btn btn-primary btn-sm fs-14" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                Features
                                <i class="mdi mdi-chevron-down align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-start dropdown-menu-lg-widest dropdown-menu-widest dropdown-menu-animated bg-primary-subtle overflow-hidden">
                                <div class="dropdown-row justify-content-center">
                                    <div class="p-2 menu-image">
                                        <img src="assets/images/mega-menu.png" alt="mega-menu image" class="img-fluid" style="height: 200px;">
                                    </div>
                                    <div class="dropdown-col">
                                        <h2 class="">Welcome back!</h2>
                                        <p class="text-muted mb-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, commodi hic qui aspernatur doloremque quos tempora placeat culpa illum, voluptatibus delectus provident cumque
                                            aliquid enim, laborum aliquam. Quod, perferendis unde.
                                        </p>
                                        <div class="mt-3">
                                            <a href="auth-login.php" class="btn btn-dark btn-wider">Login</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-col border-start border-primary border-opacity-50">
                                        <h4 class="dropdown-header">Features</h4>
                                        <div class="grid-nav grid-nav-action">
                                            <div class="grid-nav-row">
                                                <a href="index.php" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-window-restore"></i></div>
                                                    <span class="grid-nav-content">Dashboard</span>
                                                </a>
                                                <a href="apps-kanban.php" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-clipboard"></i></div>
                                                    <span class="grid-nav-content">TODO List</span>
                                                </a>
                                                <a href="#" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-question-circle"></i></div>
                                                    <span class="grid-nav-content">Help Center</span>
                                                </a>
                                            </div>
                                            <div class="grid-nav-row">
                                                <a href="#" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-images"></i></div>
                                                    <span class="grid-nav-content">Gallery</span>
                                                </a>
                                                <a href="#" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-chart-bar"></i></div>
                                                    <span class="grid-nav-content">Scrumboard</span>
                                                </a>
                                                <a href="#" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-bookmark"></i></div>
                                                    <span class="grid-nav-content">Docs</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-col border-start border-primary border-opacity-50">
                                        <h4 class="dropdown-header">Tools</h4>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Components</span> </a>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Form Wizard</span> </a>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Documentation</span> </a>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Knowledge Base</span> </a>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Inventory Manager</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!--Start App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fab fa-sistrix fs-17 align-middle"></span>
                            </div>
                        </form>
                        <!--End App Search-->

                        <!-- Start Notification -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm top-icon" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell align-middle"></i>
                                <span class="btn-marker"><i class="marker marker-dot text-danger"></i><span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3 bg-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-white m-0"><i class="far fa-bell me-2"></i> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="badge bg-info-subtle text-info"> 8+</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-primary me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-file-document-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New report has been recived</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-success me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-cart-variant"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Last order was completed</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-danger me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-account-group"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Completed meeting canceled</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 5 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-warning me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-send-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New feedback received</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 6 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-secondary me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-download-box"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New update was available</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-info me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-hexagram-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your password was changed</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 2 day ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Notification -->

                        <!-- Start Activities -->
                        <div class="d-inline-block activities">
                            <button type="button" class="btn btn-sm top-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-rightsidabar">
                                <i class="fas fa-table align-middle"></i>
                            </button>
                        </div>
                        <!-- End Activities -->

                        <!-- Start Profile -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded avatar-2xs p-0" src="assets/images/users/avatar-6.png" alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                                <div class="card border-0">
                                    <div class="card-header bg-primary rounded-0">
                                        <div class="rich-list-item w-100 p-0">
                                            <div class="rich-list-prepend">
                                                <div class="avatar avatar-label-light avatar-circle">
                                                    <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                                </div>
                                            </div>
                                            <div class="rich-list-content">
                                                <h3 class="rich-list-title text-white">Charlie Stone</h3>
                                                <span class="rich-list-subtitle text-white">admin@codubucks.in</span>
                                            </div>
                                            <div class="rich-list-append"><span class="badge badge-label-light fs-6">6+</span></div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                                            <div class="grid-nav-row">
                                                <a href="apps-contact.php" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-address-card"></i></div>
                                                    <span class="grid-nav-content">Profile</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-comments"></i></div>
                                                    <span class="grid-nav-content">Messages</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-clone"></i></div>
                                                    <span class="grid-nav-content">Activities</span>
                                                </a>
                                            </div>
                                            <div class="grid-nav-row">
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-calendar-check"></i></div>
                                                    <span class="grid-nav-content">Tasks</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-sticky-note"></i></div>
                                                    <span class="grid-nav-content">Notes</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-bell"></i></div>
                                                    <span class="grid-nav-content">Notification</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer card-footer-bordered rounded-0"><a href="auth-login.php" class="btn btn-label-danger">Sign out</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Profile -->
                    </div>
                </div>
                <!-- End menu -->
            </div>
        </header>
        <!-- End topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="sidebar-left">

            <div data-simplebar class="h-100">

                <!--- Sidebar-menu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="left-menu list-unstyled" id="side-menu">
                        <li>
                            <a href="index.php" class="">
                                <i class="fas fa-desktop"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-title">Elements</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-palette"></i>
                                <span>Base</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-accordions.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Accordions</a></li>
                                <li><a href="ui-alerts.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Alerts</a></li>
                                <li><a href="ui-badge.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Badges</a></li>
                                <li><a href="ui-breadcrumb.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Breadcrumb</a></li>
                                <li><a href="ui-buttons.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Buttons</a></li>
                                <li><a href="ui-buttons-group.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Button Group</a></li>
                                <li><a href="ui-cards.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Cards</a></li>
                                <li><a href="ui-colors.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Colors</a></li>
                                <li><a href="ui-dropdowns.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Dropdowns</a></li>
                                <li><a href="ui-list-group.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> List Group</a></li>
                                <li><a href="ui-maker.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Makers</a></li>
                                <li><a href="ui-modals.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Modals</a></li>
                                <li><a href="ui-nav.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Navigation</a></li>
                                <li><a href="ui-offcanvas.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Offcavas</a></li>
                                <li><a href="ui-pagination.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Pagination</a></li>
                                <li><a href="ui-placeholder.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Placeholder</a></li>
                                <li><a href="ui-popover.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Popover</a></li>
                                <li><a href="ui-progress-bars.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Progress bar</a></li>
                                <li><a href="ui-spinner.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Spinners</a></li>
                                <li><a href="ui-tabs.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tabs</a></li>
                                <li><a href="ui-tables.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tables</a></li>
                                <li><a href="ui-tooltip.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tooltips</a></li>
                                <li><a href="ui-typography.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Typography</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-adjust"></i>
                                <span>Advanced</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-avatar.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Avatar</a></li>
                                <li><a href="ui-blockUI.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Block UI</a></li>
                                <li><a href="ui-slick-carousel.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Carousel</a></li>
                                <li><a href="ui-chat.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Chat</a></li>
                                <li><a href="ui-context-menu.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Context menu</a></li>
                                <li><a href="ui-grid-nav.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Grid nav</a></li>
                                <li><a href="ui-rich-list.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Rich list</a></li>
                                <li><a href="ui-sortable.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Sortable</a></li>
                                <li><a href="ui-sweet-alert.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Sweetalert 2</a></li>
                                <li><a href="ui-timeline.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Timeline</a></li>
                                <li><a href="ui-toaster.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Toaster</a></li>
                                <li><a href="ui-treeview.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tree View</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="fa fa-icons"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-materialdesign.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Material Design</a></li>
                                <li><a href="icons-fontawesome.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Font awesome 5</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-window-restore"></i>
                                <span>Cards</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-card-base.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Base</a></li>
                                <li><a href="ui-card-draggable.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Draggable</a></li>
                                <li><a href="ui-card-tab.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tab</a></li>
                                <li><a href="ui-card-tool.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tool</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-shapes"></i>
                                <span>Widget</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="widget-general.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> General</a></li>
                                <li><a href="widget-chart.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Chart</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Data</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow "><i class="fa fa-chart-pie align-middle"></i> Apexcharts</a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-apex-line.php"><i class="mdi mdi-checkbox-blank-circle"></i> Line</a></li>
                                <li><a href="charts-apex-area.php"><i class="mdi mdi-checkbox-blank-circle"></i> Area</a></li>
                                <li><a href="charts-apex-column.php"><i class="mdi mdi-checkbox-blank-circle"></i> Column</a></li>
                                <li><a href="charts-apex-bar.php"><i class="mdi mdi-checkbox-blank-circle"></i> Bar</a></li>
                                <li><a href="charts-apex-mixed.php"><i class="mdi mdi-checkbox-blank-circle"></i> Mixed/Combo</a></li>
                                <li><a href="charts-apex-range.php"><i class="mdi mdi-checkbox-blank-circle"></i> Range Area</a></li>
                                <li><a href="charts-apex-timeline.php"><i class="mdi mdi-checkbox-blank-circle"></i> Timeline</a></li>
                                <li><a href="charts-apex-candle.php"><i class="mdi mdi-checkbox-blank-circle"></i> Candlestick</a></li>
                                <li><a href="charts-apex-box&whisker.php"><i class="mdi mdi-checkbox-blank-circle"></i> Box & Whisker</a></li>
                                <li><a href="charts-apex-pie.php"><i class="mdi mdi-checkbox-blank-circle"></i> Pie/Donut</a></li>
                                <li><a href="charts-apex-radar.php"><i class="mdi mdi-checkbox-blank-circle"></i> Radar</a></li>
                                <li><a href="charts-apex-polar.php"><i class="mdi mdi-checkbox-blank-circle"></i> Polar Area</a></li>
                                <li><a href="charts-apex-radial.php"><i class="mdi mdi-checkbox-blank-circle"></i> Radial/Circle</a></li>
                                <li><a href="charts-apex-bubble.php"><i class="mdi mdi-checkbox-blank-circle"></i> Bubble</a></li>
                                <li><a href="charts-apex-scatter.php"><i class="mdi mdi-checkbox-blank-circle"></i> Scatter</a></li>
                                <li><a href="charts-apex-heatmap.php"><i class="mdi mdi-checkbox-blank-circle"></i> Heatmap</a></li>
                                <li><a href="charts-apex-treemap.php"><i class="mdi mdi-checkbox-blank-circle"></i> Treemap</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fas fa-table"></i>
                                <span>Datatable</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow "><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Basic</a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="datatable-base.php"><i class="mdi mdi-circle-outline"></i> Base</a></li>
                                        <li><a href="datatable-footer.php"><i class="mdi mdi-circle-outline"></i> Footer</a></li>
                                        <li><a href="datatable-scrollable.php"><i class="mdi mdi-circle-outline"></i> Scrollable</a></li>
                                        <li><a href="datatable-pagination.php"><i class="mdi mdi-circle-outline"></i> Pagination</a></li>
                                        <li><a href="datatable-page-length.php"><i class="mdi mdi-circle-outline"></i> Length menu</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#!" class="has-arrow "><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Advanced</a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="datatable-adv-col-render.php"><i class="mdi mdi-circle-outline"></i> Column rendering</a></li>
                                        <li><a href="datatable-adv-col-visibility.php"><i class="mdi mdi-circle-outline"></i> Column visibility</a></li>
                                        <li><a href="datatable-adv-footer-callback.php"><i class="mdi mdi-circle-outline"></i> Footer callback</a></li>
                                        <li><a href="datatable-adv-multi-control.php"><i class="mdi mdi-circle-outline"></i> Multiple controls</a></li>
                                        <li><a href="datatable-adv-row-callback.php"><i class="mdi mdi-circle-outline"></i> Row callback</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#!" class="has-arrow "><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Extension</a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="datatable-ext-autofill.php"><i class="mdi mdi-circle-outline"></i> Auto fill</a></li>
                                        <li><a href="datatable-ext-buttons.php"><i class="mdi mdi-circle-outline"></i> Buttons</a></li>
                                        <li><a href="datatable-ext-col-reorder.php"><i class="mdi mdi-circle-outline"></i> Column reorder</a></li>
                                        <li><a href="datatable-ext-fixed-header.php"><i class="mdi mdi-circle-outline"></i> Fixed header</a></li>
                                        <li><a href="datatable-ext-fixed-column.php"><i class="mdi mdi-circle-outline"></i> Fixed column</a></li>
                                        <li><a href="datatable-ext-keytable.php"><i class="mdi mdi-circle-outline"></i> Key table</a></li>
                                        <li><a href="datatable-ext-row-group.php"><i class="mdi mdi-circle-outline"></i> Row group</a></li>
                                        <li><a href="datatable-ext-row-reorder.php"><i class="mdi mdi-circle-outline"></i> Row reorder</a></li>
                                        <li><a href="datatable-ext-scrollable.php"><i class="mdi mdi-circle-outline"></i> Scrollable</a></li>
                                        <li><a href="datatable-ext-searchpanes.php"><i class="mdi mdi-circle-outline"></i> Search panes</a></li>
                                        <li><a href="datatable-ext-select.php"><i class="mdi mdi-circle-outline"></i> Select</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title">Form</li>

                        <li><a href="form-base.php"><i class="fa fa-dice"></i> <span>Base</span></a></li>

                        <li>
                            <a href="#!" class="has-arrow"><i class="fa fa-fill-drip"></i> <span>Advanced</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-autosize.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Autosize</a></li>
                                <li><a href="form-bs-maxlength.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Bootstrap maxlength</a></li>
                                <li><a href="form-clipboard.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Clipboard</a></li>
                                <li><a href="form-datepicker.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Date picker</a></li>
                                <li><a href="form-datetimepicker.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Date time picker</a></li>
                                <li><a href="form-rangepicker.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Range picker</a></li>
                                <li><a href="form-inputmask.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Input mask</a></li>
                                <li><a href="form-select2.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Select2</a></li>
                                <li><a href="form-rangeslider.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Slider</a></li>
                                <li><a href="form-touchspin.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Touchspin</a></li>
                                <li><a href="form-typeahead.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Typeahead</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#!" class="has-arrow"><i class="fa fa-pencil-ruler"></i> <span>Editors</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-basic-editors.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Basic</a></li>
                                <li><a href="form-bubble-editors.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Bubble</a></li>
                                <li><a href="form-complex-editors.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Complex</a></li>
                            </ul>
                        </li>

                        <li><a href="form-input-group.php"><i class="fa fa-th-list"></i> <span>Group</span></a></li>
                        <li><a href="form-layout.php"><i class="fa fa-ruler-combined"></i> <span>Layout</span></a></li>
                        <li><a href="form-validation.php"><i class="fa fa-check"></i> <span>Validation</span></a></li>

                        <li class="menu-title">Pages</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-unlock-alt"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="auth-login.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Login</a></li>
                                <li><a href="auth-register.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Register</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow ">
                                <i class="fa fa-unlink"></i>
                                <span>Error</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-404.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Error 404</a></li>
                                <li><a href="pages-500.php"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Error 500</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="pages-starter.php"><i class="fas fa-pager"></i> <span>Starter Page</span></a>
                        </li>

                        <li>
                            <a href="pages-pricing.php"><i class="fas fa-dollar-sign"></i> <span>Pricing</span></a>
                        </li>

                        <li>
                            <a href="pages-faqs.php"><i class="fas fa-question"></i> <span>FAQs</span></a>
                        </li>

                        <li>
                            <a href="pages-comingsoon.php"><i class="fas fa-tape"></i> <span>Coming Soon</span></a>
                        </li>

                        <li class="menu-title">Apps</li>

                        <li>
                            <a href="apps-chat.php" class="">
                                <i class="fas fa-comment"></i>
                                <span>Chat</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-kanban.php" class="">
                                <i class="fas fa-grip-horizontal"></i>
                                <span>Kanban Board</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-contact.php" class="">
                                <i class="fas fa-id-badge"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->


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
                                <h4 class="mb-sm-0">Kanban Board</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Kanban Board</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="card">
                        <div class="card-body">
                            <div class="row g-2">
                                <div class="col-auto">
                                    <div class="search-box">
                                        <input type="text" class="form-control search" id="search-task-options" placeholder="Search for project, tasks...">
                                        <i class="fab fa-sistrix search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-auto ms-sm-auto">
                                    <div class="hstack gap-2">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createboardModal"><i class="ri-add-line align-bottom me-1"></i> New Board</button>
                                    </div>
                                </div>
                                <!--end col-->

                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->

                    <div class="row">
                        <div class="col-xl-9">
                            <div class="tasks-board mb-3" id="kanbanboard">
                                <div class="tasks-list">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-14 text-uppercase fw-semibold mb-0">started</h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="avatar-2xs bg-success text-white text-center rounded-2">
                                                <i class="mdi mdi-plus-thick align-middle lh-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar class="tasks-wrapper px-3 mx-n3">
                                        <div id="unassigned-task" class="tasks">
                                            <div class="card tasks-box">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div>
                                                            <span class="badge badge-label-danger">Web Design</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="text-muted" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-edit-2-line align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted">Wire framing, mockups, clients collaboration.</p>

                                                    <div class="mb-3">
                                                        <h6 class="text-muted text-end mb-2"><span class="text-secondary">15%</span></h6>
                                                        <div class="progress rounded-3 progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group avatar-group-sm">
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Alexis">
                                                                    <img src="assets/images/users/avatar-6.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy">
                                                                    <img src="assets/images/users/avatar-4.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <ul class="link-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-question-answer-line align-bottom"></i> 19</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-attachment-2 align-bottom"></i> 02</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                            <div class="card tasks-box">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div>
                                                            <span class="badge badge-label-warning">App development</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="text-muted" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-edit-2-line align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted">Profile Page means a web page accessible to the public or to guests.</p>

                                                    <div class="mb-3">
                                                        <h6 class="text-muted text-end mb-2"><span class="text-secondary">56%</span></h6>
                                                        <div class="progress rounded-3 progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group avatar-group-sm">
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Alexis">
                                                                    <img src="assets/images/users/avatar-1.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy">
                                                                    <img src="assets/images/users/avatar-2.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy">
                                                                    <span class="fs-16 mt-1">+</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <ul class="link-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-question-answer-line align-bottom"></i> 11</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-attachment-2 align-bottom"></i> 05</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                        </div>
                                        <!--end tasks-->
                                    </div>
                                    <div class="my-3">
                                        <button class="btn btn-label-info w-100" data-bs-toggle="modal" data-bs-target="#creatertaskModal">Add More</button>
                                    </div>
                                </div>
                                <!--end tasks-list-->
                                <div class="tasks-list">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-14 text-uppercase fw-semibold mb-0">On Going</h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="avatar-2xs bg-success text-white text-center rounded-2">
                                                <i class="mdi mdi-plus-thick align-middle lh-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar class="tasks-wrapper px-3 mx-n3">
                                        <div id="todo-task" class="tasks">
                                            <div class="card tasks-box">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div>
                                                            <span class="badge badge-label-info">Mobile App</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="text-muted" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-edit-2-line align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted">Landing page template with clean, minimal and modern design.</p>

                                                    <div class="mb-3">
                                                        <h6 class="text-muted text-end mb-2"><span class="text-secondary">30%</span></h6>
                                                        <div class="progress rounded-3 progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group avatar-group-sm">
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Alexis">
                                                                    <img src="assets/images/users/avatar-2.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy">
                                                                    <img src="assets/images/users/avatar-1.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy">
                                                                    <img src="assets/images/users/avatar-4.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy">
                                                                    <span class="fs-16 mt-1">+</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <ul class="link-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-question-answer-line align-bottom"></i> 06</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-attachment-2 align-bottom"></i> 03</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                            <div class="card tasks-box">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div>
                                                            <span class="badge badge-label-success">Dashboard</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="text-muted" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-edit-2-line align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted">Sales and marketing are two business functions within an organization.</p>

                                                    <div class="mb-3">
                                                        <span class="badge badge-label-secondary">Logo</span>
                                                        <span class="badge badge-label-secondary">Layout</span>
                                                        <span class="badge badge-label-secondary">Admin</span>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group avatar-group-sm">
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Alexis">
                                                                    <img src="assets/images/users/avatar-3.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <ul class="link-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-question-answer-line align-bottom"></i> 08</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-attachment-2 align-bottom"></i> 10</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <button class="btn btn-label-info w-100" data-bs-toggle="modal" data-bs-target="#creatertaskModal">Add More</button>
                                    </div>
                                </div>
                                <!--end tasks-list-->

                                <div class="tasks-list">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-14 text-uppercase fw-semibold mb-0">Completed</h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="avatar-2xs bg-success text-white text-center rounded-2">
                                                <i class="mdi mdi-plus-thick align-middle lh-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar class="tasks-wrapper px-3 mx-n3">
                                        <div id="inprogress-task" class="tasks">
                                            <div class="card tasks-box">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div>
                                                            <span class="badge badge-label-warning">Web Development</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="text-muted" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-edit-2-line align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted">Change app icons on Android: How do you change the look of your apps.</p>

                                                    <div class="mb-3">
                                                        <h6 class="text-muted text-end mb-2"><span class="text-secondary">90%</span></h6>
                                                        <div class="progress rounded-3 progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <span class="badge badge-label-secondary">Logo</span>
                                                        <span class="badge badge-label-secondary">Layout</span>
                                                        <span class="badge badge-label-secondary">Admin</span>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group avatar-group-sm">
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Alexis">
                                                                    <img src="assets/images/users/avatar-5.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy">
                                                                    <img src="assets/images/users/avatar-2.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <ul class="link-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-question-answer-line align-bottom"></i> 08</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-attachment-2 align-bottom"></i> 07</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                            <div class="card tasks-box">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div>
                                                            <span class="badge badge-label-dark">Landing Page</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="text-muted" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item" href="#!"><i class="ri-edit-2-line align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted">An essential part of strategic planning is running a product feature analysis.</p>

                                                    <div class="mb-3">
                                                        <h6 class="text-muted text-end mb-2"><span class="text-secondary">70%</span></h6>
                                                        <div class="progress rounded-3 progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group avatar-group-sm">
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Alexis">
                                                                    <img src="assets/images/users/avatar-6.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar avatar-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy">
                                                                    <img src="assets/images/users/avatar-4.png" alt="" class="rounded-circle avatar-2xs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <ul class="link-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-question-answer-line align-bottom"></i> 12</a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-attachment-2 align-bottom"></i> 09</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <button class="btn btn-label-info w-100" data-bs-toggle="modal" data-bs-target="#creatertaskModal">Add More</button>
                                    </div>
                                </div>
                                <!--end tasks-list-->
                            </div>
                            <!--end task-board-->
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bg-primary bg-opacity-10 p-3 d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-1">Selected</p>
                                            <h4 class="fs-5">Design Team</h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="avatar-md rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center">
                                                <i class="mdi mdi-account-group fs-1"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div id="gradient_radialbar" data-colors='["--bs-success"]' class="apex-charts" dir="ltr"></div>
                                    </div>

                                    <div class="mt-3">
                                        <h4 class="fs-5">Projects</h4>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="bg-info-subtle p-3 rounded-3">
                                                    <p class="text-muted mb-1">TOTAL</p>
                                                    <h5 class=""><span class="border-start border-info border-4 me-2 rounded"></span> 144</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-danger-subtle p-3 rounded-3">
                                                    <p class="text-muted mb-1">COMPLETED</p>
                                                    <h5 class=""><span class="border-start border-danger border-4 me-2 rounded"></span> 56</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-success-subtle p-3 rounded-3">
                                                    <p class="text-muted mb-1">IN PROGRESS</p>
                                                    <h5 class=""><span class="border-start border-success border-4 me-2 rounded"></span> 72</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-warning-subtle p-3 rounded-3">
                                                    <p class="text-muted mb-1">WAITING</p>
                                                    <h5 class=""><span class="border-start border-warning border-4 me-2 rounded"></span> 24</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center justify-content-between border p-3 rounded">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-danger d-flex align-items-center justify-content-center rounded flex-shrink-0">
                                                    <i class="mdi mdi-clock-time-eight-outline fs-22 text-white mt-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="text-muted mb-1">Sunday 3, June</p>
                                                    <h5 class="fs-13 mb-0">08:00-11:00</h5>
                                                </div>
                                            </div>
                                            <div class="">
                                                <i class="mdi mdi-grease-pencil fs-20"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border p-3 rounded mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-info d-flex align-items-center justify-content-center rounded flex-shrink-0">
                                                    <i class="mdi mdi-message-processing-outline fs-22 text-white mt-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <p class="text-muted mb-1">Thursday 15, June</p>
                                                    <h5 class="fs-13 mb-0">Internal message</h5>
                                                </div>
                                            </div>
                                            <div class="">
                                                <i class="mdi mdi-read fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="addmemberModal" tabindex="-1" aria-labelledby="addmemberModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-soft-warning">
                                    <h5 class="modal-title" id="addmemberModalLabel">Add Member</h5>
                                    <button type="button" class="btn-close" id="btn-close-member" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <label for="submissionidInput" class="form-label">Submission ID</label>
                                                <input type="number" class="form-control" id="submissionidInput" placeholder="Submission ID">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="profileimgInput" class="form-label">Profile Images</label>
                                                <input class="form-control" type="file" id="profileimgInput">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <label for="firstnameInput" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstnameInput" placeholder="Enter firstname">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <label for="lastnameInput" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastnameInput" placeholder="Enter lastname">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="designationInput" class="form-label">Designation</label>
                                                <input type="text" class="form-control" id="designationInput" placeholder="Designation">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="titleInput" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="titleInput" placeholder="Title">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <label for="numberInput" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="numberInput" placeholder="Phone number">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <label for="joiningdateInput" class="form-label">Joining Date</label>
                                                <input type="text" class="form-control" id="joiningdateInput" data-provider="flatpickr" placeholder="Select date">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="emailInput" class="form-label">Email ID</label>
                                                <input type="email" class="form-control" id="emailInput" placeholder="Email">
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="ri-close-line align-bottom me-1"></i> Close</button>
                                    <button type="button" class="btn btn-success" id="addMember">Add Member</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end add member modal-->

                    <div class="modal fade" id="createboardModal" tabindex="-1" aria-labelledby="createboardModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-soft-info">
                                    <h5 class="modal-title" id="createboardModalLabel">Add Board</h5>
                                    <button type="button" class="btn-close" id="addBoardBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="boardName" class="form-label">Board Name</label>
                                                <input type="text" class="form-control" id="boardName" placeholder="Enter board name">
                                            </div>
                                            <div class="mt-4">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success" id="addNewBoard">Add Board</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end add board modal-->

                    <div class="modal fade" id="creatertaskModal" tabindex="-1" aria-labelledby="creatertaskModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-soft-info">
                                    <h5 class="modal-title" id="creatertaskModalLabel">Create New Task</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <label for="projectName" class="form-label">Project Name</label>
                                                <input type="text" class="form-control" id="projectName" placeholder="Enter project name">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="sub-tasks" class="form-label">Task Title</label>
                                                <input type="text" class="form-control" id="sub-tasks" placeholder="Task title">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="task-description" class="form-label">Task Description</label>
                                                <textarea class="form-control" id="task-description" rows="3" placeholder="Task description"></textarea>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Tasks Images</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="tasks-progress" class="form-label">Add Team Member</label>
                                                <div data-simplebar style="height: 95px;">
                                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" value="" id="anna-adame">
                                                                <label class="form-check-label d-flex align-items-center" for="anna-adame">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-1.png" alt="" class="avatar avatar-2xs rounded-circle" />
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Anna Adame
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" value="" id="frank-hook">
                                                                <label class="form-check-label d-flex align-items-center" for="frank-hook">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-3.png" alt="" class="avatar avatar-2xs rounded-circle" />
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Frank Hook
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" value="" id="alexis-clarke">
                                                                <label class="form-check-label d-flex align-items-center" for="alexis-clarke">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-6.png" alt="" class="avatar avatar-2xs rounded-circle" />
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Alexis Clarke
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" value="" id="herbert-stokes">
                                                                <label class="form-check-label d-flex align-items-center" for="herbert-stokes">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-2.png" alt="" class="avatar avatar-2xs rounded-circle" />
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Herbert Stokes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" value="" id="michael-morris">
                                                                <label class="form-check-label d-flex align-items-center" for="michael-morris">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-7.png" alt="" class="avatar avatar-2xs rounded-circle" />
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Michael Morris
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" value="" id="nancy-martino">
                                                                <label class="form-check-label d-flex align-items-center" for="nancy-martino">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-5.png" alt="" class="avatar avatar-2xs rounded-circle" />
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Nancy Martino
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" value="" id="thomas-taylor">
                                                                <label class="form-check-label d-flex align-items-center" for="thomas-taylor">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-8.png" alt="" class="avatar avatar-2xs rounded-circle" />
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Thomas Taylor
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" value="" id="tonya-noble">
                                                                <label class="form-check-label d-flex align-items-center" for="tonya-noble">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-1.png" alt="" class="avatar avatar-2xs rounded-circle" />
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Tonya Noble
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="due-date" class="form-label">Due Date</label>
                                                <input type="text" class="form-control" id="due-date" data-provider="flatpickr" placeholder="Select date">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="categories" class="form-label">Tags</label>
                                                <input type="text" class="form-control" id="categories" placeholder="Enter tag">
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="tasks-progress" class="form-label">Tasks Progress</label>
                                                <input type="text" class="form-control" maxlength="3" id="tasks-progress" placeholder="Enter progress">
                                            </div>
                                            <!--end col-->
                                            <div class="mt-4">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Add Task</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end add board modal-->

                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="delete-btn-close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mt-2 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                            <h4>Are you sure ?</h4>
                                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this tasks ?</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn w-sm btn-danger" id="delete-record">Yes, Delete It!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal -->
                </div>
                <!-- container-fluid -->
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
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="http://Emfob.com/" target="_blank" class="text-muted">Emfob</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div><!-- end main content-->

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
                                    <p class="mb-0">System shutdown <span class="badge badge-label-success">pending</span></p>
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
                                    <p class="mb-0">New order received <span class="badge badge-label-danger">urgent</span></p>
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
                                            <img src="assets/images/users/avatar-1.png" alt="Avatar image" class="avatar-2xs" />
                                        </div>
                                        <div class="avatar avatar-circle">
                                            <img src="assets/images/users/avatar-2.png" alt="Avatar image" class="avatar-2xs" />
                                        </div>
                                        <div class="avatar avatar-circle">
                                            <img src="assets/images/users/avatar-3.png" alt="Avatar image" class="avatar-2xs" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <span class="timeline-time">12:45</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-warning"></i></div>
                            <div class="timeline-content">
                                <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p>
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
                                <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna.</p>
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

    <!-- dragula init js -->
    <script src="assets/libs/dragula/dragula.min.js"></script>

    <!-- dom autoscroll -->
    <script src="assets/libs/dom-autoscroller/dom-autoscroller.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!--taks-kanban-->
    <script src="assets/js/pages/kanban.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>