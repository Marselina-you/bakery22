<div class="header-main col-xl-7 offset-xl-5 col-lg-6 offset-lg-6 col-md-8 offset-md-4 col-sm-10 offset-sm-1 col-10 offset-1">  
<div class="pt-2 header d-flex justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-sm-center justify-content-between">
     
       
            <div class="icons col-xl-8 col-lg-10 col-md-10 col-sm-8 col-12 d-flex align-items-center justify-content-between">
                 <div class="p-2 d-flex  flex-column align-items-center">
                    <img src="/template/images/icons/houm.png" alt="">
                     <div class="lh-base brownDark fontSans fs-6"><a href="/">Главная</a></div>
                </div>
                <div class="p-2 d-flex  flex-column align-items-center">
                    <img src="/template/images/icons/catalog.png" alt="">
                     <div class="main-start-name__item2 lh-base brownDark fontSans fs-6"><a href="/catalog">Каталог</a></div>
                </div>
                 <div class="p-2 d-flex  flex-column align-items-center">
                    <a href="/cart"><img src="/template/images/icons/basket.png" alt=""></a>
                     <div class="lh-base brownDark fontSans fs-6"><a href="/cart/">Корзинa</a><span id="cart-count"><?php if(Cart::countItems() > 0): echo'('; echo Cart::countItems();  echo ')';?><?php endif; ?></span></div>
                </div>
               <div class="p-2 d-flex  flex-column align-items-center"><img src="/template/images/icons/order.png" alt="">
                     <div class="main-start-name__item2 lh-base brownDark fontSans fs-6"><a href="/user/order/">Заказы</a></div>
                </div>
                 <div class="p-2 d-flex  flex-column align-items-center">
                    <img src="/template/images/icons/mail.png" alt="">
                     <div class="main-start-name__item2 lh-base brownDark fontSans fs-6"><a href=""
                    >Написать</a></div>
                </div>
                 <div class="p-2 d-flex flex-column align-items-center">
                   <?php if (User::isGuest()): ?>
                    <a href="/user/login/"
                    ><img src="/template/images/icons/account.png" alt=""></a>
                     <div class="main-start-name__item2 lh-base brownDark fontSans fs-6"><a href="/user/login/"
                    >Войти</a></div>
                      <?php else: ?>
               <a href="/user/login/"
                    ><img src="/template/images/icons/account.png" alt=""></a>
                     <div class="main-start-name__item2 lh-base brownDark fontSans fs-6"><a href="/cabinet/">
             <?php echo $user['name'];?></a></div>
             
               <?php endif; ?>    
                </div>
          
                 
        </div>
            
 </div>
 
</div>