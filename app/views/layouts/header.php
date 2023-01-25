<header class="header">
  <div class="container">
    <nav class="nav header__nav" title="">
      <ul class="nav__list header__list list-reset">
        <li class="nav__item"><a href="/" class="nav__link">
        <svg>
              <use xlink:href="/template/img/sprite.svg#basket"></use>
            </svg>
            <span class="nav__span">Главная</span>
          </a></li>
        <li class="nav__item"><a href="/catalog" class="nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.23 16.93">
              <ellipse cx="14.29" cy="14.71" rx="2.18" ry="2.21" />
              <path
                d="M19.86,0H1.37C-.64,0,.16,2.11.16,2.11L2.84,10.2A1.46,1.46,0,0,0,4.2,11.41H17a1.45,1.45,0,0,0,1.35-1.21l2.69-8.09S21.87,0,19.86,0ZM16.54,8.8H4.68L4,6.62H17.18Zm1.25-4.25H3.44L2.76,2.22H18.47Z" />
              <path d="M6.93,12.5a2.22,2.22,0,1,0,2.18,2.21A2.2,2.2,0,0,0,6.93,12.5Z" /></svg>
            <span class="nav__span">Каталог</span></a></li>
        <li class="nav__item"><a href="/cart/" class="nav__link">
        <svg>
    <use xlink:href="/template/img/icons/basket.svg#basket"></use>
            </svg>
            <span class="nav__span"
              id="cart-count"><?php if(Cart::countItems() > 0): echo'('; echo Cart::countItems();  echo ')';?><?php endif; ?>Корзина</span></a>
        </li>
        <li class="nav__item"><a href="/user/order/" class="nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.5 21.25">
              <defs></defs>
              <rect class="" y="6" width="20.5" height="15.25" rx="1.16" />
              <path class=""
                d="M4.91,5.5h1V2.66A.16.16,0,0,1,6,2.5h8.42a.16.16,0,0,1,.16.16V5.5h1a1.16,1.16,0,0,0,1.16-1.16V1.16A1.16,1.16,0,0,0,15.59,0H4.91A1.16,1.16,0,0,0,3.75,1.16V4.34A1.16,1.16,0,0,0,4.91,5.5Z" />
            </svg>
            <span class="nav__span">Заказы</span></a></li>
        <li class="nav__item"><a href="#" class="nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.99 47.46">
              <defs>
                <style></style>
              </defs>
              <path d="M63.09,2.19A5,5,0,0,0,59,0H5A5,5,0,0,0,.9,2.12l31.16,26Z" />
              <path d="M32.09,32.33,0,5.57V42.46a5,5,0,0,0,5,5H59a5,5,0,0,0,5-5V5.7Z" />>
            </svg>
            <span class="nav__span">Написать</span></a></li>
        <li class="nav__item">

          <?php if (User::isGuest()): ?>
          <a href="/user/login/" class="nav__link">
            <svg>
              <use xlink:href="/template/img/sprite.svg#account"></use>
            </svg>
            <span class="nav__span">Войти</span></a>
           
          <?php else: ?> <a href="/cabinet/" class="nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.5 48.19">
             <path
                d="M23.75,0A24,24,0,0,0,0,24.1,24,24,0,0,0,23.75,48.19,24,24,0,0,0,47.5,24.1,24,24,0,0,0,23.75,0Zm0,44.36A20.13,20.13,0,0,1,3.8,24.1a20.13,20.13,0,0,1,20-20.27,20.13,20.13,0,0,1,20,20.27A20.13,20.13,0,0,1,23.75,44.36Z" />
              <path
                d="M25.23,28.63a9.16,9.16,0,1,0-3.27,0c-3.51.5-7,2.77-11.27,6.76A2.38,2.38,0,0,0,12,39.43a95.58,95.58,0,0,0,23.48,0,2.3,2.3,0,0,0,2-2.31,2.33,2.33,0,0,0-.77-1.74C32.32,31.42,28.69,29.2,25.23,28.63Z" />
            </svg>
            <span class="nav__span"><?php echo $user['name'];?></span></a>
            <a href="/user/logout/">
                   Выход</a>
  </div>
  <?php endif; ?></li>
  </ul>
  </nav>
  </div>
</header>