<?php
$id = $_GET["id"];
//echo $id;
$db = new PDO(
    "mysql:host=localhost;dbname=2022731",
    "root",
    "root");
//删除语句
//delete from 表名 where 删除的条件
$sql = "delete from news where id={$id}";
// echo $sql;
// die();
$res = $db->exec($sql);
if($res==1){
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