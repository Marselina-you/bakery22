<?php
class ProductController {

	

	public function actionView($id)
	{
		$categories = array();
        $categories = Category::getCategoriesList();
         $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);
        //$userId = User::checkLogged();
        //$user = User::getUserById($userId);
		if ($id) {
			//$newsItem = News::getNewsItemByID($id);
			$product = Product::getProductById($id);


	//require_once(ROOT . '/views/news/view.php');
	require_once(ROOT . '/views/product/view.php');


/*			echo 'actionView'; */
		}

		return true;

	}

}
