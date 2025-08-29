<?php
// File path where config will be saved
$configPath = __DIR__ . '/includes/config.php';
$configPathSave = __DIR__ . '/includes/db_name.txt';

// Only create if config file doesn't exist
if (!file_exists($configPathSave)) {
    $configCode = <<<PHP
<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database config
\$host = 'localhost';
\$user = 'root';
\$pass = '';
\$baseName = 'myapp_';
\$dbFile = __DIR__ . '/db_name.txt';

// Reuse existing DB name if already created
if (file_exists(\$dbFile)) {
    \$dbName = trim(file_get_contents(\$dbFile));
} else {
    \$dbName = \$baseName . uniqid();
}

try {
    // Connect to MySQL server
    \$pdo = new PDO("mysql:host=\$host;charset=utf8", \$user, \$pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Create DB if it doesn't exist
    \$pdo->exec("CREATE DATABASE IF NOT EXISTS `\$dbName` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");

    // Switch to the DB
    \$pdo->exec("USE `\$dbName`");

    // Save the generated DB name for future loads
    if (!file_exists(\$dbFile)) {
        file_put_contents(\$dbFile, \$dbName);
    }

    return \$pdo;

} catch (PDOException \$e) {
    die("Database error: " . \$e->getMessage());
}
PHP;

    // Create the file
    file_put_contents($configPath, $configCode);
    echo "✅ config.php has been created successfully at: $configPath";
} else {
    echo "⚠️ config.php already exists.";
}

// Define the path to scan
$publicDir = __DIR__ . '/public';

// Output file
$routesJsonPath = 'routes.json';

// Find all .php files (not in subdirectories)
$phpFiles = array_filter(scandir($publicDir), function ($file) use ($publicDir) {
    return is_file("$publicDir/$file") && pathinfo($file, PATHINFO_EXTENSION) === 'php';
});

// Save to routes.json
file_put_contents($routesJsonPath, json_encode(array_values($phpFiles), JSON_PRETTY_PRINT));

echo "✅ routes.json generated with " . count($phpFiles) . " PHP page(s).\n";


$htaccessContent = <<<HTACCESS
RewriteEngine On

# ✅ Allow direct access to root index.php and root path (/)
RewriteCond %{REQUEST_URI} ^/?$ [OR]
RewriteCond %{REQUEST_URI} ^/index\\.php\$
RewriteRule ^ - [L]

# ✅ Redirect all other traffic to /public/
RewriteCond %{REQUEST_URI} !^/public/
RewriteRule ^(.*)\$ public/\$1 [L]
HTACCESS;

// Save the content to a .htaccess file
file_put_contents('.htaccess', $htaccessContent);

echo ".htaccess file created successfully.";