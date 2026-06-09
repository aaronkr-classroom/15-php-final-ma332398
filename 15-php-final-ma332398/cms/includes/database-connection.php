<?php
$type     = 'mysql';        // 데이터베이스 종류
$server   = 'localhost';    // 서버
$db       = 'phpbook-1';    // 데이터베이스 이름
$port     = '3306';         // XAMPP 포트
$charset  = 'utf8mb4';      // 문자 인코딩

$username = 'root';         // XAMPP 기본 계정
$password = '';             // XAMPP 기본 비밀번호 없음

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// DO NOT CHANGE ANYTHING BENEATH THIS LINE
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}