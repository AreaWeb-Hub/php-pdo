<?php

// require_once __DIR__ . '/vendor/autoload.php';

$pdo = include_once __DIR__ . '/connection.php';

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
