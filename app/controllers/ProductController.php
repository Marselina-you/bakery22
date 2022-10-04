<?php 
class ProductController 
{
    public function actionView($id)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        //echo "categop" .$categoryId;
        //echo '<br>Page:' .$page;
        

        
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

        //$total = Product::getTotalProductsInCategory($categoryId);
        // Создаем объект Pagination - постраничная навигация
        //$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        $product = Product::getProductById($id);//получили вид товара

        require_once(ROOT . '/views/product/view.php');

        return true;
    }
}