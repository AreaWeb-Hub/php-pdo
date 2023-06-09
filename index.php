<?php

require_once __DIR__ . '/vendor/autoload.php';

$host = '127.0.0.1';
$dbname = 'pdo';
$username = 'root';
$password = 'password';
$port = 3303;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port;", $username, $password);    
} catch (PDOException $exception) {
    echo "Error: {$exception->getMessage()}";
}

