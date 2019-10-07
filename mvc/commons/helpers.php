<?php 
function dd($value){
	var_dump($value);
	die;
}

function getTotalProductInCart(){
	// dd($_SESSION[CART]);
	$totalProduct = 0;
	if(isset($_SESSION[CART]) && count($_SESSION[CART]) > 0){
		$cart = $_SESSION[CART];
		foreach ($cart as $item) {
			$totalProduct += $item['quantity'];
		}
	}
	return $totalProduct;
}

function getCartTotalPrice(){
	$totalPrice = 0;
	if(isset($_SESSION[CART]) && count($_SESSION[CART]) > 0){
		$cart = $_SESSION[CART];
		foreach ($cart as $item) {
			$totalPrice += $item['quantity']*$item['price'];
		}
	}
	return $totalPrice;
}

function getPaymentMethod(){
	return [
		1 => "COD",
		2 => "Online Payment",
		3 => "Visa/Master Card"
	];
}


 ?>