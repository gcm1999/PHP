<?php

echo "<hr>";
echo "<h2>q1</h2>";

$arr = array(1,3,10,50,8);

function getMaxAndMin($arr){
    $data["max"] = $arr[0];
    $data["min"] = $arr[0];
    foreach ($arr as $a) {
        $data["max"] > $a ?: $data["max"] = $a;
        $data["min"] < $a ?: $data["min"] = $a;
    }
    return $data;
}
print_r(getMaxAndMin($arr));


echo "<hr>";
echo "<h2>q2</h2>";
$arr = array(100,200,300);

function getSumAndAvg($arr)
{
    $data["sum"] = 0;
    $data["avg"] = 0;
    foreach ($arr as $a) {
        $data["sum"] += $a;
    }
    $data["avg"] = $data["sum"] / count($arr);
    return $data;
}
print_r(getSumAndAvg($arr));



echo "<hr>";
echo "<h2>q1</h2>";
echo "<hr>";
echo "<h2>q1</h2>";
echo "<hr>";
echo "<h2>q1</h2>";
echo "<hr>";
echo "<h2>q1</h2>";
