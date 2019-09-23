<?php 
require_once 'User.php';

$model = new User();
$users = $model->getAll('Select * from users where id = 2');
var_dump($users[0]);
 ?>