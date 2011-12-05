<?php
$bbbb=array("11"=>"aaa","22"=>"bbb");
//只能输出值value不能输出key
//foreach($bbbb as $color)
//echo $color;
////value与key都可输出
foreach($bbbb as $key=>$value)
echo $key."=>".$value;
////value与key都可输出
while($color=each($bbbb))
{
echo $color['key'] . "\n";
echo $color['value'] . "\n";
}
?>
