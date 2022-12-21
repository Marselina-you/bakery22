<section class="admin-submenu">
  <div class="container-fluid">
    <h2 class="admin-submenu__title"><a href="/admin/product/create">Добавить новый товар</a></h2>
    <ul class="admin-submenu__list list-reset">
    <?php foreach ($categories as $categoryItem): ?>
      <li class="admin-submenu__item">
        <a href="/admin/product/categorya/<?php echo $categoryItem['id'];?>" class="admin-submenu__link"><?php echo $categoryItem['name_category'];?></a>
      </li>
     <?php endforeach; ?>   
    </ul>
  </div>
</section>
