<?
exec("/bin/ls -l "); 
exec("/bin/ls -l /home", $res); 
echo "start\n";
var_dump($res);
echo "\nend\n";
#$res是一个数据，每个元素代表结果的一行

exec("/bin/ls -l /home", $res, $rc); 
##$rc的值是命令/bin/ls -l的状态码。成功的情况下通常是0 
if($rc == 0)
{
    print_r($res);
}
else
{
    echo "error";
}
#?>
