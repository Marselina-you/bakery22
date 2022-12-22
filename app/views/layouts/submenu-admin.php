<section class="admin-submenu">
  <div class="container-fluid">
    
    <ul class="admin-submenu__list list-reset">
    <?php foreach ($categories as $categoryItem): ?>
      <li class="admin-submenu__item">
        <a href="/admin/product/categorya/<?php echo $categoryItem['id'];?>" class="admin-submenu__link <?php if ($categoryId == $categoryItem['id']) echo 'link--active'; ?>"><?php echo $categoryItem['name_category'];?></a>
      </li>
     <?php endforeach; ?>   
    </ul>
  </div>
</section>
