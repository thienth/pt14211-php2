<?php 
namespace Routes;

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
class CustomRoute
{
	public static function init($url){
		$router = new RouteCollector();

		/**
		 * Danh sách các filter 
		 */
		$router->filter('auth', function(){  
		    if(!isset($_SESSION['user'])) 
		    {
		        header('Location: http://localhost/mvc_v2');
		        
		        return false;
		    }
		});

		$router->get('/', ['Controllers\HomeController', "index"]);
		$router->get('/demo-insert', ['Controllers\HomeController', "demo"]);
		$router->get('/demo-update', ['Controllers\HomeController', "demo2"]);
		$router->get('/login', ['Controllers\HomeController', "loginForm"]);
		$router->post('/login', ['Controllers\HomeController', "postLogin"]);

		$router->get('/logout', ['Controllers\HomeController', "logout"]);

		$router->get('/detail/{id}', ['Controllers\HomeController', "productDetail"]);

		$router->group(['before' => 'auth'], function($router){
			// tất cả các request nằm trong group này thì cần phải login
			$router->get('/remove/{id}', ["Controllers\ProductController", "remove"]);
			$router->get('/mail-form', ["Controllers\ProductController", "mailForm"]);
			$router->post('/mail-form', ["Controllers\ProductController", "sendEmail"]);
		});

		$dispatcher = new Dispatcher($router->getData());

		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		    
		// Print out the value returned from the dispatched function
		echo $response;
	}
	
}

 ?>