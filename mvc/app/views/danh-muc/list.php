<table>
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>price</th>
			<th>image</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $pro): ?>
			
		<tr>
			<td><?php echo $pro->id ?></td>
			<td><?php echo $pro->name ?></td>
			<td><?php echo $pro->price ?></td>
			<td>
				<img src="<?php echo $pro->image ?>" width="100">
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>