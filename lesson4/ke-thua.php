<?php 
/**
 * 
 */
class Animal 
{
	
	var $name;
	var $age;

	const SOMETHING = 1;

	function running(){
		echo $this->name . " is running";
	}

	static function test(){
		echo "say something!!!";
	}
}

/**
 * 
 */
class Cat extends Animal
{
	static function test(){
		echo "say something v2!!!";
	}
	
}


// Cat::test();
// $kitty = new Cat();
// $kitty->name = "Nguyễn Đình Long";
// $kitty->age = 2;
// $kitty->running();




 ?>