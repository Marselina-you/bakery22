<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
    <?php include ROOT . '/views/layouts/cart-navigation.php';?>
    <section class="cart-checkout">
      <div class="container">
        <div class="cart-checkout__title">
          <h2 class="cart-checkout__subtitle subtitle">Выбрано товаров <span class="cart-checkout__span">
              <?php echo $totalQuantity; ?>,</span> на сумму <span
              class="cart-checkout__span"><?php echo $totalPrice; ?> ₽</span></h2>
        </div>
        <div class="cart-products__blok">
          <ul class="cart-products__list list-reset grid">
            <?php foreach ($products as $product): ?>
            <li class="cart-products__item">
              <div class="cart-products__image"><img src="/upload/images/products/<?php echo $product['photo']; ?>" alt="product"></div>
              <div class="cart-products__name mini-title"><?php echo $product['name']; ?></div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php if (isset($errors) && is_array($errors)): ?>
        <ul><?php foreach ($errors as $error): ?><li> - <?php echo $error; ?></li>
          <?php endforeach; ?></ul><?php endif; ?>
        <h2 class="cart__subtitle__subtitle">Для оформления заказа заполните форму</h2>
        <div class="grid">
          <form action="#" method="post" class="main-form">
            <label class="main-form__label main-form__label--title">
              <span class="main-form__caption">Ваше имя*</span>
              <input type="text" name="userName" value="<?php echo $userName; ?>" class="main-form__input">
            </label>
            <label class="main-form__label main-form__label--title">
              <span class="main-form__caption">Ваш Телефон*</span>
              <input type="text" name="userPhone" value="<?php echo $userPhone; ?>" class="main-form__input">
            </label>
            <label class="main-form__label">
              <span class="main-form__caption">Комментарий</span>
              <textarea type="text" name="userComment" class="main-form__textarea"></textarea>
            </label>
            <div class="main-form__send">
              <input type="submit" name="submit" value="Сохранить" class="btn btn--primary btn-reset">
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?>