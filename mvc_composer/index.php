<?php 
session_start();
require_once './commons/utils.php';
require_once './commons/helpers.php';

require_once './app/controllers/CartController.php';
require_once './app/controllers/HomeController.php';
require_once './app/controllers/CategoryController.php';

require_once './app/models/BaseModel.php';
require_once './app/models/Category.php';
require_once './app/models/Invoice.php';
require_once './app/models/InvoiceDetail.php';
require_once './app/models/Product.php';
require_once './app/models/User.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';


use App\Controllers\HomeController;
use App\Controllers\CartController;
use App\Controllers\CategoryController;

switch ($url) {
	case '/':
		
		$ctr = new HomeController();
		$ctr->index();
		break;
	case 'login':
		// màn hình form login bao gồm:
		// email
		// password
		break;
	case 'post_login':
		// Thực hiện login với db
		// nếu thành công => admin
		// nếu không thành công => login
		break;
	case 'admin':
		// Thực hiện hiển thị: 
		// tổng số lượng danh mục
		// tổng số lượng sản phẩm
		// tổng số lượng hóa đơn
		// tổng số lượng user
		break;
	case 'admin/products':
		// hiển thị danh sách sản phẩm
		break;
	case 'admin/products/add':
		// màn hình thêm sản phẩm
		break;
	case 'admin/products/save-add':
		// lưu sản phẩm từ màn hình thêm sản phẩm
		// lưu thành công => admin/products
		// không thành công => admin/products/add
		break;
	case 'admin/products/edit':
		// màn hình sửa sản phẩm
		break;
	case 'admin/products/save-edit':
		// lưu sản phẩm từ màn hình thêm sản phẩm
		// lưu thành công => admin/products
		// không thành công => admin/products/edit
		break;
	case 'admin/products/remove':
		// màn hình sửa sản phẩm
		break;
	case 'admin/categories':
		// hiển thị danh sách danh mục
		break;
	case 'admin/categories/add':
		// màn hình thêm danh mục
		break;
	case 'admin/categories/save-add':
		// lưu danh mục từ màn hình thêm danh mục
		// lưu thành công => admin/categories
		// không thành công => admin/categories/add
		break;
	case 'admin/categories/edit':
		// màn hình sửa danh mục
		break;
	case 'admin/categories/save-edit':
		// lưu danh mục từ màn hình thêm danh mục
		// lưu thành công => admin/categories
		// không thành công => admin/categories/edit
		break;
	case 'admin/categories/remove':
		// màn hình sửa danh mục
		break;
	case 'lien-he':
		$ctr = new HomeController();
		$ctr->contact();
		break;

	case 'danh-muc':
		$ctr = new CategoryController();
		$ctr->index();
		break;

	case 'chi-tiet-sp':
		$ctr = new HomeController();
		$ctr->detail();
		break;

	case 'danh-sach-user':
		$ctr = new UserController();
		$ctr->index();
		break;

	case 'gio-hang':
		$ctr = new CartController();
		$ctr->add2Cart();
		break;

	case 'chi-tiet-gio-hang':
		$ctr = new CartController();
		$ctr->showCart();
		break;

	case 'xoa-item-gio-hang':
		$ctr = new CartController();
		$ctr->deleteItemInCart();
		break;

	case 'check-out':
		$ctr = new CartController();
		$ctr->checkout();
		break;
	default:
		# code...
		break;
}


 ?>