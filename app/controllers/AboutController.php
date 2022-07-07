<?php
class AboutController {

	public function actionIndex()
	{
		
		//$newsList = array();
		//$newsList = News::getNewsList();
		$userId = User::checkLoggedSite();
        $user = User::getUserById($userId);
		require_once(ROOT . '/views/layouts/about-podr.php');

		return true;
	}

	

}