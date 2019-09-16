<?php 
// thu thập thông tin từ form gửi lên
$username = isset($_POST['username']) == true ? $_POST['username']: "";
$email = isset($_POST['email']) == true ? $_POST['email']: "";
$password = isset($_POST['password']) == true ? $_POST['password']: "";
$confirm_password = isset($_POST['confirm_password']) == true ? $_POST['confirm_password']: "";

// var_dump($username, $email, $password, $confirm_password);die;
// mã hóa mật khẩu bằng md5
$hash_password = md5($password);

// tạo câu sql insert
$sql = "insert into users (username, email, password)
		values ('$username', '$email', '$hash_password')";
// var_dump($sql);die;


// tạo kết nối với csdl
$conn = new PDO('mysql:host=127.0.0.1;charset=utf8;dbname=php2_lesson1', 'root', '123456');

// nạp câu sql vào kết nối
$stmt = $conn->prepare($sql);

// thực thi kết nối với csdl
$stmt->execute();

echo "insert thành công!";
 ?>