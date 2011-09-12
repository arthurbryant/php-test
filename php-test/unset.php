<?php
$str = str_repeat('1', 255);
$s = memory_get_usage();
$p = &$str;
unset($str);
echo $str;
unset($p);
$e = memory_get_usage();
echo "release: ". ($s - $e). "\n";
echo $p;
?>
