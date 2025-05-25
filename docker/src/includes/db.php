<?php
$dsn = 'sqlite:/var/www/html/src/database/scoring_app.sqlite';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

try {
    $pdo = new PDO($dsn, null, null, $options);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
