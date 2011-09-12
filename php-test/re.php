<?php
$str = "http://www1.xjtu.edu.cn/index.php";
echo $str;
echo "\n";
$start = strpos($str, ".");
$str = substr($str, $start+1);
echo $str;
echo "\n";
$end = strpos($str, "/");
$str = substr($str, 0, $end);
echo $str;
?>
