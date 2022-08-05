<?php
//print_r($_POST);
print_r($_FILES);  //接收上传文件的数据
// die("");
//die();
/* 
Array
(
    [pic] => Array
        (
             本地图片名
            [name] => aboutus_bg_02.jpg
            文件类型
            [type] => image/jpeg
            //临时文件路径
            [tmp_name] => C:\Windows\php1DBD.tmp
            // 错误  0代表没有错误  文件上传成功
            [error] => 0
            // 文件大小 
            [size] => 222730
        )

)
*/
// 本地图片名 aboutus_bg_02.jpg
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

//die();

// $_GET 接收地址栏传输的数据
// print_r($_GET);
$title = $_POST["title"];
$sort = $_POST["sort"];
$content = $_POST["content"];
$time = time(); //获取当前时间戳
// PDO(数据库信息,数据库帐号,数据库密码)
$db = new PDO(
    "mysql:host=localhost;dbname=test",
    "root",
    "root"
);
// 新增语句
// insert into 表名 set 字段1=值,字段2=值 
$sql = "insert into news 
        set title='$title'
            ,sort='{$sort}'
            ,content='{$content}'
            ,time='{$time}'
            ,pic='{$filename}'
            ";
//echo $sql;
//die(); // 终止           
//exec() 执行sql语句           
$result = $db->exec($sql); 
//返回的结果1 指的是影响了1条记录  
if($result ==1){
    // alert() 弹框
    // location.href 跳转链接
    echo "<script>
              alert('添加成功');
              location.href='index.php';  
          </script>";
}else{
    // history.back()  返回上一个页面
    echo "<script>
              alert('添加失败');
              history.back();  
          </script>";
}   



?>