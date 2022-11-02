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
               <span class="slide-item__name size22px text-center"><a href="/product/view/<?php echo $product['id'];?>" class="brownDark brownDark_a"><?php echo $product['name'];?></a></span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size20px letter-space" href="/cart/add/<?php echo $product['id']; ?>" data-id="<?php echo $product['id'];?>">В корзину</a></div>
            </div><?php endforeach;?> 
           </div>
<div class="clear"></div>
</div></div>
</div></div>