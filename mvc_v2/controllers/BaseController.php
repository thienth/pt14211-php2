<?php 
namespace Controllers;

/**
 * 
 */
use Jenssegers\Blade\Blade;
class BaseController
{
	
	public function render($view, $data = []){
		$blade = new Blade('views', 'storage');

		echo $blade->make($view, $data);
	}
}

 ?>