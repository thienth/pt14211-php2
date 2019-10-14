<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="<?php echo BASE_URL . "submit-mail" ?>" method="post">
		<div>
			<label for="">Người nhận</label>
			<input type="text" name="recceiver" value="" placeholder="">
		</div>
		<div>
			<label for="">Tiêu đề</label>
			<input type="text" name="subject" value="" placeholder="">
		</div>
		<div>
			<label for="">Nội dung</label>
			<textarea name="content" rows="10" cols="30"></textarea>
		</div>
		<div>
			<button type="submit">Gửi</button>
		</div>
	</form>
</body>
</html>