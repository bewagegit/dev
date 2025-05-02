<?php

include_once("constants.php");

// Database configuration
$host = HOSTNAME;
$dbname = DBNAME;
$username = USERNAME; // Replace with your MySQL username
$password = PASSWORD; // Replace with your MySQL password

global $pdo;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
