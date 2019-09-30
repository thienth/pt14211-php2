<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="save_create.php" method="post" enctype="multipart/form-data">
		<div>
			<label for="">Email</label>
			<input type="text" name="email" value="" placeholder="">
		</div>
		<div>
			<label for="">Name</label>
			<input type="text" name="name" value="" placeholder="">
		</div>
		<div>
			<label for="">Avatar</label>
			<input type="file" name="avatar" value="" placeholder="">
		</div>
		<div>
			<label for="">Password</label>
			<input type="password" name="password" value="" placeholder="">
		</div>
		<div>
			<label for="">Confirm Password</label>
			<input type="password" name="cfpassword" value="" placeholder="">
		</div>
		<div>
			
			<button type="submit">Signin</button>
		</div>
		
	</form>
	
</body>
</html>