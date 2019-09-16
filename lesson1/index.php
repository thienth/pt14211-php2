<?php 

// tạo 1 form
// gồm 1 input
// sau đó submit form lên thì hiển thị ra text đã đc mã hóa
// md5 của giá trị đã nhập vào thẻ input
$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
if($keyword != ""){
	echo md5($keyword);	
}


 ?>

 <form action="" method="get">
 	<input type="text" name="keyword">
 	<button type="submit">submit</button>
 </form>