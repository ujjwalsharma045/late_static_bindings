<?php
class A{
	public static function test2(){
		echo "class a called"; 
	}
	
	public function test1(){
		static::test2();
	}
	
	public function test(){
		self::test2();
	}
}

class B extends A{
	public static function test2(){
		echo "class b called";
	}
} 

echo "With Late Static Bindings";
echo "</br>";
$b = new B();
$b->test1();
echo "</br>";
$a = new A();
$a->test1();
echo "</br>";
echo "Without Late Static Bindings";
echo "</br>";
$b = new B();
$b->test();
echo "</br>";
$a = new A();
$a->test();
echo "tested again";
?>
