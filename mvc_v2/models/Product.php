<?php 
namespace Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
	protected $table = "products";
	
	public function getCateName(){
		$cate = Category::find($this->cate_id);
		if($cate){
			return $cate->cate_name;
		}else{
			return null;
		}
	}
}

 ?>