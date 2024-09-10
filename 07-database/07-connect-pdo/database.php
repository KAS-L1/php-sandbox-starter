<?php               


// Database Creds
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'root';
$password = '';


$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8";

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Database Connected...';
} 

catch(PDOException $e) {
    // Handle PDO exception
    echo 'Connection failed: ' . $e->getMessage();
}