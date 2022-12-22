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
            <span class="nav__span"
              id="cart-count"><?php if(Cart::countItems() > 0): echo'('; echo Cart::countItems();  echo ')';?><?php endif; ?>Корзина</span>
            </a></li>
            <li class="nav__item"><a href="#" class="nav__link">Мои данные</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="delivery">
      <div class="container">
        <h2 class="delivery__title centered">Доставки</h2>
        <div class="delivery-block">
          <ul class="delivery-block__list list-reset grid">
            <?php foreach ($ordersList as $order): ?>
            <li class="delivery-block__item">
              <h3 class="delivery-block__order">Заказ №<?php echo $order['id']; ?></h3>
              <span class="delivery-block__status"><?php echo $order['status']; ?></span>
              <div class="delivery-block__date">Ожидается 23 апреля</div>
              <article class="delivery-block__article">
                <?php foreach ($products as $order): ?>
                <div class="article__item">
                  <h4 class="delivery-block__title"><?php echo $order['name']; ?></h4>
                  <div class="delivery-block__image">
                    <img src="/upload/images/products/<?php echo $order['photo']; ?>" alt="">
                  </div>
                </div>
                <?php endforeach; ?>
              </article>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>
    <section class="buy">
      <div class="container">
        <h2 class="buy__title centered">Покупки</h2>
        <div class="buy-block">
          <ul class="buy-block__list list-reset grid">
            <?php foreach ($ordersListOld as $order): ?>
            <li class="buy-block__item">
              <h3 class="buy-block__order">Заказ №<?php echo $order['id']; ?></h3>
              <div class="buy-block__status"><?php echo $order['status']; ?></div>
              <article class="buy-block__article">
                <?php foreach ($productsOld as $order): ?>
                <div class="article__item">
                  <h4 class="buy-block__title"> <?php echo $order['name']; ?></h4>
                  <div class="buy-block__image">
                    <img src="/upload/images/products/<?php echo $order['photo']; ?>" alt="">
                  </div>
                </div>
                <?php endforeach; ?>
              </article>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>
  </main>
</div>





<?php include ROOT . '/views/layouts/footer.html'; ?>