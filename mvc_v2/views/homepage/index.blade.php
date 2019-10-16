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
		@foreach($products as $pr)
		<tr>
			<td>{{$pr->id}}</td>
			<td>{{$pr->name}}</td>
			<td>{{$pr->getCateName()}}</td>
			<td>
				<img src="{{$pr->image}}" width="100">
			</td>
			<td>{{$pr->price}}</td>
			<td>
				<a href="remove-product?id={{$pr->id}}" title="">Remove</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>