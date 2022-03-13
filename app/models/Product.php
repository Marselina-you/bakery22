<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';
class Product
{

    const SHOW_BY_DEFAULT = 6;

    /**
     * Returns an array of products
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT, $page = 1)
    {
        $count = intval($count);
        
        
        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT id, name, price, weight, description, ing1, ing2, ing3, slogan, top1, top2, top3, image FROM assortiment ORDER BY id');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['weight'] = $row['weight'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['slogan'] = $row['slogan'];
            $productsList[$i]['top1'] = $row['top1'];
            $productsList[$i]['top2'] = $row['top2'];
            $productsList[$i]['top3'] = $row['top3'];
            $productsList[$i]['ing1'] = $row['ing1'];
            $productsList[$i]['ing2'] = $row['ing2'];
            $productsList[$i]['ing3'] = $row['ing3'];
            
            $i++;
        }

        return $productsList;
    }
    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM assortiment WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }
    public static function getProductsListByCategory($categoryId = false)
    {
        if ($categoryId) {

            $db = Db::getConnection();            
            $products = array();
            $result = $db->query("SELECT id, name, price, weight,  description, ing1, ing2, ing3, slogan, top1, top2, top3  FROM assortiment WHERE category_id = '$categoryId'");

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['weight'] = $row['weight'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['ing1'] = $row['ing1'];
                $products[$i]['ing2'] = $row['ing2'];
                $products[$i]['ing3'] = $row['ing3'];
                $products[$i]['slogan'] = $row['slogan'];
                $products[$i]['top1'] = $row['top1'];
                $products[$i]['top2'] = $row['top2'];
                $products[$i]['top3'] = $row['top3'];
                $i++;
            }

            return $products;       
        }
    }
}