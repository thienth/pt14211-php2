<?php 
function queryExecute($sql, $getAll = true){
	$conn = new PDO('mysql:host=127.0.0.1;charset=utf8;dbname=php2_lesson1', 'root', '123456');

	// nạp câu sql vào kết nối
	$stmt = $conn->prepare($sql);

	// thực thi kết nối với csdl
	$stmt->execute();

	$result = $stmt->fetchAll();
	if($result == null){
		return null;
	}

	
	if($getAll == true){
		return $result;
	}else{
		return $result[0];
	}
}


 ?>