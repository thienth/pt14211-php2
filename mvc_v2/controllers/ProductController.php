<?php 
namespace Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Models\Product;
class ProductController extends BaseController
{
	
	function remove($id)
	{
		Product::destroy($id);
		header('location: http://localhost/pt14111/mvc');
		return false;
	}
	function addForm()
	{
		echo "trang giao dien them san pham";
	}
	function mailForm()
	{
		return $this->render('mail-form');
	}
	function sendEmail()
	{

		$recceivers = $_POST['recceive'];
		$recceiveArr = explode(",", $recceivers);
		$subject = $_POST['subject'];
		$content = $_POST['content'];
		$mail = new PHPMailer(true);
		try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
		    $mail->isSMTP();                                            // Set mailer to use SMTP
		    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'd3tmobilebk@gmail.com';                     // SMTP username
		    $mail->Password   = 'd3t123456789';                               // SMTP password
		    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		    $mail->Port       = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('admin@fptcodedao.com', 'Thằng code dạo');
		    foreach ($recceiveArr as $people) {
		    	$mail->addAddress($people);
		    }
		    $mail->addReplyTo('hieuptph05052@fpt.edu.vn', 'Thằng đổ vỏ');

		    // Content
		    $mail->CharSet = "UTF-8";                                  // Set email format to HTML
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $subject;
		    $mail->Body    = $content;

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
	function saveAdd($id, $name = 'Khai hoc dot')
	{
		echo "id = $id <br> name = $name <br> school = " . $_GET['school'];
	}
}
 ?>