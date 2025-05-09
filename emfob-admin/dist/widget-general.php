<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Widget-General | Emfob - Admin & Dashboard Template</title>
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
                            <h4 class="mb-sm-0">Widget-General</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                    <li class="breadcrumb-item active">Widget-General</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xxl-8">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between bg-primary-subtle border-primary-subtle">
                                        <div class="card-icon text-muted"><i class="fas fa-laptop-code fs14"></i></div>
                                        <h3 class="card-title">Company income</h3>
                                        <div class="card-addon dropdown">
                                            <button class="btn btn-label-primary py-0 btn-sm dropdown-toggle" data-bs-toggle="dropdown">Option <i class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                                                    <span class="dropdown-content">Report</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                                                    <span class="dropdown-content">Charts</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                                                    <span class="dropdown-content">Statistics</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                    <span class="dropdown-content">Settings</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-primary-subtle" style="background: url('assets/images/widget-1.png'); background-repeat: no-repeat; background-position: bottom left; background-size: 130px;">
                                        <h2 class="-5 text-primary text-end my-3">$237,650</h2>
                                    </div>
                                    <div class="mt-n3 text-center">
                                        <button class="btn btn-info">All Earning</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="nav nav-pills nav-justified widgets-nav mb-4" id="income-tab">
                                            <a class="nav-item nav-link active" id="income-march-tab" data-bs-toggle="tab" href="#income-march">March</a>
                                            <a class="nav-item nav-link" id="income-april-tab" data-bs-toggle="tab" href="#income-april">April</a>
                                            <a class="nav-item nav-link" id="income-mei-tab" data-bs-toggle="tab" href="#income-mei">May</a> <a class="nav-item nav-link" id="income-june-tab" data-bs-toggle="tab" href="#income-june">June</a>
                                        </div>
                                        <div class="tab-content p-0" id="income-tabContent">
                                            <div class="tab-pane fade show active" id="income-march">
                                                <div class="card mb-0">
                                                    <div class="rich-list rich-list-flush">
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$23,050</h4>
                                                                <p class="rich-list-subtitle mb-0">Annual companies taxes</p>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$46,50</h4>
                                                                <p class="rich-list-subtitle mb-0">Avarage product price</p>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$260,700</h4>
                                                                <p class="rich-list-subtitle mb-0">Total annual profit before tax</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="income-april">
                                                <div class="card mb-0">
                                                    <div class="rich-list rich-list-flush">
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$13,000</h4>
                                                                <p class="rich-list-subtitle mb-0">Annual companies taxes</p>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$34,00</h4>
                                                                <p class="rich-list-subtitle mb-0">Avarage product price</p>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$350,650</h4>
                                                                <p class="rich-list-subtitle mb-0">Total annual profit before tax</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="income-mei">
                                                <div class="card mb-0">
                                                    <div class="rich-list rich-list-flush">
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$3,050</h4>
                                                                <p class="rich-list-subtitle mb-0">Annual companies taxes</p>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$16,20</h4>
                                                                <p class="rich-list-subtitle mb-0">Avarage product price</p>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$135,500</h4>
                                                                <p class="rich-list-subtitle mb-0">Total annual profit before tax</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="income-june">
                                                <div class="card mb-0">
                                                    <div class="rich-list rich-list-flush">
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$56,650</h4>
                                                                <p class="rich-list-subtitle mb-0">Annual companies taxes</p>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$35,50</h4>
                                                                <p class="rich-list-subtitle mb-0">Avarage product price</p>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-item">
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">$341,080</h4>
                                                                <p class="rich-list-subtitle mb-0">Total annual profit before tax</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-icon text-muted"><i class="fas fa-sort-amount-up fs-14"></i></div>
                                        <h4 class="card-title">Transaction History</h4>
                                        <div class="card-addon dropdown">
                                            <button class="btn btn-label-primary py-0 btn-sm dropdown-toggle" data-bs-toggle="dropdown">Option <i class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                                                    <span class="dropdown-content">Report</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                                                    <span class="dropdown-content">Charts</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                                                    <span class="dropdown-content">Statistics</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                    <span class="dropdown-content">Settings</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="border-bottom text-center pb-3">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span class="text-primary fs-24 me-2"><i class="fas fa-arrow-circle-right"></i></span>
                                                <h4 class="display-5 mb-0">54</h4>
                                            </div>
                                            <p class="text-muted mb-0">Pending Invoices</p>
                                        </div>
                                        <div class="d-flex justify-content-between py-3">
                                            <p class="text-muted fs-5 mb-0">Invoice details</p>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" data-bs-toggle="dropdown">30 Days <i class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></span>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                    <a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                                                        <span class="dropdown-content">Report</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                                                        <span class="dropdown-content">Charts</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                                                        <span class="dropdown-content">Statistics</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                        <span class="dropdown-content">Settings</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hstack gap-4 justify-content-center pb-3">
                                            <div class="text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="text-info fs-22 me-2"><i class="fas fa-arrow-circle-up"></i></span>
                                                    <h4 class="display-6 mb-0">28</h4>
                                                </div>
                                                <p class="text-muted mb-0">Invoice In</p>
                                            </div>

                                            <div class="text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="text-danger fs-22 me-2"><i class="fas fa-arrow-circle-down"></i></span>
                                                    <h4 class="display-6 mb-0">32</h4>
                                                </div>
                                                <p class="text-muted mb-0">Invoice Out</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h5 class="fs-6 mb-0"><i class="fas fa-arrow-circle-up text-info me-2"></i>Invoice 1</h5>
                                                <p class="text-muted mb-0">+1,235</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h5 class="fs-6 mb-0"><i class="fas fa-arrow-circle-down text-danger me-2"></i>Invoice 2</h5>
                                                <p class="text-muted mb-0">-152</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h5 class="fs-6 mb-0"><i class="fas fa-arrow-circle-down text-danger me-2"></i>Invoice 3</h5>
                                                <p class="text-muted mb-0">+13,487</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h5 class="fs-6 mb-0"><i class="fas fa-arrow-circle-up text-info me-2"></i>Invoice 4</h5>
                                                <p class="text-muted mb-0">-1,523</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-icon text-muted"><i class="fa fa-boxes"></i></div>
                                        <h3 class="card-title">Product sales</h3>
                                        <div class="card-addon dropdown">
                                            <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v fs-12"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                                    <span class="dropdown-content">Mark as read</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                                    <span class="dropdown-content">Delete</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">
                                                    <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                    <span class="dropdown-content">Settings</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="rich-list-title mb-0">Sales growth</h2>
                                                <p class="rich-list-subtitle mb-0">62%</p>
                                            </div>
                                            <div class="progress progress-sm" style="height:8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 62%"></div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="rich-list-title mb-0">Product growth</h2>
                                                <p class="rich-list-subtitle mb-0">34%</p>
                                            </div>
                                            <div class="progress progress-sm" style="height:8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 34%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="rich-list-title mb-0">Market share</h2>
                                                <p class="rich-list-subtitle mb-0">40%</p>
                                            </div>
                                            <div class="progress progress-sm" style="height:8px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 40%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-icon text-muted"><i class="fa fa-chalkboard fs14"></i></div>
                                        <h3 class="card-title">Company summary</h3>
                                        <div class="card-addon">
                                            <div class="dropdown">
                                                <button class="btn btn-label-primary btn-sm py-0 dropdown-toggle" data-bs-toggle="dropdown">June, 2020 <i class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                    <a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                                                        <span class="dropdown-content">Report</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                                                        <span class="dropdown-content">Charts</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                                                        <span class="dropdown-content">Statistics</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                        <span class="dropdown-content">Settings</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <div class="border rounded p-2">
                                                    <p class="text-muted mb-2">Server Load</p>
                                                    <h4 class="fs-16 mb-2">489</h4>
                                                    <div class="progress progress-sm" style="height:4px;">
                                                        <div class="progress-bar bg-success" style="width: 49.4%"></div>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-1">49.4% <span>Avg</span></p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="border rounded p-2">
                                                    <p class="text-muted mb-2">Members online</p>
                                                    <h4 class="fs-16 mb-2">3,450</h4>
                                                    <div class="progress progress-sm" style="height:4px;">
                                                        <div class="progress-bar bg-danger" style="width: 34.6%"></div>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-1">34.6% <span>Avg</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 mt-2">
                                            <div class="col-6">
                                                <div class="border rounded p-2">
                                                    <p class="text-muted mb-2">Today's revenue</p>
                                                    <h4 class="fs-16 mb-2">$18,390</h4>
                                                    <div class="progress progress-sm" style="height:4px;">
                                                        <div class="progress-bar bg-warning" style="width: 20%"></div>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-1">$37,578 <span>Avg</span></p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="border rounded p-2">
                                                    <p class="text-muted mb-2">Expected profit</p>
                                                    <h4 class="fs-16 mb-2">$23,461</h4>
                                                    <div class="progress progress-sm" style="height:4px;">
                                                        <div class="progress-bar bg-info" style="width: 60%"></div>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-1">$23,461 <span>Avg</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header card-header-bordered">
                                        <div class="card-icon text-muted"><i class="fa fa-user-tag fs14"></i></div>
                                        <h3 class="card-title">User feeds</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="rich-list rich-list-flush">
                                            <div class="flex-column align-items-stretch">
                                                <div class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-xs">
                                                            <div class=""><img src="assets/images/users/avatar-1.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content">
                                                        <h4 class="rich-list-title mb-1">Airi Satou</h4>
                                                        <p class="rich-list-subtitle mb-0">Accountant</p>
                                                    </div>
                                                    <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button></div>
                                                </div>
                                            </div>
                                            <div class="flex-column align-items-stretch">
                                                <div class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-xs">
                                                            <div class=""><img src="assets/images/users/avatar-2.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content">
                                                        <h4 class="rich-list-title mb-1">Cedric Kelly</h4>
                                                        <p class="rich-list-subtitle mb-0">Senior Developer</p>
                                                    </div>
                                                    <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button></div>
                                                </div>
                                            </div>
                                            <div class="flex-column align-items-stretch">
                                                <div class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-xs">
                                                            <div class=""><img src="assets/images/users/avatar-4.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content">
                                                        <h4 class="rich-list-title mb-1">Brielle Williamson</h4>
                                                        <p class="rich-list-subtitle mb-0">Integration Specialist</p>
                                                    </div>
                                                    <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button></div>
                                                </div>
                                            </div>
                                            <div class="flex-column align-items-stretch">
                                                <div class="rich-list-item">
                                                    <div class="rich-list-prepend">
                                                        <div class="avatar avatar-xs">
                                                            <div class=""><img src="assets/images/users/avatar-6.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="rich-list-content">
                                                        <h4 class="rich-list-title mb-1">Sonya Frost</h4>
                                                        <p class="rich-list-subtitle mb-0">Software Engineer</p>
                                                    </div>
                                                    <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar avatar-xs avatar-label-danger">
                                                <i class="fas fa-chart-line fs-18"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h4 class="fs-14 mb-1">Total Earning</h4>
                                                <p class="text-muted fs-12 mb-0">From previous period</p>
                                            </div>
                                            <p class="text-muted mb-0">5,40,549</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar avatar-xs avatar-label-info">
                                                <i class="fas fa-crown fs-16"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h4 class="fs-14 mb-1">Sales</h4>
                                                <p class="text-muted fs-12 mb-0">From previous period</p>
                                            </div>
                                            <p class="text-muted mb-0">1,205,677</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar avatar-xs avatar-label-warning">
                                                <i class="fas fa-chart-bar fs-18"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h4 class="fs-14 mb-1">Purchase</h4>
                                                <p class="text-muted fs-12 mb-0">From previous period</p>
                                            </div>
                                            <p class="text-muted mb-0">48,430,039</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Project Pipeline</h4>
                            </div>
                            <div class="card-body">
                                <div class="progress" style="height:15px;">
                                    <div class="progress-bar" style="width: 12%"></div>
                                    <div class="progress-bar bg-danger" style="width: 18%"></div>
                                    <div class="progress-bar bg-success" style="width: 20%"></div>
                                    <div class="progress-bar bg-warning" style="width: 24%"></div>
                                    <div class="progress-bar bg-info rounded-end-pill" style="width: 10%"></div>
                                </div>
                                <div class="hstack gap-4 mt-3">
                                    <div>
                                        <h6 class="fs-12 mb-0"><i class="fas fa-circle text-primary fs-10 me-2"></i>Working</h6>
                                    </div>
                                    <div>
                                        <h6 class="fs-12 mb-0"><i class="fas fa-circle text-danger fs-10 me-2"></i>Pending</h6>
                                    </div>
                                    <div>
                                        <h6 class="fs-12 mb-0"><i class="fas fa-circle text-success fs-10 me-2"></i>In progress</h6>
                                    </div>
                                    <div>
                                        <h6 class="fs-12 mb-0"><i class="fas fa-circle text-warning fs-10 me-2"></i>Blocked</h6>
                                    </div>
                                    <div>
                                        <h6 class="fs-12 mb-0"><i class="fas fa-circle text-info fs-10 me-2"></i>Remaining</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header card-header-bordered">
                                <div class="card-icon text-muted"><i class="fa fa-users-cog fs-14"></i></div>
                                <h3 class="card-title">Human resources</h3>
                                <div class="card-addon">
                                    <div class="nav nav-pills card-nav" id="user-tab">
                                        <a class="nav-item nav-link active" id="user-manager-tab" data-bs-toggle="tab" href="#user-manager">Manager</a>
                                        <a class="nav-item nav-link" id="user-employee-tab" data-bs-toggle="tab" href="#user-employee">Employee</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content p-0" id="user-tabContent">
                                    <div class="tab-pane fade show active" id="user-manager">
                                        <div class="rich-list">
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-1.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Rhona Davidson</h4>
                                                                <p class="rich-list-subtitle mb-0">Javascript Developer, Tokyo</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">35%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 35%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-2.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Timothy Mooney</h4>
                                                                <p class="rich-list-subtitle mb-0">Office Manage, San Francisco</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">55%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 55%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-7.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Jackson Bradshaw</h4>
                                                                <p class="rich-list-subtitle mb-0">Regional Director, San Francisco</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">75%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 75%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-6.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Brielle Williamson</h4>
                                                                <p class="rich-list-subtitle mb-0">Integration Specialist, New York</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">60%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 60%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-5.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Prescott Bartlett</h4>
                                                                <p class="rich-list-subtitle mb-0">Technical Author, London</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">85%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 85%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="user-employee">
                                        <div class="rich-list">
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-2.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Timothy Mooney</h4>
                                                                <p class="rich-list-subtitle mb-0">Office Manage, San Francisco</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">55%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 55%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-5.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Prescott Bartlett</h4>
                                                                <p class="rich-list-subtitle mb-0">Technical Author, London</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">85%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 85%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-4.png" alt="Avatar image" class=" avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Rhona Davidson</h4>
                                                                <p class="rich-list-subtitle mb-0">Javascript Developer, Tokyo</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">35%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 35%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-6.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Brielle Williamson</h4>
                                                                <p class="rich-list-subtitle mb-0">Integration Specialist, New York</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">60%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 60%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="row g-2 w-100">
                                                    <div class="col-lg-5">
                                                        <div class="rich-list-item p-0">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar avatar-circle avatar-xs">
                                                                    <div class=""><img src="assets/images/users/avatar-7.png" alt="Avatar image" class="avatar-2xs" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title mb-1">Jackson Bradshaw</h4>
                                                                <p class="rich-list-subtitle mb-0">Regional Director, San Francisco</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 d-flex align-items-center">
                                                        <div class="flex-grow-1 me-4">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="">Progress</h6>
                                                                <span class="text-muted">75%</span>
                                                            </div>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-primary" style="width: 75%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-end">
                                                            <a href="#" class="btn btn-sm btn-label-primary">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon text-muted"><i class="fas fa-sync-alt fs-14"></i></div>
                                <h3 class="card-title">Order progress</h3>
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
                                                <th>Order ID</th>
                                                <th>Status</th>
                                                <th>Operators</th>
                                                <th>Location</th>
                                                <th>Progress</th>
                                                <th>Start date</th>
                                                <th>Estimation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">837563</td>
                                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-primary"></i> Arrived</td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-1.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-2.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-3.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-4.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-5.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">Tokyo</td>
                                                <td class="align-middle">
                                                    <div class="">
                                                        <h6 class="">90%</h6>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" style="width: 90%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">26/06/2023</td>
                                                <td class="align-middle">27/06/2023</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">982365</td>
                                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-danger"></i> Pending</td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-6.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-7.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-8.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">San Francisco</td>
                                                <td class="align-middle">
                                                    <div class="">
                                                        <h6 class="">20%</h6>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" style="width: 20%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">23/04/2023</td>
                                                <td class="align-middle">28/04/2023</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">872048</td>
                                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-success"></i> Moving</td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-5.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-4.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-1.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-2.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">Edinburgh</td>
                                                <td class="align-middle">
                                                    <div class="">
                                                        <h6 class="">75%</h6>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" style="width: 75%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">26/04/2023</td>
                                                <td class="align-middle">30/04/2023</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">324712</td>
                                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-warning"></i> Hold</td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-3.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-4.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-5.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">Tokyo</td>
                                                <td class="align-middle">
                                                    <div class="">
                                                        <h6 class="">30%</h6>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">26/06/2023</td>
                                                <td class="align-middle">30/06/2023</td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">128747</td>
                                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-success"></i> Moving</td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-6.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-7.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-8.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                        <div class="avatar avatar-circle">
                                                            <img src="assets/images/users/avatar-5.png" alt="Avatar image" class="avatar-2xs">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">New York</td>
                                                <td class="align-middle">
                                                    <div class="">
                                                        <h6 class="">60%</h6>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" style="width: 60%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">10/05/2023</td>
                                                <td class="align-middle">15/05/2023</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-icon text-muted"><i class="fa fa-bell"></i></div>
                                        <h3 class="card-title">Notification</h3>
                                        <div class="card-addon">
                                            <div class="dropdown">
                                                <button class="btn btn-sm py-0 btn-label-primary dropdown-toggle" data-bs-toggle="dropdown">All <i class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                    <a class="dropdown-item" href="#"><span class="badge badge-label-primary">Personal</span> </a>
                                                    <a class="dropdown-item" href="#"><span class="badge badge-label-info">Work</span> </a>
                                                    <a class="dropdown-item" href="#"><span class="badge badge-label-success">Important</span> </a>
                                                    <a class="dropdown-item" href="#"><span class="badge badge-label-danger">Company</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="rich-list rich-list-bordered rich-list-action">
                                            <div class="rich-list-item">
                                                <div class="rich-list-prepend">
                                                    <div class="avatar avatar-xs avatar-label-info">
                                                        <div class=""><i class="fa fa-file-invoice"></i></div>
                                                    </div>
                                                </div>
                                                <div class="rich-list-content">
                                                    <h4 class="rich-list-title mb-1">New report has been received</h4>
                                                    <p class="rich-list-subtitle mb-0">2 min ago</p>
                                                </div>
                                                <div class="rich-list-append">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fs-12"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                                                <span class="dropdown-content">Mark as read</span>
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                                                <span class="dropdown-content">Delete</span>
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                                <span class="dropdown-content">Settings</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="rich-list-prepend">
                                                    <div class="avatar avatar-xs avatar-label-success">
                                                        <div class=""><i class="fa fa-shopping-basket"></i></div>
                                                    </div>
                                                </div>
                                                <div class="rich-list-content">
                                                    <h4 class="rich-list-title mb-1">Last order was completed</h4>
                                                    <p class="rich-list-subtitle mb-0">1 hrs ago</p>
                                                </div>
                                                <div class="rich-list-append">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fs-12"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                                                <span class="dropdown-content">Mark as read</span>
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                                                <span class="dropdown-content">Delete</span>
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                                <span class="dropdown-content">Settings</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="rich-list-prepend">
                                                    <div class="avatar avatar-xs avatar-label-danger">
                                                        <div class=""><i class="fa fa-users"></i></div>
                                                    </div>
                                                </div>
                                                <div class="rich-list-content">
                                                    <h4 class="rich-list-title mb-1">Company meeting canceled</h4>
                                                    <p class="rich-list-subtitle mb-0">5 hrs ago</p>
                                                </div>
                                                <div class="rich-list-append">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fs-12"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                                                <span class="dropdown-content">Mark as read</span>
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                                                <span class="dropdown-content">Delete</span>
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                                <span class="dropdown-content">Settings</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="rich-list-prepend">
                                                    <div class="avatar avatar-xs avatar-label-warning">
                                                        <div class=""><i class="fa fa-paper-plane"></i></div>
                                                    </div>
                                                </div>
                                                <div class="rich-list-content">
                                                    <h4 class="rich-list-title mb-1">New feedback received</h4>
                                                    <p class="rich-list-subtitle mb-0">6 hrs ago</p>
                                                </div>
                                                <div class="rich-list-append">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fs-12"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                                                <span class="dropdown-content">Mark as read</span>
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                                                <span class="dropdown-content">Delete</span>
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">
                                                                <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                                <span class="dropdown-content">Settings</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-6">
                                <div class="card" style="background: url('assets/images/widgets-shape.png'); background-position: center left; background-repeat: no-repeat; background-size: auto;">
                                    <div class="bg-overlay bg-info rounded z-n1"></div>
                                    <div class="card-body">
                                        <div class="row justify-content-end">
                                            <div class="col-5">
                                                <h5 class="text-white fs-16 mb-3 z-1">Need for some help?</h5>
                                                <button class="btn btn-info">Contact Here</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="background: url('assets/images/widgets-shape2.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                    <div class="bg-overlay bg-danger-subtle"></div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-7">
                                                <h4 class="fs-16 mb-1">You have bonus, Anthony! </h4>
                                                <p class="text-muted mb-0">We have s gift for you - 3 days for free!</p>
                                                <button class="btn btn-danger mt-4">Active Bonus</button>
                                            </div>
                                            <div class="col-5">
                                                <img src="assets/images/widgets-2.png" alt="" class="img-fluid">
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-icon text-muted"><i class="fas fa-coins fs-14"></i></div>
                                        <h4 class="card-title"> Monthly income</h4>
                                        <p class="card-addon rich-list-subtitle text-success mb-0">+15%</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="d-flex justify-content-between mb-2">
                                                <h5 class="rich-list-title mb-0">Total</h5>
                                                <p class="rich-list-subtitle mb-0">$65,880</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="rich-list-title mb-0">Sales</h5>
                                                <p class="rich-list-subtitle mb-0">554</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-icon text-muted"><i class="fas fa-archive fs-14"></i></div>
                                        <h4 class="card-title">Employee amount</h4>
                                        <p class="card-addon rich-list-subtitle text-success mb-0">-2%</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="d-flex justify-content-between mb-2">
                                                <h5 class="rich-list-title mb-0">Total</h5>
                                                <p class="rich-list-subtitle mb-0">$1250</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="rich-list-title mb-0">Active</h5>
                                                <p class="rich-list-subtitle mb-0">1120</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-icon text-muted"><i class="fas fa-chart-bar fs-14"></i></div>
                                        <h4 class="card-title">Product sales</h4>
                                        <p class="card-addon rich-list-subtitle text-success mb-0">+10%</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="d-flex justify-content-between mb-2">
                                                <h5 class="rich-list-title mb-0">Total</h5>
                                                <p class="rich-list-subtitle mb-0">$2350</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="rich-list-title mb-0">Last report</h5>
                                                <p class="rich-list-subtitle mb-0">2220</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-icon text-muted"><i class="fas fa-calendar-alt fs-14"></i></div>
                                        <h4 class="card-title">Monthly profit</h4>
                                        <p class="card-addon rich-list-subtitle text-success mb-0">+10%</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="d-flex justify-content-between mb-2">
                                                <h5 class="rich-list-title mb-0">Total</h5>
                                                <p class="rich-list-subtitle mb-0">$502,100
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="rich-list-title mb-0">Last month</h5>
                                                <p class="rich-list-subtitle mb-0">$453,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="card">
                            <div class="card-header card-header-bordered">
                                <div class="card-icon text-muted"><i class="fa fa-clipboard-list fs-14"></i></div>
                                <h3 class="card-title">Recent activities</h3>
                            </div>
                            <div class="card-body">
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
                        <div class="card">
                            <div class="card-header">
                                <div class="card-icon text-muted"><i class="fa fa-list-alt"></i></div>
                                <h3 class="card-title">Lastest log</h3>
                            </div>
                            <div class="card-body">
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
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- end page-content -->
    </div>
    <!-- end main-content -->

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

</div>
<!-- end layout-wrapper -->


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

<script src="assets/js/app.js"></script>

</body>

</html>