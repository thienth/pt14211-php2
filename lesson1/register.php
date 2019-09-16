<?php 
// tạo database php2_lesson1
// cho bảng users với thông tin các cột như sau:
// users
// id int pk ai
// username varchar 255
// email varchar 255
// password varchar 255
// 
// tạo form để thêm tài khoản người dùng với các field
// username
// email
// password
// confirm_password
// 
// sau đó submit dữ liệu lên server,
// nếu dữ liệu hợp lệ thì sẽ tiến hành lưu tài khoản vào 
// bảng users
// 
 ?>
 <form action="register-submit.php" method="post" >
 	<div>
 		<label for="">Username</label>
 		<input type="text" name="username" value="" placeholder="">
 	</div>
 	<div>
 		<label for="">Email</label>
 		<input type="text" name="email" value="" placeholder="">
 	</div>
 	<div>
 		<label for="">Password</label>
 		<input type="password" name="password" value="" placeholder="">
 	</div>
 	<div>
 		<label for="">Confirm password</label>
 		<input type="password" name="confirm_password" value="" placeholder="">
 	</div>
 	
 	<button type="submit">Register</button>
 </form>