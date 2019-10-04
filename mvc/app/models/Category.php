<?php 
require_once './app/models/BaseModel.php';
require_once './app/models/Product.php';

class Category extends BaseModel
{
	
	protected $tableName = 'categories';
	public function countTotalProductBelong(){
		$products = Product::where(['cate_id', '=', $this->id])->get();

		return count($products);
	}
}
 ?>