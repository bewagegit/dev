<?php include './backend/fetch_categories.php'; ?>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h3 class="title">Browser Jobs Categories</h3>
                    <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($categories as $category): ?>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="<?= htmlspecialchars($category['icon_class']); ?>"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="<?= htmlspecialchars($category['link']); ?>" class="text-dark stretched-link">
                                <h5 class="fs-18"><?= htmlspecialchars($category['category_name']); ?></h5>
                            </a>
                            <p class="text-muted mb-0"><?= htmlspecialchars($category['job_count']); ?> Jobs</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5 text-center">
                    <a href="job-categories.html" class="btn btn-primary btn-hover">Browse All Categories <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
