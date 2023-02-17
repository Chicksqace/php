<?php

$str='你好abcsddwfwfskfsa';
// 一个汉字3个字符 英文一个字符 空格算一个字符
echo strlen($str);
echo '<hr/>';
// 字符串的拼接
echo $str.'字符串';
echo '<hr/>';
// 字符串的查找
echo strpos($str,"好");
echo '<hr/>';
// 字符串的截取
echo strstr($str,"f");//之后的截取
echo '<hr/>';
echo substr($str,6,2);//substr()可以设置截取的开始位置和结束位置
echo '<hr/>';
// 字符串的替换
echo str_replace("好","好吗",$str);
echo '<hr/>';
// 字符串转换为html换行符
$str="aaaaaaaaaaaa\nbbbbbbbbbbbbbb\nsssssssssss";
echo nl2br($str);
echo '<hr/>';
$str='你好abcsddwfwfskfsabbb';
// 字符串拆分
print_r(explode("a",$str));