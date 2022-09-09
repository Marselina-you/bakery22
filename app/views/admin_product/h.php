<div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="edit__title title_padding fontSans size29px orange">Редактирование товара <?php echo $id; ?></div>

  <div class="d-flex flex-column col-xl-8 col-lg-8 form-create form_padding">          
           
  

            
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
<div class="burgundyLight size22px">Категория</div>
    <select name="category_id" class="size24px admin_input">
         <?php if (is_array($categoriesList)): ?>
            <?php foreach ($categoriesList as $category): ?>
                <option value="<?php echo $category['id']; ?>" name="">
                    <?php echo $category['name']; ?>
                </option>
            <?php endforeach; ?>
             <?php endif; ?>
    </select></div>
                       <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size35px padding-15">Название товара</div>
                        <input type="text" class="size24px admin_input" name="name" placeholder="" value="<?php echo $product['name']; ?>">
                    </div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="brownDark justify-content-center font-weight-bold size24px">Цена</div>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>" class="size24px admin_input">
                    </div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="view-product-right-info__item brownDark bottom_padding fontSegoePrint size20px">Вес товара</div>
    <input type="text" name="weight" placeholder="" value="<?php echo $product['weight']; ?>" class="size24px admin_input"></div>  
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma padding-15">Детальное описание</div>
                        <textarea name="description" class="textarea_admin size24px admin_input"><?php echo $product['description']; ?></textarea></div>
                      
                      <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma">Ингредиент1</div>
    <input type="text" name="ing1" placeholder="" value="<?php echo $product['ing1']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma">Ингредиент2</div>
    <input type="text" name="ing2" placeholder="" value="<?php echo $product['ing2']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma">Ингредиент3</div>
    <input type="text" name="ing3" placeholder="" value="<?php echo $product['ing3']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="view-product-right-info__slogan view-product-right-info_padding brownLight size35px fontSegoePrint padding-15">Слоган</div>
    <input type="text" name="slogan" placeholder="" value="<?php echo $product['slogan']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="d-flex size24px fontTahoma">Топ 1</div>
    <input type="text" name="top1" placeholder="" value="<?php echo $product['top1']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="d-flex size24px fontTahoma">Топ 2</div>
    <input type="text" name="top2" placeholder="" value="<?php echo $product['top2']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="d-flex size24px fontTahoma">Топ 3</div>
    <input type="text" name="top3" placeholder="" value="<?php echo $product['top3']; ?>" class="size24px admin_input"></div>

   <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right__status padding_status justify-content-center orange size24px">Статус</div>
    <select name="best" class="size24px admin_input">
                
                        <option value="Бестселлер"><?php echo $product['best']; ?></option>
                        <option value="Новинка!">Новинка!</option>
                        <option value="Выгодно">Выгодно</option>
                        <option value="Уже в продаже">Уже в продаже</option></select>

                    </div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="view-product-right__status  brownGrey size16px">Наличие</div>
   <select name="nal" class="size24px admin_input">
                <option value="1" <?php if ($product['nal'] == 1) echo ' selected="selected"'; ?>>Да</option>
                        <option value="0" <?php if ($product['nal'] == 0) echo ' selected="selected"';?>>Нет</option></select>
                        </div>

 <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundyLight edit-cart__title size20px">Изображение товара</div>
                      <img src="/upload/images/products/<?php echo $product['new_picture']; ?>" width="200" alt="" /></div>
                <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
                        <input type="file" name="new_picture" placeholder="" value="<?php echo $product['new_picture']; ?>"></div>

                        


                     
                        
                      
                        
                        
                       

                       

                    <div class="d-flex justify-content-end">
    <input type="submit" name="submit" value="Сохранить" class="btn btn-success size24px"></div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>