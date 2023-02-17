<?php
// 当前目录下创建文件夹
// mkdir("./test");
// 移动文件夹
// rename("./test","../test11");
// 删除文件夹
// rmdir("../test11");
// 判断文件类型
// $path='C:\Users\PC\Videos\Captures';
// echo filetype($path);
// filetype("路径"); //返回一个字符串
// is_dir("路径"); //如果是目录会返回true  判断文件是不是目录
// is_file("路径"); //与dir相反 判断文件是不是文件

// 文件遍历
function getFiles($fpath){
	$dir=opendir($fpath);//打开一个目录，返回目录资源
	while($url=readdir($dir)){//readdir 返回所有的文件夹的名称
		$f=$fpath.'/'.$url;
		echo $f.'='.filetype($f)."<br>";
		if($url!='.'&&$url!='..'&&is_dir($f)){
			//判断这个url不是. 或者.. 文件夹 那么就采用递归调用
			// is_dir相当于把他的子文件夹打开了
			getFiles($f);
			echo '<hr/>';
		}
		
	}
	closedir($dir);
}
$fpath="C:\Users\PC\Videos\Captures";
getFiles($fpath);
?>