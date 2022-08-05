<?php
// var_dump(0 == false);
// var_dump(0 === 0);
// var_dump(1 != 2);
// var_dump(0 !== false);
// die();

//echo date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻列表</title>
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
       td img{
         max-width: 200px;
         max-height: 200px;
       }
    </style>
</head>
<body>

<?php

// 当前时间戳 从1970-1-1到现在的秒数
// echo 2022-1970;
// echo "<br>";
// echo time()/ (365*24*3600);

$db = new PDO(
  "mysql:host=localhost;dbname=test",
  "root",
  "root"
);  
//默认第一页
$page = isset($_GET["page"])?$_GET["page"]:1; //当前页
$size = 5; //显示记录条数
// 分页起始值 = (当前页-1)*每页显示条数
$start = ($page-1)*$size; //分页起始值
//查询记录总条数
//count(*) 统计条数
// count(*) as total  取别名
$sql="select count(*) as total from news";
// fetch() 返回一条记录
$res = $db->query($sql)->fetch();
/* ["count(*)"=>23] */
//print_r($res["total"]);
$total = $res["total"]; //记录总条数
$pages = ceil($total/$size); //总页数
//die();


// order by  按指定字段 排序
// order by id desc 按id字段从大到小排序
//             desc 降序 从大到小排序
//             asc  升序 从小到大排序
// limit 起始值,截取条数  
$sql = "select * from news 
order by id desc limit {$start},{$size}";
echo $sql; 
$res = $db->query($sql)->fetchAll();
$str = "";
foreach($res as $v){
   // date(日期格式,时间戳)
   // Y年 m月 d日 H时 i分 s秒
  $time = date("Y-m-d H:i:s",$v["time"]);
//   if($v["pic"]){
//      $pic = "<img src='/upload/{$v["pic"]}'>";
//   }else{
//      $pic = "";
//   }
  $pic = $v["pic"]?"<img src='/upload/{$v["pic"]}'>":"";
  $str .= "<tr>
<td>
  <input type='checkbox' 
         name='id[]' value='{$v["id"]}'> 
</td> 
            <td>{$v["id"]}</td>
            <td>{$v["title"]}</td>
            <td>{$pic}</td>
            <td>{$v["sort"]}</td>
            <td>{$v["content"]}</td>
            <td>{$time}</td>
            <td>
 <a href='update.php?id={$v["id"]}'>编辑</a>           
 <a href='del.php?id={$v["id"]}'>删除</a>
            </td>
          </tr>";
}
?><a href="add.php">添加新闻</a>

<form action="dels.php">
  <table>
     <thead>
        <tr>
            <td>选择</td>
            <td>ID</td>
            <td>新闻标题</td>
            <td>新闻图片</td>
            <td>新闻类别</td>
            <td>新闻内容</td>
            <td>添加时间</td>
            <td>操作</td>
        </tr>
     </thead> 
     <tbody>
        <?php echo $str; ?>
     </tbody>  
  </table>
  <input type="submit" value="删除">
<div>
   <?php
      for ($i=1; $i <= $pages ; $i++) { 
         echo " <a href='index.php?page={$i}'>
                  {$i}
                </a> ";
      }
   ?>
</div>

</form>
</body>
</html>