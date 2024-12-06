<?php
$host = 'localhost';
$dbname = 'tintuc';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage();
}
