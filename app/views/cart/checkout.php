<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
    <?php include ROOT . '/views/layouts/cart-navigation.php';?>
    <section class="checkout-page">
  <div class="container">
    <div class="checkout-page__title">
      <h2 class="cart__subtitle__subtitle">Выбрано товаров <span class="checkout-page__span"> <?php echo $totalQuantity; ?>,</span> на сумму  <span  class="checkout-page__span"><?php echo $totalPrice; ?> ₽</span></h2>
    </div>

   <div class="checkout-page__images grid">
   <?php foreach ($products as $product): ?>
<ul class="checkout-page__list list-reset">
  <li class="checkout-page__item">
    <img src="/upload/images/products/<?php echo $product['photo']; ?>" alt="order">
  </li>
  <li class="checkout-page__item">
   <a href="" class="checkout-page__link"><?php echo $product['name']; ?></a>
  </li>
</ul>
<?php endforeach; ?>
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
          <textarea type="text"  name="userComment" class="main-form__textarea"></textarea>
        </label>
        <div class="main-form__send">
          <input type="submit" name="submit" value="Сохранить" class="btn btn--primary btn-reset">
        </div>
      </form>
   </div>
</div>
</section>
<?php include ROOT . '/views/layouts/footer.html'; ?>