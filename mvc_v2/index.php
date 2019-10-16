<?php 
session_start();
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

/**
 * https://github.com/PHPMailer/PHPMailer
 * https://github.com/jenssegers/blade
 * https://github.com/illuminate/database
 * https://github.com/mrjgreen/phroute
 */

require_once './bootstrap.php';
use Routes\CustomRoute;
CustomRoute::init($url);

 ?>