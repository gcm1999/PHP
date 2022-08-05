<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加新闻</title>
</head>
<body>
<?php
$db = new PDO(
    "mysql:host=localhost;dbname=test",
    "root",
    "root"
);
$id = $_GET["id"];
$sql = "select * from news where id='{$id}'";
//  fetchAll() 查询多条
//  fetch()  查询一条
$res = $db->query($sql)->fetch();
//print_r($res);
?>
<!-- 
    method 提交类型 post 、get(默认)
           get 提交的数据在地址栏上可见   少量数据
           post 提交的数据在地址栏看不见  大量数据
-->
<form action="updatesave.php" 
method="post" enctype="multipart/form-data">
    <!-- readonly 只读属性 -->
新闻标题: <input type="text" name="title"
value="<?php echo $res["title"]; ?>"><br>
<!-- type="file" 文件类型 -->
新闻图片：<input type="file" name="pic"><br>
新闻类别: <select name="sort">
<option value="公司新闻"
<?php 
echo $res["sort"]=="公司新闻"?"selected":""; 
?>
>公司新闻</option>
<option value="行业动态"
<?php 
echo $res["sort"]=="行业动态"?"selected":""; 
?>
>行业动态</option>
<option value="展会新闻"
<?php 
echo $res["sort"]=="展会新闻"?"selected":""; 
?> >展会新闻</option>
     </select>  <br>
新闻内容：
<textarea name="content"><?php 
   echo $res["content"]; ?></textarea><br>
   <!-- type="hidden" 隐藏文本框 -->
    <input name="id" type="hidden"
    value="<?php echo $res["id"]; ?>">
    <input type="submit" value="提交">         
</form>
</body>
</html>