<?php 
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
class CategoryController
{
	
	public function index(){
		$products = Product::where(['cate_id', '=', $_GET['id']])->get();
		include_once './app/views/danh-muc/list.php';
	}
}

 ?>