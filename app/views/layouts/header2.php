<div class="header-main">  
<div class="header d-flex justify-content-end">
     <div class ="header-up header-up_padding">
        <div class ="header-row1 col-xl-4 col-lg-5 col-md-6 col-sm-12 d-flex flex-column">
            <div class="icons d-flex align-items-center justify-content-between">
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                    <img src="/template/images/houm2.png" alt="">
                     <div class="text__item brownDark fontSans size16px"><a href="/">Главная</a></div>
                </div>
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                    <img src="/template/images/basket.png" alt="">
                     <div class="text__item brownDark fontSans size16px"><a href="/cart">Корзинa<span id="cart-count"><?php echo '('; echo Cart::countItems();  echo ')';?></span></a></div>
                </div>
               
                
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                    <img src="/template/images/order.png" alt="">
                     <div class="text__item brownDark fontSans size16px">Заказы</div>
                </div>
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                    <img src="/template/images/mail.png" alt="">
                     <div class="text__item brownDark fontSans size16px">Написать</div>
                </div>
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                   <?php if (User::isGuest()): ?>
                    <a href="/user/login/"
                    ><img src="/template/images/account.png" alt=""></a>
                     <div class="text__item brownDark fontSans size16px"><a href="/user/login/"
                    >Войти</a></div>
                      <?php else: ?>
               <a href="/user/login/"
                    ><img src="/template/images/account.png" alt=""></a>
                     <div class="text__item brownDark fontSans size16px"><a href="/cabinet/">
             <?php echo $user['name'];?></a></div>
             
               <?php endif; ?>    
                </div>
            </div>
                 <div class="text d-flex justify-content-between">
                      
                     
                     
                     
                 </div>
        </div></div>
            
 </div>
 
</div>