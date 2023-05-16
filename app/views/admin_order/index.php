<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
<?php include ROOT . '/views/layouts/header-admin.php';?>
<main class="main">
<?php include ROOT . '/views/layouts/menu-admin.php';?>

           
                        
           

            

            <section class="admin-order admin-category">
  <div class="container-fluid admin-order__container">
  <h2 class="admin__title admin__title--active subtitle">Список заказов</h2>
    <div class="admin-order__block grid">
    <?php foreach ($ordersList as $order): ?>
      <article class="admin-order__article">
        <ul class="admin-order__list list-reset">
          <li class="admin-order__item">
            <div class="admin-order__caption">Id заказа:</div>
            <div class="admin-order__value"><a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a></div>
          </li>
          <li class="admin-order__item">
            <div class="admin-order__caption">Имя покупателя:</div>
            <div class="admin-order__value"><?php echo $order['user_name']; ?></div>
          </li>
          <li class="admin-order__item">
            <div class="admin-order__caption">Телефон:</div>
            <div class="admin-order__value"><?php echo $order['user_phone']; ?></div>
          </li>
          <li class="admin-order__item">
            <div class="admin-order__caption">Дата оформления:</div>
            <div class="admin-order__value"><?php echo $order['date']; ?></div>
          </li>
          <li class="admin-order__item">
            <div class="admin-order__caption">Статус:</div>
            <div class="admin-order__value"><?php echo Order::getStatusText($order['status']); ?></div>
          </li>
          <li class="admin-order__item">
            <a href="/admin/order/delete/" class="admin-order__btn admin-order__btn btn--success btn btn-reset">выполнить</a>
            <a href="/admin/order/update/<?php echo $order['id']; ?>" class="admin-order__btn admin-order__btn btn btn-reset btn--primary">изменить</a>
            <a href="/admin/order/delete/<?php echo $order['id']; ?>" class="admin-order__btn admin-order__btn btn btn-reset btn--danger">отменить</a>
          </li>
        </ul>
      </article>         
      <?php endforeach; ?>
            </main>
                </div>

<?php include ROOT . '/views/layouts/footer-admin.php'; ?>