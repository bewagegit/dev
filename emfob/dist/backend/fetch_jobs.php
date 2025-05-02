<?php
require 'config.php';

// Query to fetch job listings
$query = "
    SELECT jobs.id, jobs.title, jobs.location, jobs.salary_range, jobs.job_type, jobs.experience, jobs.notes, jobs.urgency,
           job_categories.category_name, companies.name, companies.logo
    FROM jobs
    JOIN job_categories ON jobs.category_id = job_categories.id
    JOIN companies ON jobs.company_id = companies.id
";
$stmt = $pdo->query($query);
$jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
