<?php
class SiteController {

	public function actionIndex()
	{
		
		//$newsList = array();
		//$newsList = News::getNewsList();
		$categories = array();
        $categories = Category::getCategoriesList();

		$latestProducts = array();
        $latestProducts = Product::getLatestProducts(2);

		require_once(ROOT . '/views/site/index.php');

		return true;
	}

	

}
