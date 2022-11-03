<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
//include ROOT . '/views/layouts/header3.php';?>
<div class="wrap-content">
    <div class="main"><?php if ($productsInCart): ?>
        <div class="content-empty">
        <div class="col-xl-11 offset-xl-1 col-lg-11 offset-lg-1 col-md-11 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1">
            <div class="col-xl-10">
                <div class="col-xl-4 pt-5 fs-2 brownDark fontTahoma letter-space">Корзина </div></div>
            <div class="letter-space col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-row flex-column align-items-center py-xl-5 py-lg-5 py-md-4 py-sm-3 py-3 lh-xl-1 lh-lg-1 lh-md-1 lh-sm-sm lh-sm">
                <div class="d-flex col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 fs-3 fontTahoma"><a href="/catalog" class="brownLight">Перейти в каталог</a></div>
            <div class="d-flex col-xl-8 col-lg-8 col-md-6 col-sm-6 col-6 flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="px-xl-4 px-lg-4 px-md-0 px-sm-0 px-0 d-flex"><a href="/category/<?php echo $categoryItem['id'];?>" class="darkBlue fontSans fs-3"><?php echo $categoryItem['name_category'];?></a>
                </div>
            <?php endforeach; ?>
            </div> 
            </div>
        </div>
</div>       
        <?php foreach ($products as $product): ?>
<div class="col-xl-11 offset-xl-1 col-lg-11 offset-lg-1 col-md-11 offset-md-1 col-sm-11 offset-sm-1 col-11 offset-1">
    <div class="main-cartFull-list">
        <div class="wrap-main-cartFull-list-item">
            <div class="main-cartFull-list-item d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column col-xl-12 justify-content-between">
         <div class="main-cartFull-list-item__img  col-xl-6 col-lg-6 col-md-6 col-sm-8 col-8 d-flex justify-content-center align-items-center">
            <img src="/upload/images/products/<?php echo $product['photo']; ?>">
         </div>
         <div class="lh-base lh-sm main-cartFull-list-item__info col-xl-5 col-lg-5 col-md-5 d-flex flex-column justify-content-center">
            <div class="main-cartFull-list-item__info-name fs-3 fontSans brownDark"> <?php echo $product['name'];?></div>
            <div class="fs-4 fontSans brownSweet"> <?php echo $product['weight'];?> грамм</div>
             <div class="fs-4  fontSans brownSweet">Количество: <?php echo $productsInCart[$product['id']];?></div>
             <div class="fs-4  fontSans brownSweet"><?php echo $product['price'];?>₽</div>
<div class="main-cartFull-list-item__info-deleting d-flex justify-content-between align-items-center py-xl-4 py-lg-4 py-md-3 py-sm-1 py-1">
    <div class="fs-5 burgundyLight"><a href="/cart/delete/<?php echo $product['id'];?>">удалить</a></div></div></form>
        </div>
        </div><div class="py-xl-3 py-lg-3 py-md-3 py-sm-2 py-1"><hr class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 offset-xl-1"></div></div>
</div>
</div><?php endforeach; ?>
<div class="d-flex justify-content-center">
<div class="main-cartFull-content-end col-xl-6 d-flex flex-column">
<div class="main-cartFull-content-end__amount d-flex justify-content-between"><div class="fs-3  fontTahoma letter-space brownLight title_padding">Количество товаров</div><div class="fs-3 fontTahoma letter-space brownDark fw-bold title_padding"><?php echo $totalQuantity; ?></div></div>    
<div class="main-cartFull-content-end__amount d-flex justify-content-between">
<div class="fs-3 fontTahoma letter-space brownLight title_padding">К оплате</div>
<div class="fs-3 fontTahoma letter-space brownDark fw-bold title_padding"><?php echo $totalPrice;?>₽</div></div>
<div class="content-form__data d-flex align-items-center justify-content-end content-form__data_padding">
   <div class="col-xl-7 col-lg-5 col-md-4 col-sm-5 col-8 d-flex justify-content-end">
<button class="content-order-end__click__btn btn btn-success fs-3 col-xl-10" type="button"><a href="/cart/checkout">Оформить заказ</a></button></div></div></div></div><?php else: ?>
     <div class="content-empty">
        <div class="col-xl-11 offset-xl-1 col-lg-11 offset-lg-1 col-md-11 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1">
            <div class="col-xl-10">
                <div class="col-xl-4 pt-5 fs-2 brownDark fontTahoma letter-space">Корзина пуста</div></div>
            <div class="letter-space col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-row flex-column align-items-center py-xl-5 py-lg-5 py-md-4 py-sm-3 py-3 lh-xl-1 lh-lg-1 lh-md-1 lh-sm-sm lh-sm">
                <div class="d-flex col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 fs-3 fontTahoma"><a href="/catalog" class="brownLight">Перейти в каталог</a></div>
            <div class="d-flex col-xl-8 col-lg-8 col-md-6 col-sm-6 col-6 flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="px-xl-4 px-lg-4 px-md-0 px-sm-0 px-0 d-flex"><a href="/category/<?php echo $categoryItem['id'];?>" class="darkBlue fontSans fs-3"><?php echo $categoryItem['name_category'];?></a>
                </div>
            <?php endforeach; ?>
            </div> 
            </div>
        </div>
</div>       
      <div class="main_cart">
   <div class="content-empty-slider__title brownDark fs-3 fontTahoma letter-space d-flex justify-content-center">Рекомендуем</div>
   <div class="wrap-navigation_cart d-flex justify-content-center">
   <div class="navigation_cart d-flex justify-content-between">
   <div class="arrow_cart prev-slide_cart navy-phone"><img src="/template/images/arrow1.png"></div>
   <div class="arrow_cart next-slide_cart navy-phone"><img src="/template/images/arrow.png"></div></div></div>
   <div class="slider-cart"><div class="slide-list">
         <div class="slide-wrap_cart">
            <?php foreach ($productsBest as $product): ?>
             <div class="slide-item_cart d-flex flex-column align-items-center">
               <div class="slide-img"><a href="/product/view/<?php echo $product['id'];?>"><img src="/upload/images/products/<?php echo $product['new_picture'];?>" alt="" /></a></div>
              <div class="slide-item__value fs-1 burgundyLight"><?php echo $product['price'];?><span class="rubl">₽</span></div>
               <div class="slide-item__slogan fs-4_sm fontTahoma letter-space <?php echo $product['style'];?>"><?php echo $product['value'];?></div>
               <div class="slide-item__name_sm brownDark size29px_sm text-center cart-order__name_padding"><a href="/product/view/<?php echo $product['id'];?>" class="brownDark brownDark_a"><?php echo $product['name'];?></a></div>
               <div class="cart-order__name_padding"><div class="slide-item__button text-center"><a class="white fontTahoma size29px_sm letter-space" href="/cart/add/<?php echo $product['id']; ?>" data-id="<?php echo $product['id'];?>">В корзину</a></div></div>
            </div><?php endforeach;?> 
           </div>
<div class="clear"></div>
</div></div> </div><?php endif; ?></div>
</div>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>