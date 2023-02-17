<?php
date_default_timezone_set("Asia/Shanghai");
$str=date("Y-m-d H:i:s");
echo $str;
echo "<hr/>";
$str1=date("Y年m月d H时i分s秒");
echo $str1;
echo "<hr/>";
// 日期加减
$d1=date('Y-m-d',strtotime('-1 day'));//减去一天
echo $d1;
echo "<hr/>";
$d2=date('Y-m-d H:m:s',strtotime('+1 day +1 hour +1minute'));//加1天 1小时 1分钟
echo $d2;
echo "<hr/>";
// 相减
$d1=strtotime("01/31/2023");
$d2=strtotime("05/30/2023");
echo ($d2-$d1)/3600/24;
echo "<hr/>";
// 时间戳
echo strtotime("now");//当前的时间戳
echo "<hr/>";
echo date('Y-m-d H:m:s',strtotime("2023-01-24 12:20:43"));
?>