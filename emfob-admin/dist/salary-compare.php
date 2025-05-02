<!doctype html>
<?php include "header.php" ?>
<style>
    body {
        background-color: #f8f9fa;
    }

    .comparison-container {
        max-width: 700px;
        margin: 50px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .title {
        text-align: center;
        margin-bottom: 30px;
    }

    .results-container {
        margin-top: 20px;
    }

    .country-salary {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        border-bottom: 1px solid #eaeaea;
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
                        <h4 class="mb-sm-0">Salary Comparision Tool</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                <li class="breadcrumb-item active">Salary Comparision Tool</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="container comparison-container">
                <h2 class="title">Salary Comparison Tool</h2>
                <form id="salaryForm">
                    <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Position</label>
                        <select id="jobTitle" class="form-select" required>
                            <option value="">Select a Position</option>
                            <option value="software_engineer">Software Engineer</option>
                            <option value="data_scientist">Data Scientist</option>
                            <option value="project_manager">Project Manager</option>
                            <option value="product_manager">Product Manager</option>
                            <option value="graphic_designer">Graphic Designer</option>
                            <option value="marketing_specialist">Marketing Specialist</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label">Years of Experience</label>
                        <select id="experience" class="form-select" required>
                            <option value="0">Fresher (0-1 years)</option>
                            <option value="2">Junior (2-4 years)</option>
                            <option value="5">Mid-Level (5-7 years)</option>
                            <option value="8">Senior (8+ years)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="countries" class="form-label">Select Countries</label>
                        <select id="countries" class="form-select" multiple required>
                            <option value="us">United States</option>
                            <option value="uk">United Kingdom</option>
                            <option value="ca">Canada</option>
                            <option value="au">Australia</option>
                            <option value="in">India</option>
                            <option value="de">Germany</option>
                            <option value="fr">France</option>
                            <option value="jp">Japan</option>
                            <option value="cn">China</option>
                        </select>
                        <small class="text-muted">Hold down Ctrl (Windows) or Command (Mac) to select multiple
                            countries.</small>
                    </div>
                    <button type="button" class="btn btn-primary w-100" id="compareBtn">Compare Salaries</button>
                </form>

                <div class="results-container" id="resultsContainer" style="display: none;">
                    <h5 class="mt-4">Salary Comparison Results</h5>
                    <div id="salaryResults"></div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

            <script>
                $(document).ready(function () {
                    $('#compareBtn').on('click', function () {
                        var jobTitle = $('#jobTitle').val();
                        var experienceLevel = $('#experience').val();
                        var selectedCountries = $('#countries').val();

                        if (jobTitle && experienceLevel && selectedCountries.length > 0) {
                            $('#resultsContainer').show();
                            $('#salaryResults').empty();

                            const salaryData = {
                                "software_engineer": {
                                    "us": [60000, 80000, 100000, 120000],
                                    "uk": [50000, 70000, 85000, 105000],
                                    "in": [500000, 800000, 1000000, 1500000],
                                    "ca": [55000, 75000, 90000, 110000],
                                    "de": [45000, 65000, 80000, 100000]
                                },
                                "data_scientist": {
                                    "us": [70000, 90000, 110000, 130000],
                                    "uk": [55000, 75000, 90000, 115000],
                                    "in": [600000, 900000, 1200000, 1600000],
                                    "ca": [60000, 85000, 95000, 120000],
                                    "de": [50000, 70000, 85000, 105000]
                                }
                            };

                            selectedCountries.forEach(function (country) {
                                const salaryRange = salaryData[jobTitle] && salaryData[jobTitle][country];
                                if (salaryRange) {
                                    const salary = salaryRange[experienceLevel] || "N/A";
                                    $('#salaryResults').append(`
                                <div class="country-salary">
                                    <span><strong>${country.toUpperCase()}</strong> - ${getExperienceLabel(experienceLevel)}:</span>
                                    <span>$${formatCurrency(salary)}</span>
                                </div>
                            `);
                                } else {
                                    $('#salaryResults').append(`
                                <div class="country-salary">
                                    <span><strong>${country.toUpperCase()}</strong> - ${getExperienceLabel(experienceLevel)}:</span>
                                    <span>N/A</span>
                                </div>
                            `);
                                }
                            });
                        } else {
                            alert("Please fill out all fields.");
                        }
                    });

                    function getExperienceLabel(level) {
                        switch (parseInt(level)) {
                            case 0: return "Fresher";
                            case 2: return "Junior (2-4 years)";
                            case 5: return "Mid-Level (5-7 years)";
                            case 8: return "Senior (8+ years)";
                            default: return "";
                        }
                    }

                    function formatCurrency(amount) {
                        return amount.toLocaleString();
                    }
                });
            </script>

<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>