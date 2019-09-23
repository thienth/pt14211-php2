<?php 

/**
 * 
 */
class User
{
	var $conn;
	static public $name = 'thienth';
	function __construct()
	{
		$this->conn = new PDO('mysql:host=127.0.0.1;dbname=php2_lesson1;charset=utf8', 'root', '123456');
	}

	function getAll($sql){
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	// khai báo hàm static
	// không có $this
	// từ khóa static
	static function get(){
		$model = new static();
		return $model;
	}
}


class Product
{
	
	function delete(){
		echo 'something';
	}
	// khai báo hàm static
	// không có $this
	// từ khóa static
	static function where(){
		$model = new static();
		return $model;
	}
}


Product::where()->delete();




 ?>