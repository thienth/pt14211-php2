<?php 

require_once './app/models/Product.php';
class CartController
{
	
	public function add2Cart(){
		$proId = isset($_GET['id']) == true ? $_GET['id'] : null;

		$pro = Product::where(['id', '=', $proId])->first();
		if($pro == null){
			header('location: ' . BASE_URL);
			die;
		}
		$item = [
			'id' => $pro->id,
			'name' => $pro->name,
			'image' => $pro->image,
			'price' => $pro->price,
			'quantity' => 1
		];

		if(!isset($_SESSION[CART]) || count($_SESSION[CART]) == 0){
			$_SESSION[CART][] = $item;
		}else{
			$cart = $_SESSION[CART];
			$existed = false;

			for ($i=0; $i < count($cart); $i++) { 
				if($cart[$i]['id'] == $pro->id){
					$existed = true;
					$cart[$i]['quantity'] += 1;
					break;
				}
			}

			if($existed == false){
				$cart[] = $item;
			}

			$_SESSION[CART] = $cart;
		}
		header('location: ' . BASE_URL);
		die;
	}

	public function showCart(){
		$cart = isset($_SESSION[CART]) == true ? $_SESSION[CART] : [];
		$menus = Category::where(['show_menu', '=', 1])->get();
		include_once './app/views/home/cart_detail.php';
	}

	public function deleteItemInCart(){
		$proId = isset($_GET['id']) == true ? $_GET['id'] : null;
		$cart = isset($_SESSION[CART]) == true ? $_SESSION[CART] : [];
		$index = -1;
		for ($i=0; $i < count($cart); $i++) { 
			if($cart[$i]['id'] = $proId){
				$index = $i;
				break;
			}
		}

		if($index != -1){
			array_splice($cart, $index, 1);
		}

		$_SESSION[CART] = $cart;
		if(count($cart) == 0){
			header('location: '. BASE_URL);
			die;
		}else{
			header('location: '. BASE_URL . 'chi-tiet-gio-hang');
			die;
		}
	}
}

 ?>