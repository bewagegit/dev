    <?php
    require 'backend/fetch_categories.php'; // For fetching job categories
    require 'backend/fetch_jobs.php'; // For fetching jobs
    // Pagination setup
    $limit = 6; // Number of jobs per page
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1; // Current page number
    $offset = ($page - 1) * $limit; // Offset for the SQL query

    // Modified query to include LIMIT and OFFSET for pagination
    $query = "
        SELECT jobs.id, jobs.title, jobs.location, jobs.salary_range, jobs.job_type, jobs.experience, jobs.notes, jobs.urgency,
            job_categories.category_name, companies.name, companies.logo
        FROM jobs
        JOIN job_categories ON jobs.category_id = job_categories.id
        JOIN companies ON jobs.company_id = companies.id
        LIMIT :limit OFFSET :offset
    ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Fetch total job count for pagination
    $totalQuery = "SELECT COUNT(*) FROM jobs";
    $totalStmt = $pdo->query($totalQuery);
    $totalJobs = $totalStmt->fetchColumn();
    $totalPages = ceil($totalJobs / $limit);

    // Capture selected filters
    $selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';
    $selectedLocation = isset($_GET['location']) ? $_GET['location'] : '';
    $selectedKeywords = isset($_GET['keywords']) ? $_GET['keywords'] : '';

    // Display selected filters (Your Selected section)
    $selectedFilters = [];
    if ($selectedCategory) {
        $selectedFilters[] = 'Category: ' . htmlspecialchars($selectedCategory);
    }
    if ($selectedLocation) {
        $selectedFilters[] = 'Location: ' . htmlspecialchars($selectedLocation);
    }
    if ($selectedKeywords) {
        $selectedFilters[] = 'Keywords: ' . htmlspecialchars($selectedKeywords);
    }
    ?>

    <!-- START JOB-LIST -->
    <section class="section">
        <div class="container">
            <form action="#" method="get">
                <div class="row g-2">
                    <div class="col-lg-3 col-md-6">
                        <div class="filler-job-form">
                            <i class="uil uil-briefcase-alt"></i>
                            <input type="search" class="form-control filter-job-input-box" name="keywords"
                                placeholder="Job, Company name..." value="<?= htmlspecialchars($selectedKeywords) ?>">
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6">
                        <div class="filler-job-form">
                            <i class="uil uil-location-point"></i>
                            <select class="form-select" name="location" aria-label="Default select example"
                                id="choices-single-location">
                                <option value="MAS" <?= $selectedLocation == 'MAS' ? 'selected' : '' ?>>Chennai</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6">
                        <div class="filler-job-form">
                            <i class="uil uil-clipboard-notes"></i>
                            <select class="form-select" name="category" aria-label="Default select example"
                                id="choices-single-categories">
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= htmlspecialchars($category['category_name']) ?>"
                                        <?= $selectedCategory == $category['category_name'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($category['category_name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="uil uil-filter"></i> Filter
                        </button>
                    </div><!--end col-->
                </div><!--end row-->
            </form>

            <!-- Your Selected Filters Section -->
            <?php if (count($selectedFilters) > 0): ?>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h6 class="fs-16 mb-3">Your Selected</h6>
                        <div class="selecte-tag position-relative">
                            <input type="text" id="choices-text-remove-button" value="<?= implode(', ', $selectedFilters) ?>"
                                readonly>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            <?php endif; ?>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <h6 class="fs-16 mb-3">Showing all results</h6>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <?php foreach ($jobs as $job): ?>
                    <div class="col-lg-6">
                        <div class="job-box card mt-4">
                            <div class="p-4">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <a href="company-details.html">
                                            <img src="assets/images/featured-job/<?= htmlspecialchars($job['logo']) ?>" alt=""
                                                class="img-fluid rounded-3">
                                        </a>
                                    </div><!--end col-->
                                    <div class="col-lg-10">
                                        <div class="mt-3 mt-lg-0">
                                            <h5 class="fs-17 mb-1">
                                                <a href="job-details.html"
                                                    class="text-dark"><?= htmlspecialchars($job['title']) ?></a>
                                                <small
                                                    class="text-muted fw-normal">(<?= htmlspecialchars($job['experience']) ?>)</small>
                                            </h5>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <p class="text-muted fs-14 mb-0"><?= htmlspecialchars($job['name']) ?></p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>
                                                        <?= htmlspecialchars($job['location']) ?></p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i>
                                                        <?= htmlspecialchars($job['salary_range']) ?> / month</p>
                                                </li>
                                            </ul>
                                            <div class="mt-2">
                                                <span
                                                    class="badge bg-success-subtle text-success mt-1"><?= htmlspecialchars($job['job_type']) ?></span>
                                                <?php if ($job['urgency'] == 'Urgent'): ?>
                                                    <span
                                                        class="badge bg-warning-subtle text-warning mt-1"><?= htmlspecialchars($job['urgency']) ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="favorite-icon">
                                    <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                </div>
                            </div>
                            <div class="p-3 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-md-8">
                                        <div>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><i class="uil uil-tag"></i> Keywords :</li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                        class="primary-link text-muted">Ui designer</a>,</li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                        class="primary-link text-muted">developer</a></li>
                                            </ul>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div class="text-md-end">
                                            <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                                    class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end p-3-->
                        </div><!--end job-box-->
                    </div><!--end col-->
                <?php endforeach; ?>
            </div><!--end row-->

            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination mb-0 justify-content-center">
                            <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                                <a class="page-link"
                                    href="?page=<?= $page - 1 ?>&category=<?= urlencode($selectedCategory) ?>&location=<?= urlencode($selectedLocation) ?>&keywords=<?= urlencode($selectedKeywords) ?>"
                                    aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                    <a class="page-link"
                                        href="?page=<?= $i ?>&category=<?= urlencode($selectedCategory) ?>&location=<?= urlencode($selectedLocation) ?>&keywords=<?= urlencode($selectedKeywords) ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                                <a class="page-link"
                                    href="?page=<?= $page + 1 ?>&category=<?= urlencode($selectedCategory) ?>&location=<?= urlencode($selectedLocation) ?>&keywords=<?= urlencode($selectedKeywords) ?>"
                                    aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- END JOB-LIST -->