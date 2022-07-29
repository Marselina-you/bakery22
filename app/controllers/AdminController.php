<?php
class AdminController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);
		require_once(ROOT . '/views/admin/index.php');
		return true;
	}
    public function actionCatalog()
    {
        self::checkAdmin();
        $productsList = Product::getProductsList();
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);
        $categories = array();
        $categories = Category::getCategoriesList();
        require_once(ROOT . '/views/admin/product.php');
        return true;
    }
	public function actionCategory($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        echo "categoryyy" .$categoryId;
        echo '<br>Page:' .$page;
        

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
         $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

        $total = Product::getTotalProductsInCategory($categoryId);
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
      

        require_once(ROOT . '/views/admin_product/category.php');

        return true;
    }
	
}