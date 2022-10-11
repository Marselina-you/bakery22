<div class="wrap-footer-block col-lg-12">
            <div class="footer-block  d-flex justify-content-between align-items-center">
            <div class="footer-block1">
                <div class="footer-block1_content">Alferova.studio.com</div>
            </div>
            
     <div class ="header-up-footer">
        
            <div class="icons d-flex align-items-center justify-content-between bottom_padding10">
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                   
                     <a href="/"> <img src="/template/images/icons/houm.png" alt=""></a>
                </div>
                <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                    <a href="/catalog"><img src="/template/images/icons/catalog.png" alt=""></a>
                     
                </div>
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                   
                   <a href="/cart/"> <img src="/template/images/icons/basket.png" alt=""><span id="cart-count"><?php if(Cart::countItems() > 0): echo'('; echo Cart::countItems();  echo ')';?><?php endif; ?></span></a>
                </div>
               <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                                         <a href="/user/order/"><img src="/template/images/icons/order.png" alt=""></a>

                </div>
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                     <a href="/user/login/"
                    ><img src="/template/images/icons/mail.png" alt="">
                    </a>
                </div>
                 <div class="icons__item icons__item_padding d-flex  flex-column align-items-center">
                   <?php if (User::isGuest()): ?>
                    <a href="/user/login/"
                    ><img src="/template/images/icons/account.png" alt=""></a>
                     
                      <?php else: ?>
               <a href="/cabinet/"
                    ><img src="/template/images/icons/account.png" alt=""></a>
                     
             
               <?php endif; ?>    
                </div>
            </div>
                 <div class="text d-flex justify-content-between">
                  </div>
        </div>
            
 
            <div class="footer-block2 d-flex align-items-center">
                <div class="icon"><img src="/template/images/icons/face.png"></div>
                <div class="icon"><img src="/template/images/icons/vk.png"></div>
                <div class="icon"><img src="/template/images/icons/twit.png"></div>
                <div class="icon"><img src="/template/images/icons/what.png"></div>
            </div>
        </div>
        </div>
        <div class="wrap-menu d-flex flex-column menu">
            <div class="icon-close col-lg-2 offset-lg-8 col-md-1 col-sm-2 col-xs-1 offset-xs-1">
                       <img src="/template/images/icons/close.gif">
                    </div>
            <ul class="menu_style col-lg-12 d-flex flex-column align-items-center">
                <li class="size35px fontSans whitecolor text-center"> <a  href="/">главная</a></li>
                <li class="size35px fontSans whitecolor text-center"> <a href="">события</a></li>
                <li class="size35px fontSans whitecolor text-center"> <a href="/catalog">продукты</a></li>
            <ul class="submenu">
                <li class="fontSans whitecolor text-center"><a class="" href="jg_bread.php">черный хлеб</a></li>
                <li class="fontSans whitecolor text-center"><a href="jh_cake.php">пирожные</a></li>
                <li class="fontSans whitecolor text-center"><a href="ji_loaf.php">белая выпечка</a></li>
            </ul>
               </li>
               <li class="size35px fontSans whitecolor text-center"> <a href="/about">о нас</a></li>
              
                <li class="size35px fontSans whitecolor text-center batono"><a href="/cart">
               корзина<span id="cart-count"><?php if(Cart::countItems() > 0): echo'('; echo Cart::countItems();  echo ')';?><?php endif; ?></span></a></li>
               
                
              <?php if (User::isGuest()): ?>
                <li class="size35px fontSans whitecolor text-center"><a href="/user/login/"
                    class="baton">
               вход</a></li>
                <?php else: ?>
               <li class="size35px fontSans whitecolor text-center"> <a href="/cabinet/">
              Аккаунт<?php  echo '(';  echo $user['name'];  echo ')'; ?></a></li>
              <li class="size35px fontSans whitecolor text-center"> <a href="/user/logout/">
             Выход</a></li>
               <?php endif; ?>    
          </li>

          
            </ul>
        </div>
        
      <script src="/js/jquery-3.0.0.min.js"></script>
      <script src="/js/app.min.js"></script>
     
      <script src="/js/menu.js"></script>
       <script src="/js/slider_cart1.js"></script>
      <script src="/js/slider_sm.js"></script>
      <script src="/js/action_slider.js"></script>
      <script type="text/javascript">
  
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
    


</script>
        </body>
 </html>