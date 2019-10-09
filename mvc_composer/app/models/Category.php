<?php 
namespace App\Models;
class Category extends BaseModel
{
	
	protected $tableName = 'categories';
	public function countTotalProductBelong(){
		$products = Product::where(['cate_id', '=', $this->id])->get();

		return count($products);
	}
}
 ?>