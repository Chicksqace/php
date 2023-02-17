<?php
//随机数
echo rand(0,10)."<br />";
// 绝对值
echo abs(-3.14)."<br />";
// 极值
echo max(3.14,-1,20000)."<br />";
echo max("1","2","3")."<br />";
echo max(array(
1778,
2424,
2435,
5432
))."<br />";
echo "<hr/>";
echo round(3434.4545)."<br />";
echo round(3434.4545,-2)."<br />";
// 向上取整
echo ceil(3434.4545)."<br />";
// 向下取整
echo floor(3434.4545)."<br />";
echo "<hr/>";
// 取余
echo fmod(5,2);
echo "<hr/>";
// 幂运算
echo pow(2,4)."<br />";//2^4
echo pow(16,1/2)."<br />";//开方
echo sqrt(36);//开方
echo "<hr/>";
// 三角函数
echo sin(deg2rad(45))."<br />";
echo cos(deg2rad(45))."<br />";
echo tan(deg2rad(45))."<br />";
// 常量函数
echo "<hr/>";
echo exp(3); //返回e的arg幂次值，e为自然对数的底数，值为2.718282
echo "<hr/>";
echo pi(); //返回圆周率的值
?>