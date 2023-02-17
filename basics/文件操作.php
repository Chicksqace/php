<?php
// 创建文件
// $f=fopen('d:/a/b/1.txt','w');
// fclose($f);
// 写入文件
// $f=fopen('d:/a/b/1.txt','w') or die("Unable to open file!");
// 这行代码的意思是如果找不到这个文件 就报后面的错误
// $str="关关雎鸠，在河之洲。窈窕淑女，君子好逑。
// // 参差荇菜，左右流之。窈窕淑女，寤寐求之。
// // 求之不得，寤寐思服。悠哉悠哉，辗转反侧。
// // 参差荇菜，左右采之。窈窕淑女，琴瑟友之。
// // 参差荇菜，左右芼之。窈窕淑女，钟鼓乐之。";
// $str='hello,world';
// fwrite($f,$str);//覆盖
// fclose($f);
// 读取文件
// echo file_get_contents('d:/a/b/1.txt','w');
// 读取指定字数的文件
// $f=fopen('d:/a/b/1.txt','r') or die("Unable to open file!");
// echo fread($f,filesize("d:/a/b/1.txt")/2);
// fclose($f);
// 逐行读取
// $f=fopen('d:/a/b/1.txt','r') or die("Unable to open file!");
// while(!feof($f)){		//输出单行直到 end-of-file
// 	echo fgets($f)."<br/>";
// }
// fclose($f);
// 移动文件
// rename("d:/a/b/1.txt","d:/a/1.txt");
// 删除文件
unlink("d:/a/1.txt");
?>