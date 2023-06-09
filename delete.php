<?php

// require_once __DIR__ . '/vendor/autoload.php';

$pdo = include_once __DIR__ . '/connection.php';

// Удаление записей

$userId = 4;
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);