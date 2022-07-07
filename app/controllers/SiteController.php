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

       
        
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

		require_once(ROOT . '/views/site/index.php');

		return true;
	}

	

}
