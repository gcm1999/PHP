<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helloPHP</title>
</head>

<body>
    <h1>helloPHP</h1>
    <?php
    /* php代码必须放在<?php  ?>  */

    // 输出信息到浏览器
    echo "helloPHP";
    echo 100;
    echo "<h1>\"大\"标题</h1>";

    echo "<div style='background-color:pink;height:100px;line-height:100px;font-size:36px;color:red;'>gcm</div>";

    $x = 10;
    echo $x++;
    $add = function ($a, $b) {
        return $a + $b;
    };
    $name = "gcm";
    echo "<hr>My name is" . $name;
    echo "<hr>My name is{$name}";
    echo "<hr>" . $add(1, 2);
    $str = "<table>";
    $str .= "<tr>";
    $str .= "<th>姓名</th>";
    $str .= "<th>性别</th>";
    $str .= "<th>年龄</th>";
    $str .= "</tr>";
    $str .= "<tr>";
    $str .= "<td>gcm</td>";
    $str .= "<td>男</td>";
    $str .= "<td>24</td>";
    $str .= "<tr>";
    $str .= "<tr>";
    $str .= "<td>gcm</td>";
    $str .= "<td>男</td>";
    $str .= "<td>24</td>";
    $str .= "<tr>";
    $str .= "</table>";

    echo $str;
    $flag = true;
    $flag2 = false;
    echo $flag;
    echo $flag2;
    // echo后面只能输出数字或字符串
    // var_dump()显示变量相关属性
    var_dump($flag);
    $aa = 1;
    $bb = "1";
    var_dump($aa == $bb);


    $money = 100;
    if($money){
        echo "===========================";
    }
    echo "<hr>";

    $num = 1;
    
    switch($num){
        case 1:$result = "星期一";break;
        case 2:$result = "星期2";break;
        case 3:$result = "星期3";break;
        case 4:$result = "星期4";break;
        case 5:$result = "星期5";break;
        default:$result = "星期67";break;
    }
    echo $result;

    echo "<hr>";

    echo $arr = ['a' => 1,2,3,4,5];
    foreach($arr as $k => $v){
        echo "<hr>";
        echo '$k:' . $k;
        echo '$v:' . $v;
    }

    ?>

</body>
<style>
    table {
        width: 600px;
        margin: 16px auto;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }

    table td,
    table th {
        border: 1px solid black;
    }
</style>

</html>