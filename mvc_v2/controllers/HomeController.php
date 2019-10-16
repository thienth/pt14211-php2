<?php 
namespace Controllers;

use Models\Product;
use Models\User;
class HomeController extends BaseController
{
	
	function index()
	{
		// $products = Product::all();
		$products = Product::where('id', '>=', 30)
							->where('id', '<=', 40)
							->orWhere('id', 134)
							->orderBy('name', 'desc')
							->get();
		
		return $this->render('pt14211.index', [

								'dsSanPham' => $products
							]);
	}
	function demo()
	{
		$model = new Product();
		$model->name = "long dep trai";
		$model->cate_id = 5;
		$model->price = 5000;
		$model->star = 3;
		$model->views = 438;

		$model->save();

	}
	function demo2()
	{
		$id = $_GET['id'];
		$model = Product::find($id);
		$model->name = "long dep trai";
		$model->cate_id = 5;
		$model->price = 5000;
		$model->star = 3;
		$model->views = 438;

		$model->save();

	}
	function productDetail($id)
	{
		$product = Product::find($id);
		return $this->render('product.chitiet', compact('product'));
	}
	public function loginForm(){
		
		return $this->render('login');
	}
	public function postLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user = User::where('email', $email)->first();

		if(password_verify($password, $user->password)){
			$_SESSION['user'] = [
				'name' => $user->name,
				'email' => $user->email
			];
			header('location: http://localhost/pt14111/mvc');
		}else{
			return $this->render('login');
		}
	}
	public function logout(){
		unset($_SESSION['user']);
		header('location: http://localhost/pt14111/mvc');
		return false;
	}
}
 ?>