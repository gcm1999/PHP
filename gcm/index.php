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
    echo $x;
    $add = function($a,$b){
        return $a+$b;
    };
    $name = "gcm";
    echo "<hr>My name is" . $name;
    echo "<hr>My name is{$name}";
    echo "<hr>" . $add(1,2);
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

    ?>

</body>

</html>