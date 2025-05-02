<?php
// Include database configuration
require 'config.php';

// Fetch job categories
$query = "SELECT category_name, job_count, icon_class, link FROM job_categories";
$stmt = $pdo->query($query);
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
