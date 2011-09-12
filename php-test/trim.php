<?php
$f = fopen("test", "r");
while(!feof($f))
{
    $line = fgets($f);
    $re = trim($line);
    echo $re;
}
?>
