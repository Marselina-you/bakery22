<?php 
class CatalogController
{
    public function actionIndex()
    {   
        
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

        
        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }

    public function actionCategory($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        //echo "categoryProducts" .$categoryId;
        //echo '<br>Page:' .$page;
        

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
         $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

        $total = Product::getTotalProductsInCategory($categoryId);
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
      

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
   
    
}