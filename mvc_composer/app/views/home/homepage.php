<?php 

// dd(1);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<base href="<?php echo BASE_URL; ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP2 - ThienTH</title>
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header>
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo BASE_URL  ?>" title="">Homepage</a>
				</li>
				<?php foreach ($menus as $menu): ?>
				  <li class="nav-item">
				    <a class="nav-link" 
				    	href="<?= BASE_URL . "danh-muc?id=" . $menu->id ?>">
				    	<?php echo $menu->cate_name ?> (<?php echo $menu->countTotalProductBelong(); ?>)
				    </a>
				  </li>
				  
				<?php endforeach ?>
				<li>
				  	<a class="nav-link" href="<?php echo BASE_URL . 'chi-tiet-gio-hang' ?>" title="">Cart (<?php echo getTotalProductInCart(); ?>)</a>
				 </li>
			</ul>
		</header>
		<div class="row" id="content">
			<table class="table table-stripped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Image</th>
						<th>Cate name</th>
						<th>Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $pro): ?>
					<tr>
						<td><?php echo $pro->id ?></td>
						<td><?php echo $pro->name ?></td>
						<td>
							<img src="<?php echo $pro->image ?>" width="100">
						</td>
						<td><?php echo $pro->getCateName(); ?></td>
						<td><?php echo $pro->price ?></td>
						<td>
							<a href="<?php echo BASE_URL . 'gio-hang?id=' . $pro->id ?>" class="btn btn-warning btn-sm">Thêm giỏ hàng</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			
		</div>

	</div>
	<script src="public/jquery/jquery.min.js"></script>	
	<script src="public/bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>