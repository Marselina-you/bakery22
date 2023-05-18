<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header-admin.php';?>
  <main class="main">
    <?php include ROOT . '/views/layouts/menu-admin.php';?>
    <section class="admin-category admin-category--height">
      <div class="container-fluid admin-category__container">
        <h2 class="admin__title subtitle"><a href="/admin/category/create">Добавить категорию</a></h2>
        <div class="admin-category__block">
          <table class="admin-table">
            <tr class="admin-table__tr">
              <th class="admin-table__th">Id</th>
              <th class="admin-table__th">Название категории</th>
              <th class="admin-table__th">Действие</th>
              <?php foreach ($categoriesList as $category): ?>
            <tr class="admin-table__tr">
              <td class="admin-table__td"><?php echo $category['id']; ?></td>
              <td class="admin-table__td capitalize"><?php echo $category['name_category']; ?></td>
              <td class="admin-table__td"><a href="/admin/category/delete/<?php echo $category['id']; ?>"
                  class="admin-table__link admin-table__link--danger">удалить</a>
                / <a href="/admin/category/update/<?php echo $category['id']; ?>" class="admin-table__link--active">
                  редактировать</a></td>
            <tr class="admin-table__tr">
              <?php endforeach; ?>
          </table>
        </div>
      </div>
    </section>
  </main>
</div>
<?php include ROOT . '/views/layouts/footer-admin.php'; ?>