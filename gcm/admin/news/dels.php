<?php
//print_r($_GET);
// implode(间隔符,数组)
// isset() 判断是否设置  有设置返回true 
if(!isset($_GET["id"])){
    echo "<script>
            alert('请先选择要删除的记录');
            history.back();
         </script>";
    die();
}
$id = implode(",",$_GET["id"]); // 6,5,4
//echo $id;
// delete from news where id=1
// delete from news where id in(1,2,3)
$db = new PDO(
    "mysql:host=localhost;dbname=2022731",
    "root",
    "root");
//删除语句
//delete from 表名 where 删除的条件
$sql = "delete from news where id in({$id})";
$res = $db->exec($sql);
if($res){
    echo "<script>
            alert('删除成功');
            location.href='index.php';
         </script>";
}else{
    echo "<script>
            alert('删除失败');
            history.back();
         </script>";
}


?>