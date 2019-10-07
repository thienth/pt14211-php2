<?php 
require_once './app/models/Category.php';
require_once './app/models/Product.php';
class HomeController
{
	
	public function index(){
		
		$menus = Category::where(['show_menu', '=', 1])->get();
		$products = Product::sttOrderBy('id', false)->limit(8)->get();
		// dd($products);
		// hiển thị giao diện ở cái file theo đường dẫn này
		include_once './app/views/home/homepage.php';
	}

	public function contact(){
		echo "hiển thị trang contact";
	}

	public function detail(){
		echo "hiển thị chi tiết sản phẩm";
	}
}


 ?>