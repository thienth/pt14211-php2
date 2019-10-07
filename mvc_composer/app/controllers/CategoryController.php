<?php 

require_once './app/models/Product.php';
class CategoryController
{
	
	public function index(){
		$products = Product::all();
		include_once './app/views/danh-muc/list.php';
	}
}

 ?>