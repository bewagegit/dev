<!doctype html>
<?php 
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");
$title = 'Dashboard | Emfob';


include_once("dashboard-header.php"); ?>


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
                        <h4 class="mb-sm-0">Support</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                <li class="breadcrumb-item active">Support</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card text-center">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Have any Questions ?</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-0">It will be as simple as in fact, it will be occidental. it will
                                seem like simplified English, as a skeptical Cambridge friend</p>
                            <div class="mt-3">
                                <button class="btn btn-lg btn-success waves-effect waves-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z">
                                        </path>
                                    </svg> Email Us
                                </button>
                                <button class="btn btn-lg btn-info waves-effect waves-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232">
                                        </path>
                                    </svg> Whatsapp Us
                                </button>
                            </div>
                            <div class="nav nav-pills card-header-pills pricing-nav-tabs mb-0 mt-5" id="card2-tab"
                                role="tablist">
                                <a class="nav-item nav-link active" id="faq-gen-ques" data-bs-toggle="tab"
                                    href="#faq-general" aria-selected="false" role="tab" tabindex="-1">General
                                    Questions</a>
                                <a class="nav-item nav-link" id="faq-priv" data-bs-toggle="tab" href="#faq-privacy"
                                    aria-selected="false" role="tab" tabindex="-1">Privacy Policy</a>
                                <a class="nav-item nav-link" id="faq-pric" data-bs-toggle="tab" href="#faq-pricing"
                                    aria-selected="false" role="tab" tabindex="-1">Pricing & Plans</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="faq-general" role="tabpanel">
                                                <div>
                                                    <div class="text-center mb-5">
                                                        <h5>General Questions</h5>
                                                        <p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste
                                                            natus error sit</p>
                                                    </div>

                                                    <div class="accordion" id="accordionExample-general">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne-general"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne-general">
                                                                    <i
                                                                        class=" fab fa-telegram-plane me-2 align-middle"></i>What
                                                                    is Lorem Ipsum ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne-general"
                                                                class="accordion-collapse collapse show"
                                                                data-bs-parent="#accordionExample-general">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">If several languages
                                                                        coalesce, the grammar of the resulting language
                                                                        is more simple and regular than that of the
                                                                        individual languages. The new common language
                                                                        will be more simple and regular than the
                                                                        existing.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo-general"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseTwo-general">
                                                                    <i
                                                                        class=" fas fa-bookmark me-2 align-middle"></i>Why
                                                                    do we use it ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo-general"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-general">
                                                                <div class="accordion-body">
                                                                    <p class="mb-0">Everyone realizes why a new common
                                                                        language would be desirable one could refuse to
                                                                        pay expensive translators. To achieve this, it
                                                                        would be necessary to have uniform grammar,
                                                                        pronunciation and more common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree-general"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseThree-general">
                                                                    <i class="fas fa-bell me-2 align-middle"></i>Where
                                                                    can I get some ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree-general"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-general">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">Their separate existence
                                                                        is a myth. For science, music, sport, etc,
                                                                        Europe uses the same vocabulary. The languages
                                                                        only differ in their grammar, their
                                                                        pronunciation and their most common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour-general"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseFour-general">
                                                                    <i
                                                                        class="fas fa-archive me-2 align-middle"></i>Where
                                                                    does it come from ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour-general"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-general">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">To an English person, it
                                                                        will seem like simplified English, as a
                                                                        skeptical Cambridge friend of mine told me what
                                                                        Occidental is. The European languages are
                                                                        members of the same family separate existence.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="faq-privacy" role="tabpanel">
                                                <div>
                                                    <div class="text-center mb-5">
                                                        <h5>Privacy Policy</h5>
                                                        <p class="text-muted mb-0">Neque porro quisquam est, qui dolorem
                                                            ipsum quia</p>
                                                    </div>

                                                    <div class="accordion" id="accordionExample-Privacy">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne-Privacy"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne-Privacy">
                                                                    <i
                                                                        class=" fab fa-telegram-plane me-2 align-middle"></i>Why
                                                                    do we use it ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne-Privacy"
                                                                class="accordion-collapse collapse show"
                                                                data-bs-parent="#accordionExample-Privacy">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">Everyone realizes why a
                                                                        new common language would be desirable one could
                                                                        refuse to pay expensive translators. To achieve
                                                                        this, it would be necessary to have uniform
                                                                        grammar, pronunciation and more common words.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo-Privacy"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseTwo-Privacy">
                                                                    <i
                                                                        class=" fas fa-bookmark me-2 align-middle"></i>What
                                                                    is Lorem Ipsum ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo-Privacy"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-Privacy">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">If several languages
                                                                        coalesce, the grammar of the resulting language
                                                                        is more simple and regular than that of the
                                                                        individual languages. The new common language
                                                                        will be more simple and regular than the
                                                                        existing.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree-Privacy"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseThree-Privacy">
                                                                    <i class="fas fa-bell me-2 align-middle"></i>Where
                                                                    can I get some ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree-Privacy"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-Privacy">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">Their separate existence
                                                                        is a myth. For science, music, sport, etc,
                                                                        Europe uses the same vocabulary. The languages
                                                                        only differ in their grammar, their
                                                                        pronunciation and their most common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour-Privacy"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseFour-Privacy">
                                                                    <i class="as fa-archive me-2 align-middle"></i>Where
                                                                    does it come from ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour-Privacy"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-Privacy">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">To an English person, it
                                                                        will seem like simplified English, as a
                                                                        skeptical Cambridge friend of mine told me what
                                                                        Occidental is. The European languages are
                                                                        members of the same family separate existence.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="faq-pricing" role="tabpanel">
                                                <div>
                                                    <div class="text-center mb-5">
                                                        <h5>Pricing & Plans</h5>
                                                        <p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste
                                                            natus error sit</p>
                                                    </div>

                                                    <div class="accordion" id="accordionExample-Pricing">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne-Pricing"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne-Pricing">
                                                                    <i
                                                                        class=" fab fa-telegram-plane me-2 align-middle"></i>Where
                                                                    does it come from ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne-Pricing"
                                                                class="accordion-collapse collapse show"
                                                                data-bs-parent="#accordionExample-Pricing">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0"> If several languages
                                                                        coalesce, the grammar of the resulting language
                                                                        is more simple and regular than that of the
                                                                        individual languages. The new common language
                                                                        will be more simple and regular than the
                                                                        existing.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo-Pricing"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseTwo-Pricing">
                                                                    <i class=" fas fa-bookmark me-2 align-middle"></i>
                                                                    Where can I get some ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo-Pricing"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-Pricing">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">Their separate existence
                                                                        is a myth. For science, music, sport, etc,
                                                                        Europe uses the same vocabulary. The languages
                                                                        only differ in their grammar, their
                                                                        pronunciation and their most common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree-Pricing"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseThree-Pricing">
                                                                    <i class="fas fa-bell me-2 align-middle"></i>Why do
                                                                    we use it ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree-Pricing"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-Pricing">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">Everyone realizes why a
                                                                        new common language would be desirable one could
                                                                        refuse to pay expensive translators. To achieve
                                                                        this, it would be necessary to have uniform
                                                                        grammar, pronunciation and more common words.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour-Pricing"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseFour-Pricing">
                                                                    <i class="fas fa-archive me-2 align-middle"></i>Why
                                                                    do we use it ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour-Pricing"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample-Pricing">
                                                                <div class="accordion-body">
                                                                    <p class="text-muted mb-0">It will be as simple in
                                                                        fact, it will be occidental. To an English
                                                                        person, it will seem like simplified English, as
                                                                        a skeptical Cambridge friend of mine told me
                                                                        what occidental languages are members.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

<!-- JAVASCRIPT -->
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN ?>assets/libs/node-waves/waves.min.js"></script>

<script src="<?php echo BASE_URL_ADMIN ?>assets/js/app.js"></script>

</body>

</html>