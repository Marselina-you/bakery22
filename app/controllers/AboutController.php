<?php
class AboutController {

	public function actionIndex()
	{
		
		//$newsList = array();
		//$newsList = News::getNewsList();
		
		require_once(ROOT . '/views/layouts/about-podr.php');

		return true;
	}

	

}