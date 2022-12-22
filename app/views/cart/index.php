<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
    <section class="cart-content">
  <div class="container cart-content__container">

    <?php if ($productsInCart): ?>
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

    <div class="cart-content__products">
    <?php foreach ($products as $product): ?>
      <article class="cart-content__article grid">
        <div class="cart-content-left">

          <div class="cart-content-left__image">
            <img src="/upload/images/products/<?php echo $product['photo']; ?>" alt="bread">
          </div>
          </div>
        <div class="cart-content-right">
          <h3 class="cart-content-right__name"><?php echo $product['name'];?></h3>
          <span class="cart-content-right__weight"><?php echo $product['weight'];?> грамм</span>
          <div class="cart-content-right__quant">Количество: <span><?php echo $productsInCart[$product['id']];?></span>
          </div>
          <div class="cart-content-right__value"><?php echo $product['price'];?>₽</div>
  <a href="/cart/delete/<?php echo $product['id'];?>" class="btn btn-reset btn--danger">удалить</a>
        </div>
      </article>
      <?php endforeach; ?>
     
    </div>
<div class="cart-content-result">
    <div class="cart-content-result__content">
      <div class="cart-content-result__quant">Количество товаров
        <strong class="cart-content-result__value"><?php echo $totalQuantity; ?></strong>
      </div>
      <div class="cart-content-result__summ">К оплате
        <strong class="cart-content-result__value"><?php echo $totalPrice;?>₽</strong>
      </div>
      <a href="/cart/checkout" class="btn btn-reset btn--success">Оформить заказ</a>
    </div>
  </div>
  </div>
</section>
   
       
<?php else: ?>
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
<?php include ROOT . '/views/layouts/footer.html'; ?>