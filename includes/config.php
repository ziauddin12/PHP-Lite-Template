<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database config
$host = 'localhost';
$user = 'root';
$pass = '';
$baseName = 'dyad_lite_';
$dbFile = __DIR__ . '/db_name.txt';

// Reuse existing DB name if already created
if (file_exists($dbFile)) {
    $dbName = trim(file_get_contents($dbFile));
} else {
    $dbName = $baseName . uniqid();
}

try {
    // Connect to MySQL server
    $pdo = new PDO("mysql:host=$host;charset=utf8", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    // Create DB if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbName` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");

    // Switch to the DB
    $pdo->exec("USE `$dbName`");

    // Save the generated DB name for future loads
    if (!file_exists($dbFile)) {
        file_put_contents($dbFile, $dbName);
    }

} catch (PDOException $e) {
    // For development, we'll continue without database
    $pdo = null;
    error_log("Database connection failed: " . $e->getMessage());
}

// Global configuration
define('SITE_NAME', 'Dyad Lite Template');
define('SITE_URL', 'http://localhost:8000');
define('ASSETS_URL', SITE_URL . '/assets');
define('COMPONENTS_PATH', __DIR__ . '/../components');
define('PAGES_PATH', __DIR__ . '/../pages');

// Utility functions
function asset($path) {
    return ASSETS_URL . '/' . ltrim($path, '/');
}

function component($name) {
    return COMPONENTS_PATH . '/' . ltrim($name, '/');
}

function page($name) {
    return PAGES_PATH . '/' . ltrim($name, '/');
}

// Error handling
function handleError($message, $code = 500) {
    http_response_code($code);
    echo "<div class='min-h-screen flex items-center justify-center bg-red-50'>";
    echo "<div class='text-center p-8'>";
    echo "<h1 class='text-2xl font-bold text-red-600 mb-4'>Error {$code}</h1>";
    echo "<p class='text-red-500'>" . htmlspecialchars($message) . "</p>";
    echo "</div></div>";
    exit;
}
?>
