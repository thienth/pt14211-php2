<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Cate name</th>
			<th>Image</th>
			<th>Price</th>
			<th>
				<a href="create" title="">Add</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($pr->id); ?></td>
			<td><?php echo e($pr->name); ?></td>
			<td><?php echo e($pr->getCateName()); ?></td>
			<td>
				<img src="<?php echo e($pr->image); ?>" width="100">
			</td>
			<td><?php echo e($pr->price); ?></td>
			<td>
				<a href="remove-product?id=<?php echo e($pr->id); ?>" title="">Remove</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table><?php /**PATH /Library/WebServer/Documents/mvc_v2/views/homepage/index.blade.php ENDPATH**/ ?>