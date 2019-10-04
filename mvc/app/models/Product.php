<?php 
require_once './app/models/BaseModel.php';
require_once './app/models/Category.php';
class Product extends BaseModel
{
	
	protected $tableName = 'products';
	public function getCateName(){
		$cate = Category::where(['id', '=', $this->cate_id])->first();
		if($cate != null){
			return $cate->cate_name;
		}
		return "";
	}
}
 ?>