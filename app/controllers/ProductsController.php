<?php 
class ProductsController extends AdminBase
{
    public function actionCategory($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        echo "categop" .$categoryId;
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