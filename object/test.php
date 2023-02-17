<?php 
// 引入
// require_once('封装.php');
// $user=new User(1,'张三',20);
// // -> 就是访问到User里面的属性和方法 类似于java中的 user.id=1
// // $user->id=1;
// // $user->name='张三';
// $user->age=15;
// echo '<br/>';
// echo '还有多少钱'.$user->lookMoney();
// echo '<br/>';
// echo $user->age;
require_once('继承.php');
// $worker=new Worker(2,"李四",20);
// echo '<br/>';
// $worker->setMoney(1000);
// echo '还有多少钱'.$worker->getBirthday();
// echo '<br/>';
// $worker->setBirthday('2020/11/11');
// echo "worker的生日为".$worker->getBirthday();
// echo '<br/>';
// require_once('封装.php');
// $u1=new User(1);
// $u2=new User(1,'张三');
// $u3=new User(1,'张三',20);

$worker1=new Worker(2,'王五',23);
Worker::getCount();
$worker1::getCount();
$worker1::getCount();
$worker2=new Worker(2,'李四',23);
echo '<br/>';
echo $worker2::getCount();
echo '<br/>';
?>