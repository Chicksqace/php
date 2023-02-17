<?php
function fun1(){
	echo '函数';
}
fun1();
echo '<hr/>';
function fun2(){
	// return 返回结果 如果要返回多个结果，需要放到数组中返回
	return ['结果1','结果2','结果3'];
}
$re=fun2();
print_r($re);
echo '<hr/>';
function add($a,$b=6){
	return $a+$b;
}
echo add(3);
echo '<hr/>';
$num=99;
function fund(){
	global $num;
	$num=33;
}
fund();
echo $num;
echo '<hr/>';
// 传值和传址

function funB(&$num){
	$num=9;
}
$n=15;
funB($n);
echo $n;
?>