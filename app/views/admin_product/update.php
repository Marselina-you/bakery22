<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php'; ?>

<div class="wrap-content pt-5">
    <div class="main">
  <div class="container col-xl-12">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="p-4 fontSans fs-3 orange">Редактировать товар #<?php echo $id; ?></div>

    <div class="px-4 pb-4 d-flex flex-column col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12 form-create">      

            <form action="#" method="post" enctype="multipart/form-data">
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
        <div class="burgundyLight fs-4 pb-2">Категория</div>
    <select name="category_id" class="fs-4 admin_input">
        <option value="<?php echo $product['category_id']; ?>" name=""><?php echo $product['name_category']; ?>
                </option>
         <?php if (is_array($categoriesList)): ?>
            <?php foreach ($categoriesList as $category): ?>
                <option value="<?php echo $category['id']; ?>" name=""><?php echo $category['name_category']; ?>
                </option>
            <?php endforeach; ?>
             <?php endif; ?>
    </select></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
        <div class="burgundy fontSegoePrint font-weight-bold fs-4 pb-2">Название товара</div>
       <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>"  class="fs-4 p-1 admin_input">
    </div>
    <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
    <div class="brownDark justify-content-center font-weight-bold fs-4 pb-2">Стоимость</div>
    <input type="text" name="price" placeholder="" class="fs-4 admin_input p-1" value="<?php echo $product['price']; ?>"></div>                  
    <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
    <div class="brownDark fontSegoePrint fs-4 pb-2">Вес товара</div>
    <input type="text" name="weight" placeholder="" class="fs-4 admin_input p-1" value="<?php echo $product['weight']; ?>"></div>             
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center justify-content-between py-1">
    <div class="burgundy fs-4 fontTahoma pb-2">Oписание</div>
    <textarea name="description" class="textarea_admin fs-4 p-1"><?php echo $product['description']; ?></textarea></div>
    <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center justify-content-between py-1">
    <div class="burgundyLight size22px pb-2">Ингредиент1</div>
    <input type="text" name="ing1" placeholder="" class="fs-4 admin_input p-1"  value="<?php echo $product['ing1']; ?>"></div>
    <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
    <div class="burgundyLight size22px pb-2">Ингредиент2</div>
    <input type="text" name="ing2" placeholder="" class="fs-4 admin_input p-1"  value="<?php echo $product['ing2']; ?>"></div>  
    <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
    <div class="burgundyLight size22px pb-2">Ингредиент3</div>
    <input type="text" name="ing3" placeholder="" class="fs-4 admin_input p-1"  value="<?php echo $product['ing3']; ?>"></div>             
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
    <div class="brownLight fs-4 fontSegoePrint pb-2">Слоган</div>
    <input type="text" name="slogan" placeholder="" value="<?php echo $product['slogan']; ?>"  class="fs-4 admin_input p-1"></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
    <div class="burgundy fs-4 fontTahoma pb-2">Топ 1</div>
    <input type="text" name="top1" placeholder="" value="<?php echo $product['top1']; ?>"  class="fs-4 admin_input p-1"></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
    <div class="burgundy fs-4 fontTahoma pb-2">Топ 2</div>
    <input type="text" name="top2" placeholder="" value="<?php echo $product['top2']; ?>"  class="fs-4 admin_input p-1"></div>
    <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
    <div class="burgundy fs-4 fontTahoma pb-2">Топ 3</div>
    <input type="text" name="top3" placeholder="" value="<?php echo $product['top3']; ?>"  class="fs-4 admin_input p-1"></div>
                       
    <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
    <div class="justify-content-center fs-4 pb-2 <?php echo $product['style']; ?>">Статус</div>
    <select name="best" class="fs-4 admin_input p-1 <?php echo $product['style']; ?>">
                <option value="<?php echo $product['best']; ?>"><?php echo $product['value']; ?></option>
                        <option value="1">Бестселлер</option>
                        <option value="2">Новинка!</option>
                         <option value="3">Уже в продаже</option>
                        <option value="4">Выгодно</option>
                        </select>

                    </div>
                <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
    <div class="brownGrey fs-4 pb-2">Наличие</div>
    <select name="nal" class="fs-4 admin_input p-1">
                 <option value="<?php echo $product['nal']; ?>"><?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></option>
                        <option value="1">В наличии</option>
                        <option value="2">Нет</option></select>

                    </div>
                     <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
    <div class="brownGrey fs-4 pb-2">Рекомендуем</br> (в слайдер)</div>
    <select name="recom" class="fs-4 admin_input p-1">
                 <option value="<?php echo $product['recommendation']; ?>"><?php if ($product['recommendation'] == 1) echo 'да'; else echo 'нет';?></option>
                        <option value="1">Да</option>
                        <option value="0">Нет</option></select>

                    </div>

                 
                      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
                          <div class="burgundyLightfs-1 pb-2 fs-4">Изображение товара</div>
                          <input type="hidden" name="old_picture" value="<?php  echo $product['photo'];?>"/>
                          
                        <img src="/upload/images/products/<?php echo $product['photo']; ?>" width="200" alt="" />
                        <input type="file" name="new_picture" placeholder="" value="">
                       </div>
                        
   
<div class="py-4 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-sm-center justify-content-center">
    <input type="submit" name="submit" value="Сохранить" class="btn btn-success fs-4"></div>
                        
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>