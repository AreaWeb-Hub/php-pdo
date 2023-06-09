<?php

// require_once __DIR__ . '/vendor/autoload.php';

$host = 'localhost';
$dbname = 'areaweb';
$username = 'root';
$password = 'password';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port;", $username, $password);    
} catch (PDOException $exception) {
    echo "Error: {$exception->getMessage()}";
}

// Изменение записей

$userId = 4;
$newPassword = 'VeryStrongP@ssword';
$sql = "UPDATE users SET password = :password WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
 'password' => $newPassword,
 'id' => $userId
]);