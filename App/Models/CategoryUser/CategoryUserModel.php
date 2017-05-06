<?php
namespace App\Models\CategoryUser;

use App\Models\Category\CategoryModel;

class CategoryUserModel extends CategoryModel
{

	private $app;
	
	public function __construct()
	{
		$this->app = \Yee\Yee::getInstance();
	}

	public function getCategoryIdByName($categoryName) {

		$app = $this->app;

		$data = array(
			'name' => $categoryName,
		);

		$result = $app->db['default']->where('name',$categoryName)->getOne('category');

		return $result['name'];
	}


	public function getArticlesByCategoryId($categoryId){

		$app = $this->app;

		return $app->db['default']->where('category_id',$categoryId)->get('article');
	}


	public function getArticleDetailsByName($titleArticle) {

		$app = $this->app;

		return $app->db['default']->where('title',$titleArticle)->get('article');

	}

}