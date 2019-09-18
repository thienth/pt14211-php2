<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="add_submit.php" method="post" enctype="multipart/form-data">
		<div>
			Tên khách sạn: <input type="text" name="name" value="" placeholder="">
		</div>
		<div>
			Địa chỉ khách sạn: <input type="text" name="address" value="" placeholder="">
		</div>
		<div>
			Logo khách sạn: <input type="file" name="logo"  placeholder="">
		</div>
		<div>
			Chủ khách sạn: <input type="text" name="owner" value="" placeholder="">
		</div>
		<div>
			<button type="submit">Lưu</button>
		</div>
		
	</form>
</body>
</html>