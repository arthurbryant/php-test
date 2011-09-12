<?php
// good-1111 will go wrong as it pharse it to $good - 1111 
$a = "good1111";
$good1111 = "bad";
echo $$a;
?>
