<?php
$str = "hTtp://env.xjtu.edu.cn/index.php";
$re = substr_count($str, "xjtu.edu.cn/ina");
echo $re;
/*
$str = strtolower($str);
echo $str;
echo "\n";
$str = str_ireplace("http://", "", $str);
echo $str;
echo "\n";
$str = str_ireplace("http://www.", "", $str);
echo $str;
echo "\n";
$position = strpos($str, "/");
$str = substr($str, 0, $position);
echo $str;
echo "\n";
//var_dump($result);
//echo $result;
*/
?>
