<section class="cart-navigation">
  <div class="container">
    <div class="cart-navigation__content">
      <a href="/catalog" class="cart-navigation-link">Перейти в каталог</a>
      <nav class="menu-cabinet-nav" title="menu-cart">
        <ul class="nav__list cart-navigation__list list-reset">
        <?php foreach ($categories as $categoryItem): ?>
          <li class="nav__item"><a href="/category/<?php echo $categoryItem['id'];?>" class="nav__link cart-navigation__link capitalize"><?php echo $categoryItem['name_category'];?>
          </a></li>
          <?php endforeach; ?>
         </ul>
      </nav>
    </div>
  </div>
</section>