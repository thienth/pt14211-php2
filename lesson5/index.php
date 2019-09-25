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
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $key => $value): ?>
 		<tr>
			<td><?php echo $value->id ?></td>
			<td><?php echo $value->name ?></td>
			<td><?php echo $value->email ?></td>
		</tr>
 		<?php endforeach ?>
		
	</tbody>
</table>

 