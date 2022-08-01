<?php
$host = 'localhost';
$db   = 'test';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';
$port = 3307;
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
    // echo $_POST["title"];
    print_r($_GET);
    $sort = $_GET['sort'];
    $title = $_GET['title'];
    $content = $_GET['context'];
    $conn = new PDO($dsn, $user, $pass);
    $sql = "insert into news(id,title,sort,content) values (null,'{$title}','{$sort}','{$content}')";
    // $sql = "insert into news 
    // set title='{$title}',
    // sort='{$sort}',
    // content='{$content}'
    // ";
    // $tis = $conn->prepare("INSERT INTO news(id,sort,title,content) values(?, ?,?,?)");
    // $tis->bindParam(1, null);
    // $tis->bindParam(2, $_GET['sort']);
    // $tis->bindParam(3, $_GET['title']);
    // $tis->bindParam(4, $_GET['context']);
    $conn->exec($sql);
} catch (\Throwable $th) {
    echo "Error: " . $th->getMessage();
}




?>