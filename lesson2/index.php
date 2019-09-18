<?php 

require_once 'db.php'; 
$sql = "select * from hotels";
$hotels = queryExecute($sql, true);

// var_dump($hotels);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>tên khách sạn</th>
				<th>địa chỉ</th>
				<th>logo</th>
				<th>chủ khách sạn</th>
				<th>
					<a href="add-hotel.php" title="">Tạo mới</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($hotels as $h): ?>
				<tr>
				    <td><?= $h['id'] ?></td>
				    <td><?= $h['name'] ?></td>
				    <td><?= $h['address'] ?></td>
				    <td>
				    	<img src="<?= $h['logo'] ?>" width="100">
				    </td>
				    <td><?= $h['owner'] ?></td>
				    <td>
				    	<a href="javascript:;" onclick="checkconfirm('remove.php?id=<?= $h['id']?>')">Xóa</a>
				    </td>
			    </tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<script>
		function checkconfirm(url){
			var check = confirm('Đồng ý xóa khách sạn này ?');
			if(check){
				window.location.href = url;
			}
		}
	</script>
</body>
</html>