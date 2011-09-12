<?php class test
{
	var $nodeDomain = array
		("gd88" =>"10.10.104.88", "gd02" =>"10.10.104.2");
	var $node = array
		("x86-mysql" =>$nodeDomain['gd88'],
		 "x86-hbase" =>$nodeDomain['gd02']);

	function show ()
	{
        print_r($node);
	}
}
?>
