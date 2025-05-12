<?php 
include_once("backend/config.php");
include_once("backend/constants.php");
include_once("backend/db_functions.php");
include_once("backend/common_functions.php");
include_once("backend/page_authcheck.php");
$title = 'Dashboard | Emfob';
?>
<!doctype html>
<?php
include_once("dashboard-header.php"); ?>
<style>
    body {
        background-color: #f1f3f5;
    }

    .calculator-container {
        max-width: 750px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
    }

    .results-container {
        margin-top: 30px;
    }

    .result-highlight {
        font-weight: bold;
        font-size: 1.2rem;
        color: #0d6efd;
    }

    .result-container {
        background-color: #e9f7ef;
        padding: 15px;
        border-radius: 5px;
        margin-top: 20px;
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
                        <h4 class="mb-sm-0">Cost of Living Calculator</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                <li class="breadcrumb-item active">Cost of Living Calculator</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="container calculator-container">
                <h2 class="title">Cost of Living Calculator</h2>
                <p class="text-center text-muted">Compare your salary's purchasing power across different cities or
                    countries</p>
                <form id="costOfLivingForm">
                    <div class="mb-3">
                        <label for="currentSalary" class="form-label">Current Salary (in INR)</label>
                        <input type="number" class="form-control" id="currentSalary"
                            placeholder="Enter your current salary in INR" required>
                    </div>
                    <div class="mb-3">
                        <label for="currentCity" class="form-label">Current City/Country</label>
                        <select id="currentCity" class="form-select" required>
                            <option value="">Select your current city/country</option>
                            <option value="mumbai">Mumbai, India</option>
                            <option value="new_york">New York, USA</option>
                            <option value="london">London, UK</option>
                            <option value="tokyo">Tokyo, Japan</option>
                            <option value="sydney">Sydney, Australia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="desiredCity" class="form-label">Desired City/Country</label>
                        <select id="desiredCity" class="form-select" required>
                            <option value="">Select the city/country to compare</option>
                            <option value="mumbai">Mumbai, India</option>
                            <option value="new_york">New York, USA</option>
                            <option value="london">London, UK</option>
                            <option value="tokyo">Tokyo, Japan</option>
                            <option value="sydney">Sydney, Australia</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary w-100 mt-3" id="calculateBtn">Calculate Adjusted
                        Salary</button>
                </form>

                <div class="results-container" id="resultsContainer" style="display: none;">
                    <h5 class="mt-4">Cost of Living Adjustment Results</h5>
                    <div class="result-container">
                        <p><strong>Adjusted Salary in <span id="targetCity"></span>:</strong> <span
                                class="result-highlight" id="adjustedSalary"></span></p>
                        <p><strong>Percentage Change:</strong> <span id="percentageChange"></span></p>
                        <p><strong>Purchasing Power Adjustment:</strong> <span id="purchasingPower"></span></p>
                        <p id="salaryConclusion" class="text-info"></p>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#calculateBtn').on('click', function () {
                        const currentSalary = parseFloat($('#currentSalary').val());
                        const currentCity = $('#currentCity').val();
                        const desiredCity = $('#desiredCity').val();

                        if (isNaN(currentSalary) || !currentCity || !desiredCity) {
                            alert("Please fill out all fields.");
                            return;
                        }

                        const costOfLivingIndex = {
                            "mumbai": 30,
                            "new_york": 100,
                            "london": 85,
                            "tokyo": 95,
                            "sydney": 90
                        };

                        const currentCityIndex = costOfLivingIndex[currentCity];
                        const desiredCityIndex = costOfLivingIndex[desiredCity];

                        if (!currentCityIndex || !desiredCityIndex) {
                            alert("Cost of living data is not available for the selected cities.");
                            return;
                        }

                        // Calculate the adjusted salary
                        const adjustedSalary = (currentSalary * desiredCityIndex) / currentCityIndex;
                        const percentageChange = ((adjustedSalary - currentSalary) / currentSalary) * 100;
                        const purchasingPower = (desiredCityIndex / currentCityIndex) * 100;

                        $('#resultsContainer').show();
                        $('#targetCity').text($("#desiredCity option:selected").text());
                        $('#adjustedSalary').text(`₹${adjustedSalary.toFixed(2).toLocaleString()}`);
                        $('#percentageChange').text(`${percentageChange.toFixed(2)}%`);
                        $('#purchasingPower').text(`${purchasingPower.toFixed(2)}%`);

                        // Conclusion message
                        let conclusion;
                        if (percentageChange > 0) {
                            conclusion = "The adjusted salary is higher in your desired location.";
                        } else {
                            conclusion = "The adjusted salary is lower in your desired location. Consider this difference.";
                        }
                        $('#salaryConclusion').text(conclusion);
                    });
                });
            </script>




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
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo BASE_URL_ADMIN; ?>assets/libs/node-waves/waves.min.js"></script>

<script src="<?php echo BASE_URL_ADMIN; ?>assets/js/app.js"></script>

</body>

</html>