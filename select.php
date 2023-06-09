<?php

// require_once __DIR__ . '/vendor/autoload.php';

$pdo = include_once __DIR__ . '/connection.php';

// Получение всех записей из таблицы users

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);

// С использованием цикла

while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
 var_dump($user);
}

// С использованием fetchAll()

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Получение одной записи по ID

// Прямые запросы

$userId = '1;truncate table users;';
$sql = "SELECT * FROM users WHERE id = $userId";
$stmt = $pdo->query($sql);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Подготовленный запрос (SELECT)

$userId = 1;
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// С именованными параметрами

$email = 'igor@areaweb.su   ';
$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute([
 'email' => $email
]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);