<?php
require_once('封装.php');
// 继承：父类保存共有的属性和方法，多个子类共享父类的属性和方法。
	class Worker extends User{
		private $birthday;
		private $tiji;
		private static $count=0;
		static function getCount(){
			return self::$count++;
		}
		function __construct($id,$name,$age){
			parent::__construct($id,$name,$age);
			echo "worker被构造了";
		}
		function setBirthday($birthday){
			$this->birthday=$birthday;
		}
		function setMoney($money){
			$this->money=$money*0.1;
			parent::setMoney($this->money);}
		function __destruct(){
			// 这里解析了两遍的原因是 我先把我父亲解析了 然后我在解析我自己
			parent::__destruct();
			echo "worker被析构了";
		}
	}
?>