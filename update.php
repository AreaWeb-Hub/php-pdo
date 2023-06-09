<?php

// require_once __DIR__ . '/vendor/autoload.php';

$pdo = include_once __DIR__ . '/connection.php';

// Изменение записей

$userId = 4;
$newPassword = 'VeryStrongP@ssword';
$sql = "UPDATE users SET password = :password WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
 'password' => $newPassword,
 'id' => $userId
]);