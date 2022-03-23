<?php

include_once ROOT. '/models/Product.php';
include_once ROOT. '/models/Category.php';

class SiteController {

	public function actionIndex()
	{
		
		//$newsList = array();
		//$newsList = News::getNewsList();
		$categories = array();
        $categories = Category::getCategoriesList();

		$latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

		require_once(ROOT . '/views/site/index.php');

		return true;
	}

	

}
