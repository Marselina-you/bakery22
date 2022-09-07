<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php';
//include ROOT . '/views/layouts/header2.php'; 
 ?>
 <div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
  <?php include ROOT . '/views/layouts/admin_menu.php';?>	
<div class="edit__title title_padding fontSans size29px"><a href="/create" class="orange">Добавить новый товар</a></div>
<div class="d-flex col-xl-12">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="edit__title title_padding darkBlue fontSans size29px"><a href="/categorys/<?php echo $categoryItem['id'];?>" class="col-xl-6 <?php if ($categoryId == $categoryItem['id']) echo 'active'; else echo'white'; ?>"><?php echo $categoryItem['name'];?></a>
        </div>
       
                   
                   
            <?php endforeach; ?>      
                </div><div class="d-flex row">
	<?php foreach ($categoryProducts as $product): ?>
		 

 
        
 <div class="edit-cart bottom_padding d-flex col-xl-6 col-lg-6">
         <div class="edit-cart__img col-xl-4"><img width ="80%" src="../upload/images/products/<?php echo $product['new_picture'];?>"></div>
         <div class="edit-cart__content d-flex flex-column">
        <div class="edit-cart__title bottom_padding10 font-weight-bold size20px"><div class="burgundy  fontSegoePrint font-weight-bold size35px padding-15"><?php echo $product['name']; ?></div></div>
       <div class=""><div class="edit-cart__title bottom_padding10 size20px"><div class="brownDark justify-content-center font-weight-bold size24px"><?php echo $product['price']; ?><span class="rubl">₽</span></div></div>
         </div>
          <div class="edit__category size20px"><div class="view-product-right__status  brownGrey size16px"><?php echo $product['nal']; ?></div></div>
          <div class="view-product-right-info__item brownDark bottom_padding fontSegoePrint size20px"><?php echo $product['weight']; ?> грамм</div>
          <div class="edit__category size22px burgundyLight">Описание:</div>
        <div class="bottom_padding10 d-flex flex-column brownDark fontSegoePrint size20px line-height1"><?php echo $product['description']; ?></div>

         <div class="edit__category bottom_padding10"><div class=" burgundyLight size22px">Ингредиенты:</div>
            <div class="view-product-right-info__item size20px brownDark fontSegoePrint"><span class=""> -</span><?php echo $product['ing1']; ?></div>
         <div class="view-product-right-info__item size20px brownDark fontSegoePrint"><span class=""> -</span><?php echo $product['ing2']; ?></div>
          <div class="view-product-right-info__item size20px brownDark fontSegoePrint"><span class=""> -</span><?php echo $product['ing3']; ?></div>
      </div>
         <div class="d-flex"><div class="edit__category bottom_padding10 size22px burgundyLight">Слоган:&nbsp; </div><div class="brownLight size20px fontSegoePrint"> <?php echo $product['slogan']; ?></div>
     </div>
          <div class="block-top bottom_padding10">
            <div class="block-top_top d-flex align-items-center">
                <div class="burgundyLight edit-cart__title size20px">Топ 1:</div>
                <div class="d-flex fontTahoma size20px icons__item_padding"> <?php echo $product['top1']; ?></div>
            </div>
           <div class="block-top_top d-flex align-items-center">
            <div class="burgundyLight edit-cart__title size20px">Топ 2: </div>
            <div class="d-flex fontTahoma size20px icons__item_padding"><?php echo $product['top2']; ?></div> 
           </div>
            <div class="block-top_top d-flex align-items-center">
                <div class="burgundyLight edit-cart__title size20px">Топ 3:</div>
                    <div class="d-flex fontTahoma size20px icons__item_padding"> <?php echo $product['top3']; ?></div>
            </div>
         </div>     
         <div class="burgundyLight d-flex align-items-center bottom_padding">
            <div class="burgundyLight edit-cart__title size22px">Статус:</div> 
            <div class="view-product-right__status padding_status justify-content-center orange size20px  icons__item_padding"><?php echo $product['best']; ?></div>
        </div>
         
     







       
    </div>
        
    </div>


			 
		
	<?php endforeach; ?>
</div></div></div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>
