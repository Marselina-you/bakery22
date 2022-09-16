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