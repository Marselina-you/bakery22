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
$productsBest = Product::getProductsBest();
       
        
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);
        //$result = User::register();

		require_once(ROOT . '/views/site/index.php');

		return true;
	}

	

}
