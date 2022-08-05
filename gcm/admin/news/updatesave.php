<?php
// get 提交 用 $_GET接收
// post 提交 用 $_POST接收
$title = $_POST["title"];
$sort = $_POST["sort"];
$content = $_POST["content"];
$id = $_POST["id"];

//新闻图片
$filename = $_FILES["pic"]["name"];
if($_FILES["pic"]["error"]==0){ //成功上传执行
    // 获取文件后缀 jpg
    $extension = pathinfo($filename,PATHINFO_EXTENSION);
    // in_array() 判断 是否在数组中
    if( ! in_array($extension, 
       ["jpg","png","gif","webp"])){
        echo "<script>
                 alert('只能上传图片');
                 history.back();
              </script>";
        die();  //终止执行    
    }
    // rand() 随机函数
    $filename=time().rand(100,999).".".$extension;
    //      1612456362 588 .jpg
    //临时存放路径
    $tmp_name = $_FILES["pic"]["tmp_name"];
    //move_uploaded_file(原路径,新路径) 文件移动函数
    move_uploaded_file($tmp_name,
    "../../upload/{$filename}");
}
$db = new PDO(
    "mysql:host=localhost;dbname=test",
    "root",
    "root");
//更新语句
// update 表名 set 字段=值 where 更新条件
// 有上传图片 则更新 pic字段
$pic = $filename?",pic='{$filename}'":"";
$sql = "update news set title='{$title}',
        sort='{$sort}',content='{$content}'
         {$pic}
        where id={$id}";
// echo $sql;
// die();
$res = $db->exec($sql);
//var_dump($res);
//die();
// 0 没有修改
// 1 修改了，影响了一条记录
if($res !== false){
    echo "<script>
              alert('编辑成功');
              location.href='index.php';  
          </script>";
}else{
    echo "<script>
              alert('编辑失败');
              history.back();  
          </script>";
} 
?>