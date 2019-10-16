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
		        header('location: http://localhost/mvc_v2');
		        return false;
		    }
		});

		// url trang chủ
		$router->get("/", ["Controllers\HomeController", "index"]);

		$router->get("remove-product", ["Controllers\ProductController", "remove"]);

		

		$dispatcher = new Dispatcher($router->getData());

		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		    
		// Print out the value returned from the dispatched function
		echo $response;
	}
	
}

 ?>