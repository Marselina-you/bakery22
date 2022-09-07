<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/admin_header.php';
 ?>
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
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Название товара</div>
                        <input type="text" class="size24px admin_input" name="name" placeholder="" value="<?php echo $product['name']; ?>">
                    </div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Цена</div>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>" class="size24px admin_input">
                    </div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Вес товара</div>
    <input type="text" name="weight" placeholder="" value="<?php echo $product['weight']; ?>" class="size24px admin_input"></div>  
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Детальное описание</div>
                        <textarea name="description" class="textarea_admin size24px admin_input"><?php echo $product['description']; ?></textarea></div>
                      
                      <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Ингредиент1</div>
    <input type="text" name="ing1" placeholder="" value="<?php echo $product['ing1']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Ингредиент2</div>
    <input type="text" name="ing2" placeholder="" value="<?php echo $product['ing2']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Ингредиент3</div>
    <input type="text" name="ing3" placeholder="" value="<?php echo $product['ing3']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Слоган</div>
    <input type="text" name="slogan" placeholder="" value="<?php echo $product['slogan']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Топ 1</div>
    <input type="text" name="top1" placeholder="" value="<?php echo $product['top1']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Топ 2</div>
    <input type="text" name="top2" placeholder="" value="<?php echo $product['top2']; ?>" class="size24px admin_input"></div>
    <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Топ 3</div>
    <input type="text" name="top3" placeholder="" value="<?php echo $product['top3']; ?>" class="size24px admin_input"></div>

   <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
    <div class="burgundyLight edit-cart__title size20px">Статус</div>
    <select name="best" class="size24px admin_input">
                
                        <option value="Бестселлер"><?php echo $product['best']; ?></option>
                        <option value="Новинка!">Новинка!</option>
                        <option value="Выгодно">Выгодно</option>
                        <option value="Уже в продаже">Уже в продаже</option></select>

                    </div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold size24px">Наличие</div>
   <select name="nal" class="size24px admin_input">
                
                        <option value="В наличии"><?php echo $product['nal']; ?></option>
                        <option value="Нет">Нет</option></select></div>

 <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundyLight edit-cart__title size20px">Изображение товара</div>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>"></div>

                        


                     
                        
                      
                        
                        
                       

                       

                     <div class="d-flex justify-content-end">
    <input type="submit" name="submit" value="Сохранить" class="btn btn-success size24px"></div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>


<?php include ROOT . '/views/layouts/admin_footer.php'; ?>