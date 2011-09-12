<?php
$c = 0;
$max = 4;
$array = array(0, 1, 2, 3, 4, 5, 6, 7, 8 , 9);
foreach($array as $i)
{
    if(0 == $c % $max)
    {
        echo $i;
        echo "\n";
    }
    //The right code is as follow:
    //else if(($max - 1) == $c % $max)
    if(($max - 1) == $c % $max)
    {
        echo 'really';
        echo $i;
    }
    else
        echo $i;
    ++$c;
}
?>
