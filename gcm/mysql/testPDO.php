<?php

$host = 'localhost';
$db   = 'test';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';
$port = 3307;
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

try {
    $conn = new PDO($dsn, $user, $pass);

    $tis = $conn->query('SELECT id, name FROM stu');
    while ($row = $tis->fetch()) {
        echo $row['id'] . "\t";
        echo $row['name'];
        echo "<br>";
    };
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
};
