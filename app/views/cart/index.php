<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT.'/views/layouts/logo.html';?>
    <?php include ROOT . '/views/layouts/cart-navigation.php';?>
    <?php if ($productsInCart): ?>
    <section class="cart-content">
      <div class="container">
        <h2 class="user-cabinet__title">Корзина</h2>
        <div class="cart-content__products">
          <?php foreach ($products as $product): ?>
          <article class="cart-content__article grid">
            <div class="cart-content-left">
              <div class="cart-content-left__image">
                <img src="/upload/images/products/<?php echo $product['photo']; ?>" alt="bread">
              </div>
            </div>
            <div class="cart-content-right">
              <h3 class="cart-content-right__name"><?php echo $product['name'];?></h3>
              <span class="cart-content-right__weight"><?php echo $product['weight'];?> грамм</span>
              <div class="cart-content-right__quant">Количество:
                <span><?php echo $productsInCart[$product['id']];?></span>
              </div>
              <div class="cart-content-right__value"><?php echo $product['price'];?>₽</div>
              <a href="/cart/delete/<?php echo $product['id'];?>" class="btn btn-reset btn--danger">удалить</a>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
        <div class="cart-content-result">
          <div class="cart-content-result__content">
            <div class="cart-content-result__quant">Количество товаров
              <strong class="cart-content-result__value"><?php echo $totalQuantity; ?></strong>
            </div>
            <div class="cart-content-result__summ">К оплате
              <strong class="cart-content-result__value"><?php echo $totalPrice;?>₽</strong>
            </div>
            <a href="/cart/checkout" class="btn btn-reset btn--success">Оформить заказ</a>
          </div>
        </div>
      </div>
    </section>
    <?php else: ?>
    <section class="cart-empty">
      <div class="container cart-empty__container">
        <h2 class="message cart-empty__title">Ваша корзина пуста</h2>
        <h3 class="cart-empty__subtitle subtitle centered">Рекомендуем</h3>
      </div>
      <div class="cart-slider container-fluid">
        <div class="swiper cartSlider">
          <div class="swiper-wrapper">
            <?php foreach ($productsBest as $product): ?>
            <div class="swiper-slide cart-slider__slide">
              <div class="cart-slider__image">
                <a href="/product/view/<?php echo $product['id'];?>"><img src="/upload/images/products/<?php echo $product['new_picture'];?>" alt="product"></a>
              </div>
              <div class="cart-slider__price"><?php echo $product['price'];?>₽</div>
              <span class="cart-slider__status <?php echo $product['style'];?>"><?php echo $product['value'];?></span>
              <h3 class=" cart-slider__title"><a href="#"><a href="#"><?php echo $product['name'];?></a></a></h3>
              <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-reset btn--primary"
                data-id="<?php echo $product['id'];?>">В корзину</a>
            </div>
            <?php endforeach;?>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <?php endif; ?></div>
</div>
</div>
</div>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>