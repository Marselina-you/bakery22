<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
    <?php include ROOT . '/views/layouts/cart-navigation.php';?>
    <section class="result">
  <div class="container">
    <h2 class="cart__subtitle">Заказ создан</h2>
    <div class="checkout-page__images grid">
    <?php foreach ($products as $product): ?>
      <ul class="checkout-page__list list-reset">
        <li class="checkout-page__item">
          <img src="/upload/images/products/<?php echo $product['photo']; ?>" alt="order">
        </li>
        <li class="checkout-page__item">
         <a href="" class="checkout-page__link"><?php echo $product['name']; ?></a>(<?php echo $productsQuantity[$product['id']]; ?>)</a>
        </li>
      </ul>
      <?php endforeach; ?>
     </div>
     <div class="result__link">
      <a href="#" class="btn btn-reset btn--primary">Вернуться к покупкам</a>
     </div>

  </div>
</section>
     
    </main>
    </div>


<?php include ROOT . '/views/layouts/footer.html'; ?>