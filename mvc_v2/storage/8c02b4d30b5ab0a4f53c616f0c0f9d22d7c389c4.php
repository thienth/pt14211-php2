hello world!

<?php $__currentLoopData = $dsSanPham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($pro->name); ?>

	<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /Library/WebServer/Documents/mvc_v2/views/pt14211/index.blade.php ENDPATH**/ ?>