<?php
$str = array('a', 'b', 'c');
function f($s)
{
    return strtoupper($s); 
}
$result = array_map('f', $str);
var_dump($result);
?>
