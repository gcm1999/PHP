<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>产品列表</title>
    <style>
       table{
          border-collapse:collapse;
          width: 80%;
       }
       table>thead>tr>td{
        text-align: center;
       }
       td{
          border:1px solid #000;
       }
    </style>
</head>
<body>

<?php
$db = new PDO(
  "mysql:host=localhost;dbname=2022731",
  "root",
  "root"
);  
$sql = "select * from product"; 
$res = $db->query($sql)->fetchAll();
$str = "";
foreach($res as $v){
  $str .= "<tr>
            <td>{$v["id"]}</td>
            <td>{$v["title"]}</td>
            <td>{$v["sort"]}</td>
            <td>{$v["content"]}</td>
          </tr>";
}
?><a href="add.php">添加产品</a>
  <table>
     <thead>
        <tr>
            <td>ID</td>
            <td>产品标题</td>
            <td>产品类别</td>
            <td>产品内容</td>
        </tr>
     </thead> 
     <tbody>
        <?php echo $str; ?>
     </tbody>  
  </table>
</body>
</html>