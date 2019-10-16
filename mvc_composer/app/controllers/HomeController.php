<?php 
namespace App\Controllers;
class HomeController
{
	
	public function index()
	{
		echo 1123;
	}
	public function mailForm(){
		include_once './app/views/home/mail-form.php';
	}
}

 ?>