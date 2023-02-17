<?php
function test(){
	static $a=1;
	$a++;
	echo $a;
};
test();
echo '<br/>';
test();
echo '<br/>';
test();
echo '<br/>';
?>