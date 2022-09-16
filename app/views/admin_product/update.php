<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php'; ?>

<div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="edit__title title_padding fontSans size29px orange">Редактировать товар #<?php echo $id; ?></div>

    <div class="d-flex flex-column col-xl-8 col-lg-8 form-create form_padding">      

            <form action="#" method="post" enctype="multipart/form-data">
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundyLight size22px">Категория</div>
    <select name="category_id" class="size24px admin_input">
        <option value="<?php echo $product['category_id']; ?>" name="">
                    <?php echo $product['name_category']; ?>
                </option>
         <?php if (is_array($categoriesList)): ?>
            <?php foreach ($categoriesList as $category): ?>
                <option value="<?php echo $category['id']; ?>" name="">
                    <?php echo $category['name_category']; ?>
                </option>
            <?php endforeach; ?>
             <?php endif; ?>
    </select></div>

    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size35px">Название товара</div>
    <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>"  class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="brownDark justify-content-center font-weight-bold size24px">Стоимость</div>
    <input type="text" name="price" placeholder="" class="size24px admin_input" value="<?php echo $product['price']; ?>"></div>                  
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right-info__item brownDark bottom_padding fontSegoePrint size20px">Вес товара</div>
    <input type="text" name="weight" placeholder="" class="size24px admin_input" value="<?php echo $product['weight']; ?>"></div>             
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma padding-15">Oписание</div>
    <textarea name="description" class="textarea_admin size24px admin_input"><?php echo $product['description']; ?></textarea></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="burgundyLight size22px">Ингредиент1</div>
    <input type="text" name="ing1" placeholder="" class="size24px admin_input"  value="<?php echo $product['ing1']; ?>"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="burgundyLight size22px">Ингредиент2</div>
    <input type="text" name="ing2" placeholder="" class="size24px admin_input"  value="<?php echo $product['ing2']; ?>"></div>  
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="burgundyLight size22px">Ингредиент3</div>
    <input type="text" name="ing3" placeholder="" class="size24px admin_input"  value="<?php echo $product['ing3']; ?>"></div>             
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right-info__slogan view-product-right-info_padding brownLight size35px fontSegoePrint">Слоган</div>
    <input type="text" name="slogan" placeholder="" value="<?php echo $product['slogan']; ?>"  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma">Топ 1</div>
    <input type="text" name="top1" placeholder="" value="<?php echo $product['top1']; ?>"  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma">Топ 2</div>
    <input type="text" name="top2" placeholder="" value="<?php echo $product['top2']; ?>"  class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma">Топ 3</div>
    <input type="text" name="top3" placeholder="" value="<?php echo $product['top3']; ?>"  class="size24px admin_input"></div>
                       
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right__status padding_status justify-content-center size24px <?php echo $general['style']; ?>">Статус</div>
    <select name="best" class="size24px admin_input <?php echo $product['style']; ?>">
                <option value="<?php echo $product['best']; ?>"><?php echo $product['value']; ?></option>
                        <option value="1">Бестселлер</option>
                        <option value="2">Новинка!</option>
                         <option value="3">Уже в продаже</option>
                        <option value="4">Выгодно</option>
                        </select>

                    </div>
                <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="view-product-right__status  brownGrey size16px">Наличие</div>
    <select name="nal" class="size24px admin_input">
                
                        <option value="1">В наличии</option>
                        <option value="2">Нет</option></select>

                    </div>

                 
                      <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
                          <div class="burgundyLight edit-cart__title size20px">Изображение товара</div>
                          <input type="hidden" name="old_picture" value="<?php  echo $product['photo'];?>"/>
                          
                        <img src="/upload/images/products/<?php echo $product['photo']; ?>" width="200" alt="" />
                        <input type="file" name="new_picture" placeholder="" value="">
                       </div>
                        
   
        
  


                     
                        
                      
                        
                        
                       

                       

                     
                        
                      <div class="d-flex justify-content-end">
    <input type="submit" name="submit" value="Сохранить" class="btn btn-success size24px"></div>
                        
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>