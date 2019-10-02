<?php 
require_once './app/models/Category.php';
require_once './app/models/Product.php';
class HomeController
{
	
	public function index(){
		
		include_once './views/home/homepage.php';
	}

	public function contact(){
		echo "hiển thị trang contact";
	}

	public function detail(){
		echo "hiển thị chi tiết sản phẩm";
	}
}


 ?>