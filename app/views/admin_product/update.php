<?php include ROOT . '/views/layouts/header_admin.php'; ?>


    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active"><a href="/admin/product/update">Редактировать товар</a></li>
                </ol>
            </div>


            <h4>Редактировать товар #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
<p>Категории</p>
    <select name="category_id">
         <?php if (is_array($categoriesList)): ?>
            <?php foreach ($categoriesList as $category): ?>
                <option value="<?php echo $category['id']; ?>" name="">
                    <?php echo $category['name']; ?>
                </option>
            <?php endforeach; ?>
             <?php endif; ?>
    </select>
                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                </br>        

                <p>Стоимость, $</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                       

                      
                    <p>Вес товара</p>
    <input type="text" name="weight" placeholder="" value="<?php echo $product['weight']; ?>">    

                        <p>Детальное описание</p>
                        <textarea name="description"><?php echo $product['description']; ?></textarea>
                        <p>Изображение товара</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">
                        <br/><br/>
                        <p>Ингредиент1</p>
    <input type="text" name="ing1" placeholder="" value="<?php echo $product['ing1']; ?>">
    <p>Ингредиент2</p>
    <input type="text" name="ing2" placeholder="" value="<?php echo $product['ing2']; ?>">
    <p>Ингредиент3</p>
    <input type="text" name="ing3" placeholder="" value="<?php echo $product['ing3']; ?>">
    <p>Слоган</p>
    <input type="text" name="slogan" placeholder="" value="<?php echo $product['slogan']; ?>">
    <p>Топ 1</p>
    <input type="text" name="top1" placeholder="" value="<?php echo $product['top1']; ?>">
    <p>Топ 2</p>
    <input type="text" name="top2" placeholder="" value="<?php echo $product['top2']; ?>">
    <p>Топ 3</p>
    <input type="text" name="top3" placeholder="" value="<?php echo $product['top3']; ?>">


                     
                        
                      
                        
                        
                       

                       

                     
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        
                    </form>
                </div>
            </div>

        </div>
    </div>


<?php include ROOT . '/views/layouts/footer_admin.php'; ?>