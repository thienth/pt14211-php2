<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2><?php echo e($product->name); ?></h2>
	<h3>Giá: <?php echo e($product->price); ?></h3>
	<img src="<?php echo e($product->image); ?>" width="300">
	
</body>
</html><?php /**PATH /Library/WebServer/Documents/mvc_v2/views/product/chitiet.blade.php ENDPATH**/ ?>