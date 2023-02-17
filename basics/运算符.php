<?php

$a='hello';
$b=123;
echo $a.$b;
$a.=$b;
echo "<hr/>",$a;

// 自操作
$a=1;
$b=$a++;
$c=++$a;