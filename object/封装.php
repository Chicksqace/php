
<?php 
// 类是群体共性的抽象化，将类实例化成对象成为具体事务的描述。
class User{
	// 3中修饰符private(私有) public(公共的) protected(可以在子类中继承访问到)
	
	private $id;
	protected $name;
	public $age;
	private $money;
	function __construct($id,$name=null,$age=0){
		$this ->id=$id;
		$this ->name=$name;
		$this ->age=$age;
		$this ->money=0;
		echo $name.'的年龄是'.$age;
	}
	
	function __destruct(){
		echo "析构";
	}
	function setMoney($money){
		$this->money=$money;
	}
	function getBirthday(){
		return $this->money;
	}
	// 成员方法
	function lookMoney(){
		return $this->money;
	}
}


?>
