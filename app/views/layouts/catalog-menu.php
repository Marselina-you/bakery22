<section class="catalog-menu">
  <div class="container catalog-menu__container">
    <div class="catalog-menu__top">
   <ul class="catalog-menu__list list-reset grid">
   <?php foreach ($categories as $categoryItem): ?>
    <li class="catalog-menu__item centered <?php echo $categoryItem['style'];?>">
      <a href="/category/<?php echo $categoryItem['id'];?>" class="capitalize catalog-menu__link <?php if ($categoryId == $categoryItem['id']) echo 'link--active'; ?>"><?php echo $categoryItem['name_category'];?></a>
    </li>
    
    <?php endforeach; ?>
   </ul>
   </div>
   <div class="catalog-menu-images">
    <a href="/category/1" class="catalog-menu-images__item centered"><img src="/template/img/bread.png" alt="bread"></a>
    <a  href="/category/2" class="catalog-menu-images__item centered"><img src="/template/img/cake.png" alt="cake"></a>
    <a  href="/category/3" class="catalog-menu-images__item centered"><img src="/template/img/loaf.png" alt="loaf"></a>
   </div>
    </div>
</section>
