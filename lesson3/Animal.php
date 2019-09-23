<?php 

class Animal{
	var $name;
	var $age;
	var $color;
	var $weight;

	function __construct(){
		echo "Vừa tạo mới object Animal";
	}
	
	// const UYEN = "hoc dot";
	function eat($food){
		$this->weight += $food;
	}
}

// tạo ra thực thể mới (object) - new instance
$quan = new Animal();
$quan->name = "Vũ Thế Quân";
$quan->age = 20;
$quan->color = "black";
$quan->weight = 30;


$long = new Animal();
$long->name = "Nguyễn Đình Long";
$long->age = 19;
$long->color = "yellow";
$long->weight = 12;


var_dump($quan);
$quan->eat(3);
var_dump($quan);
var_dump($long);
$long->eat(1.5);
var_dump($long);



 ?>




