<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	@isset ($_SESSION['user'])
	    <h2>
	    	{{$_SESSION['user']['name']}},
	    	<a href="http://localhost/pt14111/mvc/logout" title="">logout</a>
	    </h2>
	@endisset
	<table>
		<tbody>
			@foreach ($products as $key => $item)
				
			<tr>
				<td>{{$item->id}}</td>
				<td>
					<a href="detail/{{$item->id}}" title="">{{ $item->name}}</a>
				</td>
				<td>{{ $item->price}}</td>
				<td><a href="remove/{{$item->id}}" title="">xoa</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>