<?php 

namespace Mysql;
class User
{
	
	
}

namespace MongoDB;
class User
{
	
	
}

use Mysql\User as MysqlUser;
$model = new MysqlUser();
var_dump($model);

 ?>