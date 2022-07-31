<a href="./index.php">back</a>
<h1>test</h1>

<?php
echo "<hr>";
echo "<h2>test1</h2>";
$num1 = 88;
if ($num1 >= 100) {
    echo "司令";
} else if ($num1 >= 90) {
    echo "军长";
} else if ($num1 >= 80) {
    echo "师长";
} else if ($num1 >= 70) {
    echo "旅长";
} else if ($num1 >= 60) {
    echo "团长";
} else if ($num1 >= 50) {
    echo "营长";
} else if ($num1 >= 40) {
    echo "连长";
} else if ($num1 >= 30) {
    echo "排长";
} else if ($num1 >= 20) {
    echo "班长";
} else {
    echo "工兵";
}

echo "<hr>";
echo "<h2>test2</h2>";
$sum2 = 0;
$i = 0;
while ($i++ < 100) {
    if ($i % 2 == 0) {
        $sum2 += $i;
    }
}
echo "总和：" . $sum2;
echo "<hr>";
echo "<h2>test3</h2>";

$sum3 = 0;
for ($i = 0; $i < 101; $i++) {
    if ($i % 2 != 0) {
        $sum3 += $i;
    }
}
echo "总和：" . $sum3;
echo "<hr>";
echo "<h2>test4</h2>";

$sum4 = 0;
$i = 49;
while ($i++ < 300) {
    if ($i % 2 != 0) {
        $sum4++;
    }
}
echo "共{$sum4}个奇数：";
echo "<hr>";
echo "<h2>test5</h2>";
echo "<hr>";
echo "<h2>test6</h2>";
echo "<hr>";
echo "<h2>test7</h2>";
echo "<hr>";
echo "<h2>test8</h2>";
echo "<hr>";
echo "<h2>test9</h2>";
$arr = array(21, 35, 56, 50, 68, 68);
$max = $arr[0];
$min = $arr[0];
foreach ($arr as $a) {
    $max = ($a > $max ? $a : $max);
    $min = ($a > $min ? $min : $a);
}
echo "max:{$max},min:{$min}";
echo "<hr>";
echo "<h2>test10</h2>";
for ($i = 0; $i < 10; $i++) {
    for ($j = 1; $j < $i + 1; $j++) {
        echo "{$j}*{$i}=" . $i * $j . " ";
    }
    echo "<br>";
}


?>