<div class="wrap-footer-block col-lg-12">
            <div class="footer-block col-lg-12 d-flex justify-content-between">
            <div class="footer-block1">
                <div class="footer-block1_content">Alferova.studio.com</div>
            </div>
            <div class="footer-block2 d-flex align-items-center">
                <div class="icon"><img src="/template/images/face.png"></div>
                <div class="icon"><img src="/template/images/vk.png"></div>
                <div class="icon"><img src="/template/images/twit.png"></div>
                <div class="icon"><img src="/template/images/what.png"></div>
            </div>
        </div>
        </div>
        <div class="wrap-footer-block2 col-lg-12">
        </div>
        <div class="wrap-menu d-flex flex-column">
            <div class="icon-close col-lg-2 offset-lg-8 col-md-1 col-sm-2 col-xs-1 offset-xs-1">
                       <img src="/images/close.png">
                    </div>
            <ul class="menu col-lg-12 d-flex flex-column align-items-center">
                <li class="size35px fontSans whitecolor text-center"> <a  href="/">глаSная</a></li>
                <li class="size35px fontSans whitecolor text-center"> <a href="">события</a></li>
                <li class="size35px fontSans whitecolor text-center"> <a href="/catalog">продукты</a></li>
            <ul class="submenu">
                <li class="fontSans whitecolor text-center"><a class="" href="jg_bread.php">черный хлеб</a></li>
                <li class="fontSans whitecolor text-center"><a href="jh_cake.php">пирожные</a></li>
                <li class="fontSans whitecolor text-center"><a href="ji_loaf.php">белая выпечка</a></li>
            </ul>
               </li>
               <li class="size35px fontSans whitecolor text-center"> <a href="">о нас</a></li>
               <li class="size35px fontSans whitecolor text-center"> <a href="/user/register">
               регистрация</a></li>
                <li class="size35px fontSans whitecolor text-center batono"><a href="/cart">
               корзина(<span id="cart-count"></span><?php echo Cart::countItems();?>)</a></li>
               
                <?php if (User::isGuest()): ?>
             
                <li class="size35px fontSans whitecolor text-center"><a href="/user/login/"
                    class="baton">
               вход</a></li><?php else: ?>
               
               <li class="size35px fontSans whitecolor text-center"> <a href="/cabinet/">
              account</a></li>
              <li class="size35px fontSans whitecolor text-center"> <a href="/user/logout/">
              out</a></li>  <?php endif; ?> 
          </li>

          
            </ul>
        </div></div>
        <script src="/js/jquery-3.0.0.min.js"></script>
        <script src="/js/app.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

</body>
</html>