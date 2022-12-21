<section class="admin-menu">
  <div class="container-fluid">
    <h2 class="admin-menu__title">Вы вошли в АдминПанель как <?php echo $user['name'];?></h2>
    <nav class="admin-menu-nav" title="menu-admin">
      <ul class="admin-menu-nav__list list-reset">
        <li class="admin-menu-nav__item"><a href="/admin/product" class="admin-menu-nav__link">Управление товарами</a></li>
        <li class="admin-menu-nav__item"><a href="/admin/category" class="admin-menu-nav__link admin-menu-nav__link--active">Управление категориями</a></li>
        <li class="admin-menu-nav__item"><a href="/admin/order" class="admin-menu-nav__link">Управление заказами</a></li>
    </ul>
    </nav>
  </div>
</section>
