<?php
// 验证GD库是否开启了
// header('Conten-Type:text/html,charset=utf-8');
// phpinfo();
// // 1.创建画布
$im= imagecreatetruecolor(100, 100);//创建空白背景
$white=imagecolorallocate($im,255,255,255);//设置绘画颜色
$blue=imagecolorallocate($im,0,0,64);
// // 
imagefill($im,0,0,$blue);//绘制背景
imageline($im,0,0,200,200,$white);//画线
imagestring($im, 5, 0, 0, 'Hello world!', $white);//添加字符 背景 字号 x y 字 字的颜色
// // 3.输出图片
header('Content-type:image/png');
imagepng($im); //以png格式将图像输出
// // 4.释放资源
imagedestroy($im);
?>