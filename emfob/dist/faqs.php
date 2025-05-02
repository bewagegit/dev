<!doctype html>
<?php include "header.php"?>


            <!-- START SIGN-UP MODAL -->
            <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-5">
                            <div class="position-absolute end-0 top-0 p-3">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="auth-content">
                                <div class="w-100">
                                    <div class="text-center mb-4">
                                        <h5>Sign Up</h5>
                                        <p class="text-muted">Sign Up and get access to all the features of Emfob</p>
                                    </div>
                                    <form action="#" class="auth-form">
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="usernameInput" placeholder="Enter your username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-primary form-text text-decoration-underline">Terms and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Already a member ? <a href="sign-in.php" class="form-text text-primary text-decoration-underline"> Sign-in </a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end modal-body-->
                    </div><!--end modal-content-->
                </div><!--end modal-dialog-->
            </div>
            <!-- END SIGN-UP MODAL -->

            
            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
                    <section class="page-title-box">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white">
                                        <h3 class="mb-4">FAQ'S</h3>
                                        <div class="page-next">
                                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                                <ol class="breadcrumb justify-content-center">
                                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Company</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page"> FAQ'S </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- end home -->

                    <!-- START SHAPE -->
                    <div class="position-relative" style="z-index: 1">
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                                <path fill="" fill-opacity="1"
                                    d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->


                    <!-- START FAQ-PAGE -->
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <ul class="faq-menu nav nav-fill nav-pills justify-content-center" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="general-tab" data-bs-toggle="pill"
                                                data-bs-target="#generalTab" type="button" role="tab" aria-controls="generalTab"
                                                aria-selected="true">Candidate</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="buying-tab" data-bs-toggle="pill"
                                                data-bs-target="#buyingTab" type="button" role="tab" aria-controls="buying"
                                                aria-selected="false">Employer</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="payment-tab" data-bs-toggle="pill"
                                                data-bs-target="#paymentTab" type="button" role="tab" aria-controls="payment"
                                                aria-selected="false">Freelancer</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="support-tab" data-bs-toggle="pill"
                                                data-bs-target="#supportTab" type="button" role="tab" aria-controls="support"
                                                aria-selected="false">Consultancy</button>
                                        </li>
                                    </ul>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row align-items-center mt-5">
                                <div class="col-lg-12">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="generalTab" role="tabpanel" aria-labelledby="general-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordion accordion-flush faq-box" id="general">
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="generalOne">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#general-one" aria-expanded="true"
                                                                    aria-controls="general-one">
                                                                    Where does it come from ?
                                                                </button>
                                                            </h2>
                                                            <div id="general-one" class="accordion-collapse collapse show"
                                                                aria-labelledby="generalOne" data-bs-parent="#general">
                                                                <div class="accordion-body text-muted ">
                                                                    If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="generaltwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#general-two"
                                                                    aria-expanded="false" aria-controls="general-two">
                                                                    How Emfob Work ?
                                                                </button>
                                                            </h2>
                                                            <div id="general-two" class="accordion-collapse collapse"
                                                                aria-labelledby="generaltwo" data-bs-parent="#general">
                                                                <div class="accordion-body text-muted ">
                                                                    To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="generalthree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#general-three"
                                                                    aria-expanded="false" aria-controls="general-three">
                                                                    What is your shipping policy?
                                                                </button>
                                                            </h2>
                                                            <div id="general-three" class="accordion-collapse collapse"
                                                                aria-labelledby="generalthree" data-bs-parent="#general">
                                                                <div class="accordion-body text-muted">
                                                                    Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                    </div><!--end accordion-->
                                                </div><!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="accordion accordion-flush faq-box" id="generalTwo">
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="generalfour">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#general-four" aria-expanded="true"
                                                                    aria-controls="general-four">
                                                                    Where To Place A FAQ Page
                                                                </button>
                                                            </h2>
                                                            <div id="general-four" class="accordion-collapse collapse show"
                                                                aria-labelledby="generalfour" data-bs-parent="#generalTwo">
                                                                <div class="accordion-body text-muted ">
                                                                    Just as the name suggests, a FAQ page is all about simple questions and answers. Gather common questions your customers have asked from your support team and include them in the FAQ, Use categories to organize questions related to specific topics.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                        
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="generalfive">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#general-five"
                                                                    aria-expanded="false" aria-controls="general-five">
                                                                    Why do we use it ?
                                                                </button>
                                                            </h2>
                                                            <div id="general-five" class="accordion-collapse collapse"
                                                                aria-labelledby="generalfive" data-bs-parent="#generalTwo">
                                                                <div class="accordion-body text-muted ">
                                                                    It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="generalsix">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#general-six"
                                                                    aria-expanded="false" aria-controls="general-six">
                                                                    Where can I get some ?
                                                                </button>
                                                            </h2>
                                                            <div id="general-six" class="accordion-collapse collapse"
                                                                aria-labelledby="generalsix" data-bs-parent="#generalTwo">
                                                                <div class="accordion-body text-muted ">
                                                                    To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                    </div><!--end accordion-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end general-tab-->
                                        <div class="tab-pane fade" id="buyingTab" role="tabpanel" aria-labelledby="buying-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordion accordion-flush faq-box" id="buying">
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="buyingone">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#buying-one" aria-expanded="true"
                                                                    aria-controls="buying-one">
                                                                    Where does it come from ?
                                                                </button>
                                                            </h2>
                                                            <div id="buying-one" class="accordion-collapse collapse show"
                                                                aria-labelledby="buyingone" data-bs-parent="#buying">
                                                                <div class="accordion-body text-muted">
                                                                    If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="buyingtwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#buying-two"
                                                                    aria-expanded="false" aria-controls="buying-two">
                                                                    How Emfob Work ?
                                                                </button>
                                                            </h2>
                                                            <div id="buying-two" class="accordion-collapse collapse"
                                                                aria-labelledby="buyingtwo" data-bs-parent="#buying">
                                                                <div class="accordion-body text-muted">
                                                                    To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="buyingthree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#buying-three"
                                                                    aria-expanded="false" aria-controls="buying-three">
                                                                    What is your shipping policy?
                                                                </button>
                                                            </h2>
                                                            <div id="buying-three" class="accordion-collapse collapse"
                                                                aria-labelledby="buyingthree" data-bs-parent="#buying">
                                                                <div class="accordion-body text-muted ">
                                                                    Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                    </div><!--end accordion-->
                                                </div><!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="accordion accordion-flush faq-box" id="buyingTwo">
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="buyingfour">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#buying-four" aria-expanded="true"
                                                                    aria-controls="buying-four">
                                                                    Where To Place A FAQ Page
                                                                </button>
                                                            </h2>
                                                            <div id="buying-four" class="accordion-collapse collapse show"
                                                                aria-labelledby="buyingfour" data-bs-parent="#buyingTwo">
                                                                <div class="accordion-body text-muted">
                                                                    Just as the name suggests, a FAQ page is all about simple questions and answers. Gather common questions your customers have asked from your support team and include them in the FAQ, Use categories to organize questions related to specific topics.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="buyingfive">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#buying-five"
                                                                    aria-expanded="false" aria-controls="buying-five">
                                                                    Why do we use it ?
                                                                </button>
                                                            </h2>
                                                            <div id="buying-five" class="accordion-collapse collapse"
                                                                aria-labelledby="buyingfive" data-bs-parent="#buyingTwo">
                                                                <div class="accordion-body text-muted">
                                                                    It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="buyingsix">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#buying-six"
                                                                    aria-expanded="false" aria-controls="buying-six">
                                                                    Where can I get some ?
                                                                </button>
                                                            </h2>
                                                            <div id="buying-six" class="accordion-collapse collapse"
                                                                aria-labelledby="buyingsix" data-bs-parent="#buyingTwo">
                                                                <div class="accordion-body text-muted">
                                                                    To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                    </div><!--end accordion-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end buying-tab-->
                                        <div class="tab-pane fade" id="paymentTab" role="tabpanel" aria-labelledby="payment-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordion accordion-flush faq-box" id="payment">
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="paymentone">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#payment-one" aria-expanded="true"
                                                                    aria-controls="payment-one">
                                                                    Where does it come from ?
                                                                </button>
                                                            </h2>
                                                            <div id="payment-one" class="accordion-collapse collapse show"
                                                                aria-labelledby="paymentone" data-bs-parent="#payment">
                                                                <div class="accordion-body text-muted">
                                                                    If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="paymenttwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#payment-two"
                                                                    aria-expanded="false" aria-controls="payment-two">
                                                                    How Emfob Work ?
                                                                </button>
                                                            </h2>
                                                            <div id="payment-two" class="accordion-collapse collapse"
                                                                aria-labelledby="paymenttwo" data-bs-parent="#payment">
                                                                <div class="accordion-body text-muted">
                                                                    To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="paymentthree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#payment-three"
                                                                    aria-expanded="false" aria-controls="payment-three">
                                                                    What is your shipping policy?
                                                                </button>
                                                            </h2>
                                                            <div id="payment-three" class="accordion-collapse collapse"
                                                                aria-labelledby="paymentthree" data-bs-parent="#payment">
                                                                <div class="accordion-body text-muted">
                                                                    Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                    </div><!--end accordion-->
                                                </div><!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="accordion accordion-flush faq-box" id="paymentTwo">
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="paymentfour">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#payment-four" aria-expanded="true"
                                                                    aria-controls="payment-four">
                                                                    Where To Place A FAQ Page
                                                                </button>
                                                            </h2>
                                                            <div id="payment-four" class="accordion-collapse collapse show"
                                                                aria-labelledby="paymentfour" data-bs-parent="#paymentTwo">
                                                                <div class="accordion-body text-muted">
                                                                    Just as the name suggests, a FAQ page is all about simple questions and answers. Gather common questions your customers have asked from your support team and include them in the FAQ, Use categories to organize questions related to specific topics.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                        
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="paymentfive">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#payment-five"
                                                                    aria-expanded="false" aria-controls="payment-five">
                                                                    Why do we use it ?
                                                                </button>
                                                            </h2>
                                                            <div id="payment-five" class="accordion-collapse collapse"
                                                                aria-labelledby="paymentfive" data-bs-parent="#paymentTwo">
                                                                <div class="accordion-body text-muted">
                                                                    It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="paymentsix">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#payment-six"
                                                                    aria-expanded="false" aria-controls="payment-six">
                                                                    Where can I get some ?
                                                                </button>
                                                            </h2>
                                                            <div id="payment-six" class="accordion-collapse collapse"
                                                                aria-labelledby="paymentsix" data-bs-parent="#paymentTwo">
                                                                <div class="accordion-body text-muted">
                                                                    To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                    </div><!--end accordion-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end payment-tab-->
                                        <div class="tab-pane fade" id="supportTab" role="tabpanel" aria-labelledby="support-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordion accordion-flush faq-box" id="support">
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="supportone">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#support-one" aria-expanded="true"
                                                                    aria-controls="support-one">
                                                                    Where does it come from ?
                                                                </button>
                                                            </h2>
                                                            <div id="support-one" class="accordion-collapse collapse show"
                                                                aria-labelledby="supportone" data-bs-parent="#support">
                                                                <div class="accordion-body text-muted">
                                                                    If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="supporttwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#support-two"
                                                                    aria-expanded="false" aria-controls="support-two">
                                                                    How Emfob Work ?
                                                                </button>
                                                            </h2>
                                                            <div id="support-two" class="accordion-collapse collapse"
                                                                aria-labelledby="supporttwo" data-bs-parent="#support">
                                                                <div class="accordion-body text-muted">
                                                                    To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="supportthree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#support-three"
                                                                    aria-expanded="false" aria-controls="support-three">
                                                                    What is your shipping policy?
                                                                </button>
                                                            </h2>
                                                            <div id="support-three" class="accordion-collapse collapse"
                                                                aria-labelledby="supportthree" data-bs-parent="#support">
                                                                <div class="accordion-body text-muted">
                                                                    Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                    </div><!--end accordion-->
                                                </div><!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="accordion accordion-flush faq-box" id="supportTwo">
                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="supportfour">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#support-four" aria-expanded="true"
                                                                    aria-controls="support-four">
                                                                    Where To Place A FAQ Page
                                                                </button>
                                                            </h2>
                                                            <div id="support-four" class="accordion-collapse collapse show"
                                                                aria-labelledby="supportfour" data-bs-parent="#supportTwo">
                                                                <div class="accordion-body text-muted">
                                                                    Just as the name suggests, a FAQ page is all about simple questions and answers. Gather common questions your customers have asked from your support team and include them in the FAQ, Use categories to organize questions related to specific topics.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="supportfive">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#support-five"
                                                                    aria-expanded="false" aria-controls="support-five">
                                                                    Why do we use it ?
                                                                </button>
                                                            </h2>
                                                            <div id="support-five" class="accordion-collapse collapse"
                                                                aria-labelledby="supportfive" data-bs-parent="#supportTwo">
                                                                <div class="accordion-body text-muted">
                                                                    It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->

                                                        <div class="accordion-item mt-4 border-0">
                                                            <h2 class="accordion-header" id="supportsix">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#support-six"
                                                                    aria-expanded="false" aria-controls="support-six">
                                                                    Where can I get some ?
                                                                </button>
                                                            </h2>
                                                            <div id="support-six" class="accordion-collapse collapse"
                                                                aria-labelledby="supportsix" data-bs-parent="#supportTwo">
                                                                <div class="accordion-body text-muted">
                                                                    To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.
                                                                </div>
                                                            </div>
                                                        </div><!--end accordion-item-->
                                                    </div><!--end accordion-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end support-tab-->
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-12">
                                    <div class="text-center mt-5">
                                        <a href="contact.html" class="btn btn-primary btn-hover mt-2"><i class="uil uil-phone"></i> Contact Us</a>
                                        <a href="javascript:void(0)" class="btn btn-warning btn-hover mt-2 ms-md-2"><i class="uil uil-envelope"></i> Email Now</a>
                                    </div>
                                </div>
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END FAQ-PAGE -->

                </div>
                <!-- End Page-content -->

                <!-- START SUBSCRIBE -->
                <section class="bg-subscribe">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center text-lg-start">
                                    <h4 class="text-white">Get New Jobs Notification!</h4>
                                    <p class="text-white-50 mb-0">Subscribe & get all related jobs notification.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4 mt-lg-0">
                                    <form class="subscribe-form" action="#">
                                        <div class="input-group justify-content-center justify-content-lg-end">
                                            <input type="text" class="form-control" id="subscribe" placeholder="Enter your email">
                                            <button class="btn btn-primary" type="button" id="subscribebtn">Subscribe</button>
                                        </div>
                                    </form><!--end form-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                    <div class="email-img d-none d-lg-block">
                        <img src="assets/images/subscribe.png" alt="" class="img-fluid">
                    </div>
                </section>
                <!-- END SUBSCRIBE -->

<?php include "footer.php"?>

                <!-- Style switcher -->
                <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
                    <div>
                        <h6>Select your color</h6>
                        <ul class="pattern list-unstyled mb-0">
                            <li>
                                <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                            </li>
                            <li>
                                <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                            </li>
                            <li>
                                <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <h6>Light/dark Layout</h6>
                            <div class="text-center mt-3">
                                <!-- light-dark mode -->
                                <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                                    <i class="uil uil-brightness mode-dark mx-auto"></i>
                                    <i class="uil uil-moon mode-light"></i>
                                </a>
                                <!-- END light-dark Mode -->
                            </div>
                        </div>
                    </div>
                    <div class="bottom d-none d-md-block" >
                        <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
                    </div>
                </div>
                <!-- end switcher-->

                <!--start back-to-top-->
                <button onclick="topFunction()" id="back-to-top">
                    <i class="mdi mdi-arrow-up"></i>
                </button>
                <!--end back-to-top-->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>