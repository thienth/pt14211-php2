<?php 
require_once 'db.php';
$name = isset($_POST['name']) == true ? $_POST['name'] : "";
$address = isset($_POST['address']) == true ? $_POST['address'] : "";
$owner = isset($_POST['owner']) == true ? $_POST['owner'] : "";
$logo = $_FILES['logo'];
$imgPath = "";
// lưu ảnh
if($logo['size'] > 0){
	$filename = uniqid() . '-' . $logo['name'];
	$path = 'uploads/' . $filename;
	// khi upload ảnh lên server ở hệ điều hành linux (ubuntu, fedora, centos, macos,...)
	// cần chú ý phân quyền cho thư mục chứa ảnh
	// sudo chmod -R 777 tenthumuc
	move_uploaded_file($logo['tmp_name'], $path);
	$imgPath = $path;
}

$sql = "insert into hotels (name, address, logo, owner)
		values ('$name', '$address', '$imgPath', '$owner')";

queryExecute($sql);
header('location: index.php');


 ?>