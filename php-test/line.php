<?php
$f = fopen("test", "r");
while(!feof($f))
{
    $line = fgets($f);
    $key = "大学";
    $pos = strpos($line, $key);
    echo $pos, "\n";
}
?>
