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

// Создание записей

$name = 'Михал Палыч';
$email = 'mihal.palich@areaweb.su';
$password = 'p@ssword';

$sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        'email' => $email,
     'name' => $name,
     'password' => $password
 ]);
} catch (PDOException $exception) {
    echo "Ошибка при добавлении нового пользователя: {$exception->getMessage()}";
}