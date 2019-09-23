<?php 
require_once 'User.php';

$model = new User();
$users = $model->getAll('Select * from users');
var_dump($users);

 ?>