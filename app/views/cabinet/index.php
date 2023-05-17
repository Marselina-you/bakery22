<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
    <section class="user-cabinet">
      <div class="container">
        <h2 class="user-cabinet__title">Личный кабинет <?php echo $user['name'];?></h2>
        <nav class="menu-cabinet-nav" title="menu-cabinet">
          <ul class="nav__list list-reset">
            <li class="nav__item"><a href="#" class="nav__link">Доставки</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Покупки</a></li>
            <li class="nav__item"><a href="/cart" class="nav__link">
            <span class="nav__span" id="cart-count"><?php if(Cart::countItems() > 0): echo'('; echo Cart::countItems();  echo ')';?><?php endif; ?>Корзина</span>
            </a></li>
            <li class="nav__item"><a href="/cabinet/edit" class="nav__link">Мои данные</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="delivery">
      <div class="container">
      <h2 class="delivery__title subtitle centered">Доставки</h2>
      <?php if ($ordersList): ?>
        <div class="dcart-products__blok">
          <ul class="cart-products__list list-reset grid">
            <?php foreach ($ordersList as $order): ?>
            <li class="cart-products__item">
              <h3 class="cart-products__title message">Заказ №<?php echo $order['id']; ?></h3>
              <div class="cart-products__wrap">
              <span class="cart-products__status"><?php echo $order['status']; ?></span>
              </div>
              <div class="cart-products__date cart-products__date--wait">Ожидается 23 апреля</div>
         <?php foreach ($products as $order): ?>
               <h4 class="cart-products__name"><?php echo $order['name']; ?></h4>
                  <div class="cart-products__image">
                    <img src="/upload/images/products/<?php echo $order['photo']; ?>" alt="">
                  </div>
               
<?php endforeach; ?>
              
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php else: ?>
          <h2 class="centered">Ближайших доставок нет</h2>
        <?php endif; ?>
      </div>
    </section>
    <section class="buy">
      <div class="container">
      <h2 class="buy__title subtitle centered">Покупки</h2>
      <?php if ($ordersListOld): ?>
        <div class="cart-products__blok">
          <ul class="cart-products__list list-reset grid">
            <?php foreach ($ordersListOld as $order): ?>
            <li class="cart-products__item">
              <h3 class="cart-products__order">Заказ №<?php echo $order['id']; ?></h3>
              <div class="cart-products__wrap">
              <span class="cart-products__status"><?php echo $order['status']; ?>
            </span>
          </div>
              
                <?php foreach ($productsOld as $order): ?>
                
                  <h4 class="cart-products__name"> <?php echo $order['name']; ?></h4>
                  <div class="cart-products__image">
                    <img src="/upload/images/products/<?php echo $order['photo']; ?>" alt="">
                  </div>
                
                <?php endforeach; ?>
              
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php else: ?>
        <h2 class="centered">Вы еще не совершали покупок</h2>
        <?php endif; ?>
      </div>
    </section>
  </main>
</div>





<?php include ROOT . '/views/layouts/footer.html'; ?>