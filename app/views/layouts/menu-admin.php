<section class="admin-menu">
  <div class="container-fluid">
    <h2 class="admin-menu__title">Вы вошли в АдминПанель как <?php echo $user['name'];?></h2>
    <nav class="admin-menu-nav" title="menu-admin">
      <ul class="admin-menu-nav__list list-reset">
      <?php foreach ($items as $menuItem): ?>
        <li class="admin-menu-nav__item">
          <a href="/admin/<?php echo $menuItem['item'];?>" class="admin-menu-nav__link"><?php echo $menuItem['item'];?></a>
        </li>
        <?php endforeach; ?>
    </ul>
    </nav>
  </div>
</section>
