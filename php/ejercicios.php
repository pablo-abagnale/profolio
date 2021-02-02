<?php
    function test(){
	static $a = 0;
	return++$a;
}
echo(test()."<br>");
echo(test()."<br>");
echo(test()."<br>");
?>