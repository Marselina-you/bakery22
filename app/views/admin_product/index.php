<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/admin_header.php';
 ?>
<div class="wrap-content pt-5">
    <div class="main">
  <div class="container col-xl-12">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="edit__title p-4 fontSans fs-3"><a href="/admin/product/create" class="orange">Добаить новый товар</a></div>
<div class="pb-4 d-flex col-xl-12 flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="px-4 py-1 darkBlue fontSans fs-3"><a href="/admin/product/categorya/<?php echo $categoryItem['id'];?>" class=""><?php echo $categoryItem['name_category'];?></a>
        </div>
       
                   
                   
            <?php endforeach; ?>      
                </div>
<div class="px-4 d-flex row">
    <?php foreach ($productsList as $product): ?>
         

 <div class="edit-cart pb-3 d-flex col-xl-6 col-lg-6 flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
         <div class="edit-cart__img pb-2 col-xl-4"><img width ="80%" src="/upload/images/products/<?php echo $product['new_picture'];?>"></div>
         <div class="d-flex flex-column">
        <div class="edit-cart__title pb-2 font-weight-bold fs-5"><div class="burgundy fontSegoePrint font-weight-bold fs-2 text-uppercase"><?php echo $product['name']; ?> #<?php echo $product['id']; ?></div></div>
       <div class=""><div class="edit-cart__title pb-2 fs-5"><div class="brownDark justify-content-center font-weight-bold fs-4"><?php echo $product['price']; ?><span class="rubl">₽</span></div></div>
         </div>
          <div class="edit__category fs-5"><div class="view-product-right__status brownGrey fs-5"><?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></div></div>
          <div class="brownDark py-2 fontSegoePrint fs-5"><?php echo $product['weight']; ?> грамм</div>
          <div class="edit__category fs-4 burgundyLight">Описание:</div>
        <div class="py-2 d-flex flex-column brownDark fontSegoePrint fs-4 lh-sm"><?php echo $product['description']; ?></div>

         <div class="edit__category py-2"><div class="burgundyLight fs-4">Ингредиенты:</div>
            <div class="py-1 fs-4 brownDark fontSegoePrint"><span class=""> -</span><?php echo $product['ing1']; ?></div>
         <div class="py-1 fs-4 brownDark fontSegoePrint"><span class=""> -</span><?php echo $product['ing2']; ?></div>
          <div class="py-1 fs-4 brownDark fontSegoePrint"><span class=""> -</span><?php echo $product['ing3']; ?></div>
      </div>
         <div class="d-flex pb-2 align-items-center"><div class="fs-4 burgundyLight">Слоган:&nbsp; </div><div class="brownLight fs-4 fontSegoePrint"> <?php echo $product['slogan']; ?></div>
     </div>
          <div class="block-top pb-2 lh-sm">
            <div class="block-top_top d-flex align-items-center">
                <div class="burgundyLight edit-cart__title fs-4">Топ 1:&nbsp;</div>
                <div class="d-flex fontTahoma fs-4"><?php echo $product['top1']; ?></div>
            </div>
           <div class="block-top_top d-flex align-items-center">
            <div class="burgundyLight edit-cart__title fs-4">Топ 2:&nbsp;</div>
            <div class="d-flex fontTahoma fs-4"><?php echo $product['top2']; ?></div> 
           </div>
            <div class="block-top_top d-flex align-items-center">
                <div class="burgundyLight edit-cart__title fs-4">Топ 3:&nbsp;</div>
                    <div class="d-flex fontTahoma fs-4"><?php echo $product['top3']; ?></div>
            </div>
         </div>     
         <div class="d-flex align-items-center pb-2">
            <div class="burgundyLight edit-cart__title fs-4">Статус:&nbsp;<?php echo $product['best']; ?></div> 
            <div class="<?php echo $product['style']; ?> view-product-right__status py-0 justify-content-center fs-4  px-2"><?php echo $product['value']; ?></div>
        </div>
        <div class="d-flex align-items-center pb-2">
            <div class="burgundyLight edit-cart__title fs-4">Рекомендуем: <?php if ($product['recommendation'] == 1) echo 'да'; else echo 'нет';?></div> </div>
           
         
     







        <div class="edit-cart__operations lh-sm">
        <div class="edit-cart__operation"><a href="" class="fs-5 darkBlue">Скрыть для пользователя</a></div>
        <div class="edit-cart__operation"><a href="/admin/product/update/<?php echo $product['id']; ?>" class="fs-5 darkBlue">Редактировать</a></div>
        <div class="edit-cart__operation"><a href="/admin/product/delete/<?php echo $product['id']; ?>" class="burgundy fs-5">Удалить</a></div></div>
    </div>
        
    </div>


             
        
    <?php endforeach; ?>
</div></div></div></div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>