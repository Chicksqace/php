<?php
$a="1";
$b="1.1abc";

// 自动转换
echo $a+$b;			//算术+运算，系统先转换成数值类型（整形和浮点型），然后运算
// 强制转换
echo '<hr/>',(float)$a,(float)$b;

// 判断数据类型
echo '<hr/>';
var_dump(is_int($a));
var_dump(is_string($a));

echo gettype($a);
var_dump(settype($a,'int'));
echo gettype($a),$a;