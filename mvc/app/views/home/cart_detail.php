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
						<th>Price</th>
						<th>Quantity</th>
						<th>Total Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($cart as $pro): ?>
					<tr>
						<td><?php echo $pro['id'] ?></td>
						<td><?php echo $pro['name'] ?></td>
						<td>
							<img src="<?php echo $pro['image'] ?>" width="100">
						</td>
						<td>$<?php echo $pro['price'] ?></td>
						<td><?php echo $pro['quantity'] ?></td>
						<td>$<?php echo $pro['quantity']*$pro['price'] ?></td>
						<td>
							<a href="<?php echo BASE_URL . 'xoa-item-gio-hang?id=' . $pro['id'] ?>" class="btn btn-warning btn-sm">Xóa</a>
						</td>
					</tr>
					<?php endforeach ?>
					<tr>
						<td colspan="5">Total Price</td>
						<td colspan="2">
							$<?php echo getCartTotalPrice(); ?>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="col-6">
				<div class="row">
					<h3>Checkout information</h3>
					<form action="<?php echo BASE_URL . "check-out" ?>" method="post">
						<div class="form-group">
							<label>Customer name</label>
							<input 
							class="form-control" 
							type="text" name="customer_name" value="" placeholder="">
						</div>
						<div class="form-group">
							<label>Phone number</label>
							<input 
								class="form-control"
							type="text" name="customer_phone_number" value="" placeholder="">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input 
								class="form-control"
								type="email" name="email" value="" placeholder="">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input 
								class="form-control"
								type="text" name="customer_address" value="" placeholder="">
						</div>
						<div class="form-group">
							<label>Payment method</label>

							<?php foreach (getPaymentMethod() as $key => $value): ?>

								<?php 
									$checked = $key == 1 ? "checked" : "";
								 ?>
								<input type="radio" 
									<?php echo $checked ?>
								name="payment_method" value="<?php echo $key ?>" placeholder=""> <?php echo $value ?>
							<?php endforeach ?>
							
						</div>
						<div class="text-center">
							<button class="btn btn-info btn-sm" type="submit">Checkout</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>

	</div>
	<script src="public/jquery/jquery.min.js"></script>	
	<script src="public/bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>