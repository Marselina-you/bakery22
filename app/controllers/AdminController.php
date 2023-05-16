<?php
class AdminController extends AdminBase
{
	public function actionIndex()
	{

      
		self::checkAdmin();
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);
        $categories = array();
        $productsList = Product::getProductsList();
        $categories = Category::getCategoriesList();
       
       

		require_once(ROOT . '/views/admin/index.php');
		return true;
	}

  
   // public function actionCatalog()
   // {
        //self::checkAdmin();
       // $productsList = Product::getProductsList();
       // $userId = User::checkLoggedSite();
        //$user = User::getUserById($userId);
       // $categories = array();
        //$categories = Category::getCategoriesList();
        //echo "action Catalog in AdminController";
        //require_once(ROOT . '/views/admin_product/index.php');
        //return true;
    //}
     public function actionItem($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        echo "categ" .$categoryId;
        echo '<br>Page:' .$page;
        

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
         $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

        $total = Product::getTotalProductsInCategory($categoryId);
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
      

        require_once(ROOT . '/views/admin_product/index.php');

        return true;
    }
	public function actionCategorys($categoryId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
          echo "action Categorys in AdminController";
          echo "</br>";
        echo "categorys" .$categoryId;
       echo "</br>";
      echo "страница admin/category";
        

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);
         $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

        $total = Product::getTotalProductsInCategory($categoryId);
        // Создаем объект Pagination - постраничная навигация
      
      

        require_once(ROOT . '/views/admin/category.php');

        return true;
    }
	
}