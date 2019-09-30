<?php 
require_once './app/models/Category.php';
class HomeController
{
	
	public function index(){
		$cates = Category::all();
		var_dump($cates);die();
	}

	public function contact(){
		echo "hiển thị trang contact";
	}

	public function detail(){
		echo "hiển thị chi tiết sản phẩm";
	}
}


 ?>