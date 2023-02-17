<?php
// 声明一个数组
$arr=array("a","b","c",1,2,3);
// 添加元素
$arr[]=4;
$arr[]=5;
print_r($arr);
echo "<hr/>";
$arr1=array("浙江"=>"台州","山东"=>"济南");
$arr1["湖南"]="长沙";
$arr1[]="a";
$arr1[]="b";
print_r($arr1);
echo "<hr/>";
// 输出数组：
echo $arr[3],$arr1["浙江"];
echo "<hr/>";
// 数组长度
$len=count($arr);
echo $len;
echo "<hr/>";
// 遍历元素
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}
echo "<hr/>";
// 按键值对遍历
foreach($arr1 as $key=>$value){
	echo "$key = $value ";
}
echo "<hr/>";
// 字符串转换为数组
echo '<br/>';
$a="2023/2/14";
$a=explode("/",$a);
print_r($a);
echo '<hr/>';
// 数组转换为字符串方法
$a=implode("/",$a);
print_r($a);
echo '<hr/>';
// 获取数组键
echo "<p>返回所有的键名</p>";
print_r(array_keys($arr));
// 获取数组值
echo '<hr/>';
echo "<p>返回所有的值</p>";
print_r(array_values($arr));
// 查看是否存在
echo '<hr/>';
echo "<p>查看2是否存在</p>";
// 这个true的意思是类型也必须相等，而不是强制转换了
print_r(in_array("a",$arr,true));
// 查找
echo '<hr/>';
echo array_search("c",$arr);//返回键
// 查看键是否存在
echo '<hr/>';
echo '键是否存在';
echo array_key_exists("浙江",$arr1);
// 数组压栈
echo '<hr/>';
$arr=array();
array_push($arr,"hello");
array_push($arr,"world",6);
print_r($arr);
// 数组弹栈 从尾部弹
echo '<hr/>';
echo array_pop($arr);
echo array_pop($arr);
// 头部删除
array_shift($arr);
// 头部添加
array_unshift($arr,"你好");
echo '<hr/>';

// 数组去重
$arr=array("a","b","c",1,2,3,3,2,1,"b");
print_r($arr);
echo "<p>删除重复后的数组</p>";
print_r(array_unique($arr));
echo '<hr/>';
unset($arr['2']);
print_r($arr);
echo '<hr/>';
// 移除插入
$arr=array(
	"a",
	"b",
	"c",
	"d",
	"e"
);
echo '移除插入';
// 在1的位置删除0个，插入一个2
array_splice($arr,1,2,["a","b",3,4,5]);
print_r($arr);
echo '<hr/>';

// 数组合并
$arr1=array(
1
);
$arr2=array(
2
);
echo '数组合并';
var_dump(array_merge($arr1,$arr2));
echo '<hr/>';
// 数组分割
echo '数组分割';
$arr=array(
	1,
	2,
	3,
	4,
	5,
	6,
	7,
	8,
	9,
);
print_r($arr);
echo '后来的'.'<br/>';

print_r(array_chunk($arr,4));
echo '<hr/>';
// 数组的截取
print_r(array_slice($arr,2));
print_r(array_slice($arr,-3,3));
?>