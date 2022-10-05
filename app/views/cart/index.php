<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
//include ROOT . '/views/layouts/header3.php';?>
<div class="wrap-content  container-fluid">
    <div class="main">
       

       <?php if ($productsInCart): ?>
        <div class="content-empty">
        <div class="content-empty-text col-xl-11 offset-xl-1">
            <div class="col-xl-10">
                <div class="col-xl-4 title size35px brownDark fontTahoma letter-space">Корзина </div></div>
            <div class="col-xl-12 col-lg-12 undertitle_check_padding d-flex align-items-center">
                <div class="d-flex col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 size29px fontTahoma letter-space"><a href="/catalog" class="undertitle_check brownLight">Перейти в каталог</a></div>
            <div class="d-flex col-xl-8 col-lg-8 col-md-6 col-sm-6 col-6 flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="check_padding d-flex"><a href="/category/<?php echo $categoryItem['id'];?>" class="darkBlue fontSans size29px"><?php echo $categoryItem['name_category'];?></a>
                </div>
            <?php endforeach; ?>
            </div> 
            </div>
        </div>
         
     
    </div>       
        <?php foreach ($products as $product): ?>
          
<div class="wrap-main-cartFull-content col-xl-11 offset-xl-1">
    <div class="main-cartFull-list">
        <div class="wrap-main-cartFull-list-item">
            <div class="main-cartFull-list-item d-flex col-xl-12 justify-content-between">
         <div class="main-cartFull-list-item__img  col-xl-6 d-flex justify-content-center align-items-center">
            <img src="/upload/images/products/<?php echo $product['photo']; ?>">
         </div>
         <div class="main-cartFull-list-item__info col-xl-5 d-flex flex-column justify-content-center">
            <div class="main-cartFull-list-item__info-name size29px fontSans brownDark"> <?php echo $product['name'];?></div>
            <div class="main-cartFull-list-item__info-weight size24px fontSans brownSweet main-cartFull-list-item__info-weight_padding"> <?php echo $product['weight'];?> грамм</div>
             <div class="main-cartFull-list-item__info-weight size24px fontSans brownSweet main-cartFull-list-item__info-weight_padding">Количество: <?php echo $productsInCart[$product['id']];?></div>
             <div class="main-cartFull-list-item__info-weight size24px fontSans brownSweet main-cartFull-list-item__info-weight_padding"><?php echo $product['price'];?>₽</div>
           

<div class="main-cartFull-list-item__info-deleting d-flex justify-content-between align-items-center main-cartFull-list-item__info-delete_padding">
  
         
             
             <div class="size22px burgundyLight"><a href="/cart/delete/<?php echo $product['id'];?>">удалить</a></div></div></form>
         </div>
         
      </div><div class="hr-basket"><hr class="col-xl-10 offset-xl-1"></div></div>


 



</div>

</div>
 <?php endforeach; ?>
<div class="main-cartFull-content-end col-xl-6 offset-xl-1">
<div class="main-cartFull-content-end__amount d-flex justify-content-between"><div class="size29px  fontTahoma letter-space brownLight title_padding">Количество товаров</div><div class="size29px fontTahoma letter-space brownDark font-weight-bold title_padding"><?php echo $totalQuantity; ?></div></div>    
<div class="main-cartFull-content-end__amount d-flex justify-content-between">
<div class="size29px  fontTahoma letter-space brownLight title_padding">К оплате</div>
<div class="size29px fontTahoma letter-space brownDark font-weight-bold title_padding"><?php echo $totalPrice;?>₽</div></div>

<div class="content-form__data d-flex align-items-center justify-content-end content-form__data_padding">
   <div class="col-xl-7 col-lg-7 col-md-7 col-sm-10 col-10 d-flex justify-content-end">
<button class="content-order-end__click__btn btn btn-success size29px col-xl-10" type="button"><a href="/cart/checkout">Оформить заказ</a></button></div></div>
 <?php else: ?>
      <div class="content-empty">
        <div class="content-empty-text col-xl-11 offset-xl-1">
            <div class="col-xl-10">
                <div class="col-xl-4 title size35px brownDark fontTahoma letter-space">Корзина пуста</div></div>
            <div class="col-xl-11  undertitle_check_padding d-flex align-items-center">
                <div class="size29px fontTahoma letter-space"><a href="/catalog" class="undertitle_check brownLight">Перейти в каталог</a></div>
            <div class="d-flex col-xl-8">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="check_padding "><a href="/category/<?php echo $categoryItem['id'];?>" class="darkBlue fontSans size29px"><?php echo $categoryItem['name_category'];?></a>
                </div>
            <?php endforeach; ?>
            </div> 
            </div>
           
        </div>
         
     
    </div>       
      <div class="main">
   <div class="content-empty-slider__title brownDark size29px fontTahoma letter-space d-flex justify-content-center">Рекомендуем</div>
   <div class="arrow-navy d-flex justify-content-between">
  <div class="arrow prev-slide navy-phone"><img src="/template/images/arrow1.png"></div>
  <div class="arrow next-slide navy-phone"><img src="/template/images/arrow.png"></div></div>
   <div class="slider d-flex col-xl-10 offset-xl-1 col-md-10 offset-md-1  col-sm-10 offset-sm-1  col-xs-10 offset-xs-1 ">
     
      <div class="slide-list col-xl-12 col-md-12 col-sm-12">
         <div class="slide-wrap">
            <?php foreach ($productsBest as $product): ?>
             <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img wrap_img"><a href="/product/view/<?php echo $product['id'];?>"><img src="/upload/images/products/<?php echo $product['new_picture'];?>" alt="" /></a></div>
              <div class="slide-item__value size45px burgundyLight"><?php echo $product['price'];?><span class="rubl">₽</span></div>
               <div class="slide-item__slogan size24px fontTahoma letter-space <?php echo $product['style'];?>"><?php echo $product['value'];?></div>
               <span class="slide-title brownDark size29px text-center"><a href="/product/view/<?php echo $product['id'];?>"><?php echo $product['name'];?></a></span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="/cart/add/<?php echo $product['id']; ?>" data-id="<?php echo $product['id'];?>">В корзину</a></div>
            </div><?php endforeach;?> 
           
           
      
           
            
      </div>
<div class="clear"></div>
</div></div> </div>
                       <?php endif; ?>
</div>

</div>
</div>


<?php include ROOT . '/views/layouts/footer2.php'; ?>