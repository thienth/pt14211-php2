<?php 
namespace App\Controllers;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\InvoiceDetail;

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
		if(count($cart) <= 0){
			header('location: '.BASE_URL);
			die;
		}
		$menus = Category::where(['show_menu', '=', 1])->get();
		include_once './app/views/home/cart_detail.php';
	}

	public function deleteItemInCart(){
		$proId = isset($_GET['id']) == true ? $_GET['id'] : null;
		$cart = isset($_SESSION[CART]) == true ? $_SESSION[CART] : [];
		$index = false;
		for ($i=0; $i < count($cart); $i++) { 
			if($cart[$i]['id'] == $proId){
				$index = $i;
				break;
			}
		}

		if($index !== false){
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

	public function checkout(){
		// lấy data từ form gửi lên
		$customer_name = isset($_POST['customer_name']) ? $_POST['customer_name'] : "";
		$customer_phone_number = isset($_POST['customer_phone_number']) ? $_POST['customer_phone_number'] : "";
		$customer_email = isset($_POST['email']) ? $_POST['email'] : "";
		$customer_address = isset($_POST['customer_address']) ? $_POST['customer_address'] : "";
		$payment_method = isset($_POST['payment_method']) ? $_POST['payment_method'] : "";
		$total_price = getCartTotalPrice();

		// chuẩn bị data để insert
		$data = compact('customer_name', 'customer_phone_number', 'customer_email', 'customer_address', 'payment_method', 'total_price');

		// lưu thông tin vào bảng invoices
		$invoice = new Invoice();
		$invoice->insert($data);
		$newInvoice = Invoice::sttOrderBy('id', false)->limit(1)->first();

		// lưu thông tin vào bảng invoice_detail
		$cart = $_SESSION[CART];
		foreach ($cart as $pro) {
			$data = [
				'invoice_id' => $newInvoice->id,
				'product_id' => $pro['id'],
				'quantity' => $pro['quantity'],
				'unit_price' => $pro['price']
			];

			$model = new InvoiceDetail();
			$model->insert($data);
		}

		unset($_SESSION[CART]);
		header('location: ' . BASE_URL . "?msg=Đặt sản phẩm thành công!" );
		die;
		
	}
}

 ?>