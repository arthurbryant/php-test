<?
exec("/bin/ls -l "); 
exec("/bin/ls -l /home", $res); 
echo "start\n";
var_dump($res);
echo "\nend\n";
#$res��һ�����ݣ�ÿ��Ԫ�ش�������һ��

exec("/bin/ls -l /home", $res, $rc); 
##$rc��ֵ������/bin/ls -l��״̬�롣�ɹ��������ͨ����0 
if($rc == 0)
{
    print_r($res);
}
else
{
    echo "error";
}
#?>
