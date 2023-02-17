<?php
// phpinfo();
// $conn=new PDO('mysql:host=127.0.0.1;dbname=cms','root','root',array(PDO::ATTR_PERSISTENT=>true));
// $conn->setAttribute(PDD::ATTR_ERRMOOE,PDO::ERRMODE_EXCEPTION);//让连接可以抛出例外

// 插入
// $sql="insert into admins (uname,pwd,nicheng) values ('大臂','2234','老是是是')";
// $prep=$conn->prepare($sql);//这条代码就是sql语句编译，发送数据库中的缓存里，编译成2进制码
// $prep->execute();//执行\
// 查询
// $sql="select * from admins";
// $prep=$conn->prepare($sql);
// $prep->execute();
// $rs=$prep->fetchAll();//查出所有的记录
// print_r($rs);
// echo '<br/>';
// echo $rs[0]['nicheng'];

// 预编译查询
$conn=new PDO('mysql:host=127.0.0.1;dbname=cms','root','root',array(PDO::ATTR_PERSISTENT=>true));
$conn->setAttribute(PDD::ATTR_ERRMOOE,PDO::ERRMODE_EXCEPTION);
$sql='select * from admins where uname=? and pwd=?';
$uname='admin';
$pwd='37443';
$prep=$conn->prepare($sql);
$prep->bindParam(1,$uname);
$prep->bindParam(2,$pwd);
$prep->execute();
$rs=$prep->fetchAll();
echo $rs[0]['nicheng'];
?>