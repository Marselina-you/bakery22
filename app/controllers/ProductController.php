<?php

include_once ROOT. '/models/Product.php';

class ProductController {

	

	public function actionView($id)
	{
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
