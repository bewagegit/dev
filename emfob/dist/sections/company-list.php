<?php
require './backend/config.php'; // Include database connection

// Fetch filters from the URL
$orderby = $_GET['orderby'] ?? 'df'; // Default order
$perPage = $_GET['per_page'] ?? 8;   // Items per page (default 8)
$page = $_GET['page'] ?? 1;          // Current page (default 1)

// Calculate offset
$offset = ($page - 1) * $perPage;

// Build query based on filters
$orderQuery = match ($orderby) {
    'ne' => 'ORDER BY id DESC', // Newest
    'od' => 'ORDER BY id ASC',  // Oldest
    'rd' => 'ORDER BY RAND()',  // Random
    default => ''
};

$query = "
    SELECT * 
    FROM companies 
    $orderQuery
    LIMIT :offset, :limit
";

$stmt = $pdo->prepare($query);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->execute();

$companies = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch total count for pagination
$countQuery = "SELECT COUNT(*) as total FROM companies";
$totalStmt = $pdo->query($countQuery);
$total = $totalStmt->fetch(PDO::FETCH_ASSOC)['total'];
$totalPages = ceil($total / $perPage);
?>


<section class="section">
    <div class="container">
        <!-- Filters -->
        <div class="row align-items-center mb-4">
            <div class="col-lg-8">
                <h6 class="fs-16 mb-0">Showing <?= count($companies) ?> of <?= $total ?> results</h6>
            </div>
            <div class="col-lg-4">
                <form method="GET" action="">
                    <div class="row">
                        <!-- Order By Filter -->
                        <div class="col-lg-6">
                            <select class="form-select" name="orderby" onchange="this.form.submit()">
                                <option value="df" <?= $orderby === 'df' ? 'selected' : '' ?>>Default</option>
                                <option value="ne" <?= $orderby === 'ne' ? 'selected' : '' ?>>Newest</option>
                                <option value="od" <?= $orderby === 'od' ? 'selected' : '' ?>>Oldest</option>
                                <option value="rd" <?= $orderby === 'rd' ? 'selected' : '' ?>>Random</option>
                            </select>
                        </div>
                        <!-- Items Per Page Filter -->
                        <div class="col-lg-6">
                            <select class="form-select" name="per_page" onchange="this.form.submit()">
                                <option value="8" <?= $perPage == 8 ? 'selected' : '' ?>>8 per Page</option>
                                <option value="12" <?= $perPage == 12 ? 'selected' : '' ?>>12 per Page</option>
                                <option value="16" <?= $perPage == 16 ? 'selected' : '' ?>>16 per Page</option>
                            </select>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <!-- Job Listings -->
        <div class="row">
            <?php foreach ($companies as $company): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center mb-4">
                        <div class="card-body px-4 py-5">
                            <?php if ($company['rating']): ?>
                                <div class="featured-label">
                                    <span class="featured"><?= $company['rating'] ?> <i class="mdi mdi-star-outline"></i></span>
                                </div>
                            <?php endif; ?>
                            <img src="assets/images/featured-job/<?= $company['logo'] ?>" alt="<?= $company['name'] ?>"
                                class="img-fluid rounded-3">
                            <div class="mt-4">
                                <h6 class="fs-18 mb-2"><?= $company['name'] ?></h6>
                                <p class="text-muted mb-4"><?= $company['location'] ?></p>
                                <a href="company-details.php?id=<?= $company['id'] ?>"
                                    class="btn btn-primary"><?= $company['total_openings'] ?> Opening Jobs</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 mt-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination job-pagination mb-0 justify-content-center">
                        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                            <a class="page-link"
                                href="?page=<?= $page - 1 ?>&orderby=<?= $orderby ?>&per_page=<?= $perPage ?>">
                                <i class="mdi mdi-chevron-double-left fs-15"></i>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link"
                                    href="?page=<?= $i ?>&orderby=<?= $orderby ?>&per_page=<?= $perPage ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                            <a class="page-link"
                                href="?page=<?= $page + 1 ?>&orderby=<?= $orderby ?>&per_page=<?= $perPage ?>">
                                <i class="mdi mdi-chevron-double-right fs-15"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>