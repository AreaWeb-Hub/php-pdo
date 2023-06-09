<?php

$host = 'localhost';
$dbname = 'areaweb';
$username = 'root';
$password = 'password';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port;", $username, $password);
    return $pdo;
} catch (PDOException $exception) {
    echo "Error DB connection: {$exception->getMessage()}";
    return null;
}