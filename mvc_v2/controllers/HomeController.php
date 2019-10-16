<?php 
namespace Controllers;
use Models\Product;
class HomeController extends BaseController
{
	public function index(){
		// Lấy toàn bộ dữ liệu của bảng Products để hiển thị
		$products = Product::all();
		return $this->render('homepage.index', [
			'products' => $products
		]);
	}	

}
 ?>