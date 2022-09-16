<?php


class Product
{
const SHOW_BY_DEFAULT = 3;
	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getProductById($id)
	{
		$id = intval($id);

		if ($id) {
/*			$host = 'localhost';
			$dbname = 'php_base';
			$user = 'root';
			$password = '';
			$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
			$db = Db::getConnection();
			$result = $db->query('SELECT assortiment.*, category.name_category, status.value 
FROM assortiment INNER JOIN category ON category.id = assortiment.category_id  
LEFT JOIN status ON status.id = assortiment.best  WHERE assortiment.id=' . $id);
            

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$product = $result->fetch();//массив из столбцов таблицы
            


			return $product;
		}

	}
    

public static function getLatestProducts($count = self::SHOW_BY_DEFAULT) {
		

		$db = Db::getConnection();
		$latestProducts = array();

		$result = $db->query('SELECT  assortiment.*, category.name_category, status.value, status.style 
FROM assortiment INNER JOIN category ON category.id = assortiment.category_id  
LEFT JOIN status ON status.id = assortiment.best   ORDER BY id ASC LIMIT '. $count);

		$i = 0;
		while($row = $result->fetch()) {
			$latestProducts[$i]['id'] = $row['id'];
			$latestProducts[$i]['name'] = $row['name'];
            $latestProducts[$i]['name_category'] = $row['name_category'];
			$latestProducts[$i]['value'] = $row['value'];
            $latestProducts[$i]['style'] = $row['style'];
			$latestProducts[$i]['description'] = $row['description'];
			$latestProducts[$i]['price'] = $row['price'];
			$latestProducts[$i]['weight'] = $row['weight'];
			$latestProducts[$i]['top1'] = $row['top1'];
			$latestProducts[$i]['top2'] = $row['top2'];
			$latestProducts[$i]['top3'] = $row['top3'];
			$latestProducts[$i]['slogan'] = $row['slogan'];
			$latestProducts[$i]['ing1'] = $row['ing1'];
			$latestProducts[$i]['ing2'] = $row['ing2'];
			$latestProducts[$i]['ing3'] = $row['ing3'];
            $latestProducts[$i]['best'] = $row['best'];
            $latestProducts[$i]['nal'] = $row['nal'];
             $latestProducts[$i]['new_picture'] = $row['photo'];
			$i++;
		}

		return $latestProducts;
	
}
public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

        	$page = intval($page);            
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();            
            $products = array();
            $result = $db->query("SELECT assortiment.*, status.value, status.style FROM assortiment JOIN status ON status.id = assortiment.best WHERE category_id = '$categoryId' "
                    . "ORDER BY id ASC LIMIT ".self::SHOW_BY_DEFAULT
                     . ' OFFSET '. $offset);

            $i = 0;
            while ($row = $result->fetch()) {

                
                $products[$i]['name'] = $row['name'];
                $products[$i]['id'] = $row['id'];
                 $products[$i]['value'] = $row['value']; 
                $products[$i]['style'] = $row['style']; 
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
                $products[$i]['best'] = $row['best'];
                $products[$i]['nal'] = $row['nal'];
                $products[$i]['new_picture'] = $row['photo'];
                $i++;
            }

            return $products;       
        }
    }
     public static function getProductsList()
    {
        $db = Db::getConnection();
       
        $productsList = array();

        $result = $db->query('SELECT assortiment.*, status.value, status.style  FROM assortiment JOIN status ON status.id = assortiment.best ORDER BY assortiment.id');
        $i = 0;
        while($row = $result->fetch()) {

         //$result2 = $db->query('SELECT status.value, status.style FROM status JOIN assortiment ON assortiment.best = status.id WHERE assortiment.id = ' .$row['id']);
       //$o = 0;
         
            
             //while($row2 = $result2->fetch()) {
                //$productsList[$o]['best'] = $row2['value'];
               // $row['best'] = $row2['value'];
               // $productsList[$o]['style'] = $row2['style'];
                //$row['style'] = $row2['style'];
                //$o++;
             //}
             $productsList[$i]['best'] = $row['best'];
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
             $productsList[$i]['weight'] = $row['weight'];
            $productsList[$i]['value'] = $row['value']; 
            $productsList[$i]['style'] = $row['style'];   
            $productsList[$i]['category_id'] = $row['category_id'];
            $productsList[$i]['price'] = $row['price'];
           
            
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['ing1'] = $row['ing1'];
            $productsList[$i]['ing2'] = $row['ing2'];
            $productsList[$i]['ing3'] = $row['ing3'];
            $productsList[$i]['slogan'] = $row['slogan'];
            $productsList[$i]['top1'] = $row['top1'];
            $productsList[$i]['top2'] = $row['top2'];
            $productsList[$i]['top3'] = $row['top3'];
            $productsList[$i]['nal'] = $row['nal'];
            $productsList[$i]['new_picture'] = $row['photo'];
           
            $i++;

        }
        //array_push($productsList, var)
//print_r($productsList);
        return $productsList;
    }
	public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM assortiment '
                . 'WHERE  category_id ="'.$categoryId.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }
    public static function getProdustsByIds($idsArray)
    {
        $products = array();
        
        $db = Db::getConnection();
        
        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM assortiment WHERE id IN ($idsString)";

        $result = $db->query($sql);        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['weight'] = $row['weight'];
            $i++;
        }

        return $products;
    }
   
    public static function deleteProductById($id)
    {
    	$db = Db::getConnection();
    	$sql = 'DELETE FROM assortiment WHERE id = :id';
    	$result = $db->prepare($sql);
    	$result->bindParam(':id', $id, PDO::PARAM_INT);
    	return $result->execute();
    }

    public static function createProduct($options)
    {
    	$db = Db::getConnection();

    	$sql = 'INSERT INTO assortiment '
                . '(category_id, name,  price,  weight, '
                . 'description, ing1, ing2, ing3, slogan, top1, top2, top3, best, nal, photo)'
                . 'VALUES '
                . '(:category_id, :name,  :price,  :weight, '
                . ':description, :ing1, :ing2, :ing3, :slogan, :top1, :top2, :top3, :best, :nal, :new_picture)';
    	$result = $db->prepare($sql);
    	
    	$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
    	$result->bindParam(':price', $options['price'], PDO::PARAM_INT);
    	$result->bindParam(':weight', $options['weight'], PDO::PARAM_INT);
    	$result->bindParam(':description', $options['description'], PDO::PARAM_STR);
    	$result->bindParam(':ing1', $options['ing1'], PDO::PARAM_STR);
    	$result->bindParam(':ing2', $options['ing2'], PDO::PARAM_STR);
    	$result->bindParam(':ing3', $options['ing3'], PDO::PARAM_STR);
    	$result->bindParam(':slogan', $options['slogan'], PDO::PARAM_STR);
    	$result->bindParam(':top1', $options['top1'], PDO::PARAM_STR);
    	$result->bindParam(':top2', $options['top2'], PDO::PARAM_STR);
    	$result->bindParam(':top3', $options['top3'], PDO::PARAM_STR);
        $result->bindParam(':best', $options['best'], PDO::PARAM_STR);
        $result->bindParam(':nal', $options['nal'], PDO::PARAM_STR);
        $result->bindParam(':new_picture', $options['new_picture'], PDO::PARAM_STR);

         
    	if ($result->execute()) {
    		return $db->lastInsertId();

    	}
    	return 0;
    }
    
     public static function updateProductById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE assortiment SET category_id = :category_id, 
                name = :name, 
                weight = :weight, 
                price = :price, 
                description = :description, 
                ing1 = :ing1, 
                ing2 = :ing2,
                ing3 = :ing3,
                slogan = :slogan, 
                top1 = :top1, 
                top2 = :top2,
                top3 = :top3,
                best = :best,
                nal = :nal,
                photo = :new_picture
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':weight', $options['weight'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':ing1', $options['ing1'], PDO::PARAM_STR);
        $result->bindParam(':ing2', $options['ing2'], PDO::PARAM_STR);
        $result->bindParam(':ing3', $options['ing3'], PDO::PARAM_STR);
        $result->bindParam(':slogan', $options['slogan'], PDO::PARAM_STR);
        $result->bindParam(':top1', $options['top1'], PDO::PARAM_STR);
        $result->bindParam(':top2', $options['top2'], PDO::PARAM_STR);
        $result->bindParam(':top3', $options['top3'], PDO::PARAM_STR);
        $result->bindParam(':best', $options['best'], PDO::PARAM_STR);
        $result->bindParam(':nal', $options['nal'], PDO::PARAM_STR);
        $result->bindParam(':new_picture', $options['new_picture'], PDO::PARAM_STR);
       
        return $result->execute();
    }
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/upload/images/products/';

        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
    public static function getProductCategoryName($id)
    {
        $id = intval($id);

        if ($id) {
/*          $host = 'localhost';
            $dbname = 'php_base';
            $user = 'root';
            $password = '';
            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
            $db = Db::getConnection();
            $result = $db->query('SELECT category.id, category.name FROM category JOIN assortiment ON assortiment.category_id= category.id WHERE assortiment.id =' .$id);
            $result2 = $db->query('SELECT status.value, status.style FROM status JOIN assortiment ON assortiment.best = status.id WHERE assortiment.id = ' .$id);

            /*$result->setFetchMode(PDO::FETCH_NUM);*/
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result2->setFetchMode(PDO::FETCH_ASSOC);

            $name_category = $result->fetch();
            $status = $result2->fetch();
$general = $name_category + $status;
            //массив из столбцов таблицы
            //$status = $result2->fetch();
            //$general = array_merge($name_category, $status);
            print_r($general);
 return $general;

            
        }

    }
    


}
