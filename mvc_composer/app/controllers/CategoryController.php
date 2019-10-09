<?php 
namespace App\Controllers;
use App\Models\Category;
class CategoryController
{
	
	public function index(){
		$products = Product::all();
		include_once './app/views/danh-muc/list.php';
	}
}

 ?>