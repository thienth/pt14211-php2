<?php 
// tạo kiểu dữ liệu mới (Dog)
// 
class Dog{
	var $hairColor;
	var $age;
	var $weight;

	function say(){
		echo "go go!";
	}

	function eat($food = 1){
		$this->weight += $food;
	}
}

$long = new Dog();
$long->hairColor = 'black';
$long->age = 21;
$long->weight = 50;

$cuong = new Dog();
$cuong->hairColor = 'green';
$cuong->age = 22;
$cuong->weight = 45;

var_dump($long, $cuong);



 ?>