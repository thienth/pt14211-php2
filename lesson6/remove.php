<?php 
require_once './User.php';

$id = isset($_GET['id']) == true ? $_GET['id'] : 0;

User::destroy($id);
header('location: index.php');

 ?>