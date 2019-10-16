<?php
namespace App\Controllers; 
use App\Models\Category;
use App\Models\Product;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class HomeController
{
	
	// public function index(){
	// 	// $menus = Category::where(['show_menu', '=', 1])->get();
	// 	// $products = Product::sttOrderBy('id', false)->limit(8)->get();
		
	// 	dd(1);
	// 	// hiển thị giao diện ở cái file theo đường dẫn này
	// 	// include_once './app/views/home/homepage.php';
	// }

	// public function contact(){
	// 	echo "hiển thị trang contact";
	// }

	// public function detail(){
	// 	echo "hiển thị chi tiết sản phẩm";
	// }

	// public function mailForm(){
	// 	include_once './app/views/home/mail-form.php';
	// }

	// public function sendMail(){
	// 	$recceiver = $_POST['recceiver'];
	// 	var_dump($recceiver);
	// 	// $emails = explode(",",$recceiver);
	// 	// dd($emails);
	// 	$subject = $_POST['subject'];
	// 	$content = $_POST['content'];
	// 	// dd($content);
	// 	$mail = new PHPMailer(true);

	// 	try {
	// 	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
	// 	    $mail->CharSet = 'UTF-8';
	// 	    $mail->isSMTP(); 
	// 	    $mail->Host       = 'smtp.gmail.com';
	// 	    $mail->SMTPAuth   = true;
	// 	    $mail->Username = 'd3tmobilebk@gmail.com';
	// 	    $mail->Password = 'd3t123456789';
	// 	    $mail->SMTPSecure = 'tls';
	// 	    $mail->Port = 587;                                    
	// 	    $mail->setFrom('thienth32@gmail.com', 'thienth');
	// 	    $emails = explode(",",$recceiver);
	// 	    foreach ($emails as $e) {
	// 	    	$mail->addAddress($e);
	// 	    }
	// 	    $mail->isHTML(false);
	// 	    $mail->Subject = $subject;
	// 	    $mail->Body    = $content;
	// 	    $mail->send();
	// 	    echo 'Message has been sent';
	// 	} catch (Exception $e) {
	// 	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	// 	}
	// }
}


 ?>