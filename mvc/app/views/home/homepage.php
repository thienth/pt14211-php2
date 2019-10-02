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
				<?php foreach ($menus as $menu): ?>
				  <li class="nav-item">
				    <a class="nav-link" 
				    	href="<?= BASE_URL . "danh-muc?id=" . $menu->id ?>">
				    	<?php echo $menu->cate_name ?>
				    </a>
				  </li>
				<?php endforeach ?>
			</ul>
		</header>
		<div class="row" id="content">
			
		</div>

	</div>
	<script src="public/jquery/jquery.min.js"></script>	
	<script src="public/bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>