<?php
// Azure Database Configuration
$host = getenv('DB_HOST') ?: "gatepass-mysql-server.mysql.database.azure.com";
$dbname = getenv('DB_NAME') ?: "gatepass_db";
$username = getenv('DB_USER') ?: "gatepassadmin";
$password = getenv('DB_PASS') ?: "6c9McPa9CM6feqR";

// For local development, use localhost
if (getenv('ENVIRONMENT') === 'local') {
    $host = "localhost";
    $username = "root";
    $password = "";
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
