<?php 
require_once './Category.php';
$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : null;
if($keyword === null){
	$cates = Category::all();	
}else{
	$cates = Category::where(['cate_name', 'like', "%$keyword%"])
						->get();
}

 ?>
<form action="" method="get">
	<label>Tìm kiếm</label>
	<input type="text" name="keyword">
	<button type="submit">Search</button>
</form>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>
				<a href="" title="">Tạo mới</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($cates as $key => $value): ?>
 		<tr>
			<td><?php echo $value->id ?></td>
			<td><?php echo $value->cate_name ?></td>
			<td>
				
				<a href="delete.php?id=<?php echo $value->id ?>" title="">Xóa</a>
			</td>
		</tr>
 		<?php endforeach ?>
		
	</tbody>
</table>

 