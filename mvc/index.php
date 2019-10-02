<?php 
session_start();
require_once './commons/utils.php';
require_once './commons/helpers.php';
$url = isset($_GET['url']) ? $_GET['url'] : '/';


require_once './app/controllers/HomeController.php';
require_once './app/controllers/CategoryController.php';
switch ($url) {
	case '/':
		$ctr = new HomeController();
		$ctr->index();
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
	default:
		# code...
		break;
}


 ?>