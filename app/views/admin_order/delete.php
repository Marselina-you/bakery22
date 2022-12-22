<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
<?php include ROOT . '/views/layouts/header-admin.php';?>
<main class="main">
<?php include ROOT . '/views/layouts/menu-admin.php';?>
<section class="admin-delete">
  <div class="container-fluid">
    <h2 class="admin__subtitle">Удаление заказа #<?php echo $id; ?></h2>
    <h3 class="admin-delete__quest">Вы действительно хотите удалить заказ #<?php echo $id; ?>?</h3>
    <div class="admin-delete__block">
      <div class="admin-delete__item">
        <form method="post">
          <input type="submit" name="submit" value="Удалить" class="btn btn-reset btn--danger admin-delete__btn" />
        </form>
      </div>
      <div class="admin-delete__item">
      <a href="/admin/order" class="btn btn-reset btn--success">нет</a></div>
    </div>
  </div>
  </div>
  </div>
</section>
</main>
</div>

<?php include ROOT . '/views/layouts/footer-admin.php'; ?>