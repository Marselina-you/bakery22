<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
//include ROOT . '/views/layouts/header3.php';?>
<div class="wrap-content">
    <div class="main">

       <?php if ($productsInCart): ?>
        <?php foreach ($products as $product): ?>
<div class="wrap-main-cartFull-content col-xl-10 offset-xl-1">
    <div class="main-cartFull-list">
        <div class="wrap-main-cartFull-list-item">
            <div class="main-cartFull-list-item d-flex col-xl-12 justify-content-between">
         <div class="main-cartFull-list-item__img  col-xl-4 d-flex justify-content-center align-items-center">
            <img src="/template/images/page2.png">
         </div>
         <div class="main-cartFull-list-item__info col-xl-4 d-flex flex-column justify-content-center">
            <div class="main-cartFull-list-item__info-name size29px fontSans brownDark"> <?php echo $product['name'];?></div>
            <div class="main-cartFull-list-item__info-weight size24px fontSans brownSweet main-cartFull-list-item__info-weight_padding"> <?php echo $product['weight'];?> грамм</div>
             <div class="main-cartFull-list-item__info-weight size24px fontSans brownSweet main-cartFull-list-item__info-weight_padding">Количество: <?php echo $productsInCart[$product['id']];?></div>
           

<div class="main-cartFull-list-item__info-deleting d-flex justify-content-between align-items-center main-cartFull-list-item__info-delete_padding">
  
         
             
             <div class="size22px burgundyLight"><a href="/cart/delete/<?php echo $product['id'];?>">удалить</a></div></div></form>
         </div>
         <div class="content-order-list_item__value  col-xl-4 size29px font-weight-bold d-flex justify-content-center align-items-center"><?php echo $product['price'];?>₽</div>
      </div><div class="hr-basket"><hr class="col-xl-10 offset-xl-1"></div></div>


 



</div>

</div>
 <?php endforeach; ?>
<div class="main-cartFull-content-end col-xl-6 offset-xl-1">
<div class="main-cartFull-content-end__amount d-flex justify-content-between"><div class="size29px  fontTahoma letter-space brownLight title_padding">Количество товаров</div><div class="size29px fontTahoma letter-space brownDark font-weight-bold title_padding"><?php echo $totalQuantity; ?></div></div>    
<div class="main-cartFull-content-end__amount d-flex justify-content-between">
<div class="size29px  fontTahoma letter-space brownLight title_padding">К оплате</div>
<div class="size29px fontTahoma letter-space brownDark font-weight-bold title_padding"><?php echo $totalPrice;?>₽</div></div>

<div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-6 d-flex justify-content-end">
<button class="content-order-end__click__btn btn btn-success size29px col-xl-9" type="button">Оформить заказ</button></div></div>
 <?php else: ?>
     <div class="content-empty">
         <div class="content-empty-text col-xl-6 offset-xl-1">
            <div class="title size35px brownDark fontTahoma letter-space">Корзина пуста</div>
            <div class="undertitle size29px fontTahoma letter-space"><a href="">Перейти в каталог</a></div>
         </div>
         
      </div>
      <div class="main">
   <div class="content-empty-slider__title brownDark size29px fontTahoma letter-space d-flex justify-content-center">Рекомендуем</div>
   <div class="arrow-navy d-flex justify-content-between">
   <div class="d-flex col-xl-1 justify-content-center"><div class="arrow  prev-slide navy-phone"><img src="/template/images/arrow1.png"></div></div>
   <div class="col-xl-1 d-flex justify-content-center"><div class="arrow next-slide navy-phone"><img src="/template/images/arrow.png"></div></div></div>
   <div class="slider d-flex col-xl-10 offset-xl-1 col-md-10 offset-md-1  col-sm-10 offset-sm-1  col-xs-10 offset-xs-1 ">
     
      <div class="slide-list col-xl-12 col-md-12 col-sm-12">
         <div class="slide-wrap">
             <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img"><img  src="/template/images/page.png" alt="" /></div>
              <div class="slide-item__value size45px burgundyLight">300 P</div>
               <div class="slide-item__slogan orange size24px fontTahoma letter-space myBlue">Выгодно</div>
               <span class="slide-title brownDark size29px text-center">Ассорти из пирожных</span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="">В корзину</a></div>
            </div>
            <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img"><img  src="/template/images/page1.png" alt="" /></div>
              <div class="slide-item__value size45px burgundyLight">300 P</div>
               <div class="slide-item__slogan orange size24px fontTahoma letter-space">Бестселлер</div>
               <span class="d-flex slide-title brownDark size29px align-items-center">Уже в продаже</span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="">В корзину</a></div>
            </div>
            <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img"><img  src="/template/images/page2.png" alt="" /></div>
               <div class="slide-item__value size45px burgundyLight">300 P</div>
               <div class="slide-item__slogan orange size24px fontTahoma letter-space">Бестселлер</div>
               <span class="d-flex slide-title brownDark size29px align-items-center">Свежие эклеры</span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="">В корзину</a></div>
            </div>
            <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img"><img  src="/template/images/page3.png" alt="" /></div>
               <div class="slide-item__value size45px burgundyLight">300 P</div>
               <div class="slide-item__slogan orange size24px fontTahoma letter-space myGreen">Новинка!</div>
               <span class="slide-title brownDark size29px">Хлеб с гречихой</span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="">В корзину</a></div>
            </div>
            <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img"><img  src="/template/images/page4.png" alt="" /></div>
               <div class="slide-item__value size45px burgundyLight">300 P</div>
               <div class="slide-item__slogan orange size24px fontTahoma letter-space">Бестселлер</div>
               <span class="slide-title brownDark size29px text-center">Шоколадные маффины</span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="">В корзину</a></div>
               </div>
             <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img"><img  src="/template/images/page5.png" alt="" /></div>
              <div class="slide-item__value size45px burgundyLight">300 P</div>
               <div class="slide-item__slogan orange size24px fontTahoma letter-space">Бестселлер</div>
               <span class="d-flex slide-title brownDark size29px align-items-center">Плетенка</span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="">В корзину</a></div>
            </div>
             <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img"><img  src="/template/images/page6.png" alt="" /></div>
              <div class="slide-item__value size45px burgundyLight">300 P</div>
               <div class="slide-item__slogan orange size24px fontTahoma letter-space myGreen">Новинка!</div>
               <span class="d-flex slide-title brownDark size29px align-items-center">Баранки к чаю</span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="">В корзину</a></div>
            </div>
             <div class="slide-item d-flex flex-column align-items-center">
               <div class="slide-img"><img  src="/template/images/page7.png" alt="" /></div>
              <div class="slide-item__value size45px burgundyLight">300 P</div>
               <div class="slide-item__slogan orange size24px fontTahoma letter-space myBlue">Выгодно</div>
               <span class="d-flex slide-title brownDark size29px align-items-center">Песочные полоски</span>
               <div class="slide-item__button text-center"><a class="white fontTahoma size29px letter-space" href="">В корзину</a></div>
            </div>
      </div>
<div class="clear"></div>
</div></div> </div>
                       <?php endif; ?>
</div>

</div>
</div>

<?php include ROOT . '/views/layouts/footer2.php'; ?>