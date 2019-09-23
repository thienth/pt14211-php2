<?php 
class BaseModel
{
	
	function __construct()
	{
		$this->conn = new PDO('mysql:host=127.0.0.1;dbname=php2_lesson1;charset=utf8', 'root', '123456');
	}

	public function getAll(){
		$sql = "select * from " . $this->table;
		// var_dump($sql);die;
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	public function delete($id){
		try{

			$sql = "delete from " . $this->table 
					. " where id = $id";
			// var_dump($sql);die;
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			return true;
		}catch(Exception $ex){
			var_dump($ex->getMessage());
			return false;
		} 
	}
}

class User extends BaseModel
{
	var $table = "users";	
}

class Hotel extends BaseModel
{
	var $table = "hotels";	
}

$hotelDao = new Hotel();
$hotelDao->delete(1);
$hotels = $hotelDao->getAll();

var_dump($hotels);






 ?>