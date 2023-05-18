<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header-admin.php';?>
  <main class="main-admin">
    <?php include ROOT . '/views/layouts/menu-admin.php';?>
    <section class="order-view">
      <div class="container-fluid">
        <h2 class="admin__subtitle">Просмотр заказа #<?php echo $id; ?></h2>
        <div class="order-view__block grid">
          <h3 class="order-view__subtitle">Информация о заказе</h3>
          <div class="order-view-names">
            <ul class="order-view-names__list list-reset">
              <li class="order-view__item">
                <div class="admin-order__caption">Id заказа:</div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__caption">Имя покупателя:</div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__caption">Телефон:</div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__caption">Дата оформления:</div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__caption">Статус:</div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__caption">Комментарий:</div>
              </li>
            </ul>
          </div>
          <div class="order-view-values">
            <ul class="order-view-values__list list-reset">
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo $order['id']; ?></div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo $order['user_name']; ?></div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo $order['user_phone']; ?></div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo $order['date']; ?></div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo Order::getStatusText($order['status']); ?></div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo $order['user_comment']; ?></div>
              </li>
            </ul>
          </div>
          <h3 class="order-view__subtitle">Товары в заказе</h3>
          <div class="order-view-names">
            <ul class="order-view-names__list list-reset">
              <li class="order-view__item">
                <div class="admin-order__caption">Артикул:</div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__caption">Название:</div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__caption">Сумма:</div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__caption">Количество:</div>
              </li>
            </ul>
          </div>
          <div class="order-view-values">
            <ul class="order-view-values__list list-reset">
              <?php foreach ($products as $product): ?>
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo $product['id']; ?></div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__value capitalize"><?php echo $product['name']; ?></div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo $product['price']; ?></div>
              </li>
              <li class="order-view__item">
                <div class="admin-order__value"><?php echo $productsQuantity[$product['id']]; ?></div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <ul class="order-view__links list-reset">
            <li class="order-view__link"><a href="/admin/order/update/<?php echo $order['id']; ?>"
                class="admin-order__btn admin-order__btn btn--success btn btn-reset">выполнить</a></li>
            <li class="order-view__link"><a href="/admin/order/update/<?php echo $order['id']; ?>"
                class="admin-order__btn admin-order__btn btn btn-reset btn--primary">изменить</a></li>
            <li class="order-view__link"><a href="/admin/order/delete/<?php echo $order['id']; ?>"
                class="admin-order__btn admin-order__btn btn btn-reset btn--danger">отменить</a></li>
          </ul>
          <div class="order-view__back">
            <a href="/admin/order/" class="admin-menu-nav__link">Назад</a>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
<?php include ROOT . '/views/layouts/footer-admin.php'; ?>