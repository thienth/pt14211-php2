<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>{{ $product->name}}</h2>
	<h3>Giá: {{ $product->price}}</h3>
	<img src="{{ $product->image}}" width="300">
	
</body>
</html>