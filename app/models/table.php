 <? public static function getProductsList()
    {
        $db = Db::getConnection();
       
        $productsList = array();

        $result = $db->query('SELECT* FROM assortiment ORDER BY id');
        $i = 0;
        while($row = $result->fetch()) {

         $result2 = $db->query('SELECT status.value, status.style FROM status JOIN assortiment ON assortiment.best = status.id WHERE assortiment.id = ' .$row['id']);
       $o = 0;
         
            
             while($row2 = $result2->fetch()) {
                $productsList[$o]['best'] = $row2['value'];
                $row['best'] = $row2['value'];
                $productsList[$o]['style'] = $row2['style'];
                $row['style'] = $row2['style'];
                $o++;
             }
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['best'] = $row['best']; 
            $productsList[$i]['style'] = $row['style'];   
            
            $productsList[$i]['category_id'] = $row['category_id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['weight'] = $row['weight'];
            //$productsList[$i]['photo'] = $row['photo'];
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
print_r($productsList);
        return $productsList;

         public static function getProductsList()
    {
        $db = Db::getConnection();
       
        $productsList = array();

        $result = $db->query('SELECT assortiment.best, assortiment.id, assortiment.name, assortiment.weight, assortiment.category_id, assortiment.price, assortiment.description, assortiment.ing1, assortiment.ing2, assortiment.ing3, assortiment.top1, assortiment.top2, assortiment.top3, assortiment.slogan, assortiment.nal, assortiment.photo, status.id, status.value, status.style FROM assortiment JOIN status ON  assortiment.best = status.id');
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
print_r($productsList);
        return $productsList;
    }
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $page = intval($page);            
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();            
            $products = array();
            $result = $db->query("SELECT  id, name, price, weight, description, ing1, ing2, ing3, slogan, top1, top2, top3, best, nal, photo FROM assortiment WHERE category_id = '$categoryId' "
                    . "ORDER BY id ASC LIMIT ".self::SHOW_BY_DEFAULT
                     . ' OFFSET '. $offset);

            $i = 0;
            while ($row = $result->fetch()) {
$result2 = $db->query("SELECT status.value, status.style FROM status JOIN assortiment ON assortiment.best = status.id WHERE assortiment.category_id = '$categoryId' ");
       $o = 0;
          while($row2 = $result2->fetch()) {
                $products[$o]['best'] = $row2['value'];
                $row['best'] = $row2['value'];
                $products[$o]['style'] = $row2['style'];
                $o++;
             
                }
                
                $products[$i]['name'] = $row['name'];
                $products[$i]['id'] = $row['id'];
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
    SELECT assortiment.*, category.name, status.value 
FROM assortiment JOIN category ON assortiment.category_id = category.id
JOIN status ON assortiment.best = status.id