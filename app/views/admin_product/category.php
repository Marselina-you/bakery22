<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
<?php include ROOT . '/views/layouts/header-admin.php';?>
<main>
<?php include ROOT . '/views/layouts/menu-admin.php';?>   
  <?php include ROOT . '/views/layouts/submenu-admin.php';?>
  <section class="admin-products">
  <div class="container-fluid">
  <h2 class="admin-submenu__title"><a href="/admin/product/create">Добавить новый товар</a></h2>
    <ul class="admin-products__list list-reset grid">
    <?php foreach ($categoryProducts as $product): ?>
      <li class="admin-products__item">
        <div class="admin-products__left">
          <div class="admin-products__image">
            <img src="/upload/images/products/<?php echo $product['new_picture'];?>" alt="product">
          </div>
          <strong class="admin-products__price"><?php echo $product['price']; ?><span class="rubl">₽</span></strong>
          <div class="admin-products__weight"><?php echo $product['weight']; ?> g</div>
          <div class="admin-products__available"><?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></div>
          <div class="admin-products__status <?php echo $product['style']; ?>"><?php echo $product['value']; ?></div>
        </div>
        <div class="admin-products__right">
          <h3 class="admin-products__title"><?php echo $product['name']; ?> <span>id <?php echo $product['id']; ?></span> </h3>
          <div class="admin-products__subtitle">Описание
            <p class="admin-products__text"><?php echo $product['description']; ?></p>
            <div class="admin-products__subtitle">Ингредиенты</div>
            <ul class="admin-products__components">
              <li class="admin-products__item admin-products__text"><?php echo $product['ing1']; ?></li>
              <li class="admin-products__item admin-products__text"><?php echo $product['ing2']; ?><?php echo $product['ing1']; ?></li>
              <li class="admin-products__item admin-products__text"><?php echo $product['ing3']; ?></li>
            </ul>
              <div class="admin-products__subtitle">Слоган
                <span class="admin-products__text"><?php echo $product['slogan']; ?></span>
              </div>
              <ul class="admin-products__tops list-reset">
                <li class="admin-products__top admin-products__text">- <?php echo $product['top1']; ?></li>
                <li class="admin-products__top admin-products__text">- <?php echo $product['top2']; ?></li>
                <li class="admin-products__top admin-products__text">- <?php echo $product['top3']; ?></li>
              </ul>
              <div class="admin-products__subtitle">Слайдер
                <span class="admin-products__text"><?php if ($product['recommendation'] == 1) echo 'да'; else echo 'нет';?></span>
              </div>
              <ul class="admin-products__power list-reset">
                <li class="admin-products__item"><a href="" class="admin-products__link admin-products__link--unactive">Скрыть</a></li>
                <li class="admin-products__item"><a href="/admin/product/update/<?php echo $product['id']; ?>" class="admin-products__link admin-products__link--active">Редактировать</a></li>
                <li class="admin-products__item"><a href="/admin/product/delete/<?php echo $product['id']; ?>" class="admin-products__link admin-products__link--danger">Удалить</a></li>
              </ul>
            </div>
        </div>
      </li>
      <?php endforeach; ?>
     </ul>
  </div>
</section>
</main>
    </div>
<?php include ROOT . '/views/layouts/footer-admin.php'; ?>
