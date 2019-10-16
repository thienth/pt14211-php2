<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php if(isset($_SESSION['user'])): ?>
	    <h2>
	    	<?php echo e($_SESSION['user']['name']); ?>,
	    	<a href="http://localhost/pt14111/mvc/logout" title="">logout</a>
	    </h2>
	<?php endif; ?>
	<table>
		<tbody>
			<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
			<tr>
				<td><?php echo e($item->id); ?></td>
				<td>
					<a href="detail/<?php echo e($item->id); ?>" title=""><?php echo e($item->name); ?></a>
				</td>
				<td><?php echo e($item->price); ?></td>
				<td><a href="remove/<?php echo e($item->id); ?>" title="">xoa</a></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	
</body>
</html><?php /**PATH /Library/WebServer/Documents/mvc_v2/views/homepage.blade.php ENDPATH**/ ?>