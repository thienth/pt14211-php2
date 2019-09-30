<?php 
require_once './User.php';
$users = User::all();
 ?>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>
				<a href="create.php" title="">Create</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $key => $value): ?>
 		<tr>
			<td><?php echo $value->id ?></td>
			<td><?php echo $value->name ?></td>
			<td><?php echo $value->email ?></td>
			<td>
				<a href="remove.php?id=<?php echo $value->id ?>" title="">Remove</a>
			</td>
		</tr>
 		<?php endforeach ?>
		
	</tbody>
</table>

 