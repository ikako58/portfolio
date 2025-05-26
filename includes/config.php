<?php
// Database configuration
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'portfolio_db');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("❌ Database Connection failed: " . $conn->connect_error);
}

// Set charset
if (!$conn->set_charset("utf8")) {
    die("❌ Error setting charset: " . $conn->error);
}

// Define root path
define('ROOT_PATH', dirname(__DIR__));
?>