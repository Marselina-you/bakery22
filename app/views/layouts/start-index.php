<div class="main-header-logo header-logo-menu col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1 d-flex justify-content-between align-items-center">
      <div class="header-logo-menu__logo"><img src="/template/images/logo.png" alt=""></div>

      <div class="header-logo-menu__menu icon-menu"><img src="/template/images/menu.png" alt=""></div>
     
</div>
<div class="main-start-title col-xl-6 offset-xl-1 col-lg-6 offset-lg-1  col-md-6 offset-md-1 col-sm-6 offset-sm-6 col-6 offset-6">
   <div class="main-start-name wrap-main-orderEnd-content-amount">
   <div class="main-start-name__item1 bottom_padding10 fontTahoma size45px brownDark">ЗА БАТОНОМ </div>
<div class="main-start-name__item2 bottom_padding10 fontTahoma size45px brownDark">С ПЫЛУ С ЖАРУ</div>
<div class="main-start-name__item3 size45px fontTahoma brownDark">ИЗ РУССКОЙ ПЕЧИ</div></div>
<div class="main-start-name__item4 fontTahoma size26px brownDark">мини-пекарня</div>
</div>
<div class="main-start-slider_sm">
   <div class="main-slider_sm col-12">
      <div class="wrap-navigation d-flex justify-content-center">
         <div class="navigation d-flex justify-content-between">
  <div class="arrow_sm prev-photo navy-phone"><img src="/template/images/icons/arrow1.png"></div>
  <div class="arrow_sm next-photo navy-phone"><img src="/template/images/icons/arrow.png"></div></div></div>
  <div class="slider_sm d-flex">
     <div class="slide-list_sm">
         <div class="slide_sm">
            <?php foreach ($productsBest as $product): ?>
             <div class="slide-item_sm d-flex flex-column align-items-center">
               <div class="slide-img_sm wrap_img_sm"><a href="/product/view/<?php echo $product['id'];?>"><img src="/upload/images/products/<?php echo $product['new_picture'];?>" alt="" /></a></div>
              <div class="slide-item__value size45px burgundyLight"><?php echo $product['price'];?><span class="rubl">₽</span></div>
               <div class="slide-item__slogan size20px fontTahoma letter-space <?php echo $product['style'];?>"><?php echo $product['value'];?></div>
               <span class="slide-title size22px text-center"><a href="/product/view/<?php echo $product['id'];?>" class="brownDark brownDark_a"><?php echo $product['name'];?></a></span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size20px letter-space" href="/cart/add/<?php echo $product['id']; ?>" data-id="<?php echo $product['id'];?>">В корзину</a></div>
            </div><?php endforeach;?> 
           </div>
<div class="clear"></div>
</div></div>
</div></div>
<div class="main-start-catalog_sm">
   <div class="main-start-catalog_sm_button btn text-center slide-item__button"><a href="/catalog" class="white fontTahoma size22px letter-space">
   начать</br> покупки</a>
   </div>
</div>
</div>
 