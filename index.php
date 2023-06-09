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

// Получение всех записей из таблицы users

 $sql = "SELECT * FROM users";
 $stmt = $pdo->query($sql);

// С использованием цикла

 while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
     dump($user);
 }

// С использованием fetchAll()

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Получение одной записи по ID

// Прямые запросы

$userId = '1;truncate table users;';
$userId = 1;
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

