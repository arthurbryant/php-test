<?php
$str = "hello, world";
$key = 'h';
$pos = strpos($str, $key);
if($pos !== false)
echo $pos;
$key = 'q';
$pos = strpos($str, $key);
if($pos != false)
echo $pos;
?>
