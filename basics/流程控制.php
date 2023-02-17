<?php 

$day="day3";

if($day=="day2"){
	echo "day2";
}else if($day=="day3"){
	echo "day3";
}else{
	echo "day1";
}

echo "<hr/>";


$num=11;

switch($num){
	case 1:
		echo 1;
		break;
	case 2:
		echo 2;
		break;
	case 3:
		echo 3;
		break;
	default:
		echo 4;
		break;
}

echo "<hr/>";

// 循环结构 for循环、while循环、Do-While循环、foreach循环（针对数组）
for($i = 0;$i<10;$i++)
{
echo $i;
}
// while Do-while循环
while($i <= 10)
{
echo $i++ ;
}
echo "<hr/>";
// 循环控制
// 1、中断控制：重新开始从头循环 continue(需求，输出1-100的5的倍数)
$i = 1;
while($i <= 100){
	if($i % 5 != 0){
		$i++;
		continue;}
	echo $i++." ";
}
echo "<hr/>";
$i=1;
do{
	if($i % 2==0){
		echo $i." ";
	}
	$i++;
}while($i<=10);