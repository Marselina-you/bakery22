<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
    <section class="catalog">
  <div class="container catalog__container">
  
    <article class="catalog__article grid">
      <div class="catalog-left">
        <div class="catalog-left__image">
          <img src="/upload/images/products/<?php echo $product['photo'];?>" alt="">
        </div>
        <div class="catalog-left__top">
          <span class="catalog-left__available"><?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></span>
          <strong class="catalog-left__value"><?php echo $product['price'];?><span class="rubl">₽</span></strong>
        </div>
        <span class="catalog-left__status <?php echo $product['style'];?>"><?php echo $product['value'];?></span>
        <a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart btn btn-reset btn--primary" data-id="<?php echo $product['id'];?>">В корзину</a>
       </div>
      <div class="catalog-right">
        <a href="/product/view/<?php echo $product['id'];?>" class="catalog-right__name"><?php echo $product['name'];?></a>
        <div class="catalog-right__weight"><?php echo $product['weight'];?> gramm</div>
        <div class="catalog-accordion" data-simplebar="init">
          <ul class="catalog-accordion__list list-reset">
            <li class="catalog-accordion__item">
              <button class="btn-reset catalog-accordion__control" aria-expanded="false">
                <h3 class="catalog-accordion__subtitle">Описание</h3>
                <span class="catalog-accordion__icon"></span></button>
                <div class="catalog-accordion__content" aria-hidden="true">
                  <p class="catalog-accordion__descr">
                  <?php echo $product['description'];?>
                  </p>
                </div>
             </li>
             <li class="catalog-accordion__item">
              <button class="btn-reset catalog-accordion__control" aria-expanded="false">
                <h3 class="catalog-accordion__subtitle">Oсновные ингредиенты</h3>
                <span class="catalog-accordion__icon"></span></button>
                <ul class="catalog-accordion__content list-reset" aria-hidden="true">
                  <li class="catalog-accordion__item"><?php echo $product['ing1'];?></li>
                  <li class="catalog-accordion__item"><?php echo $product['ing2'];?></li>
                  <li class="catalog-accordion__item"><?php echo $product['ing3'];?></li>
                </ul>
             </li>
          </ul>
        </div>
        <div class="catalog-right__slogan"><?php echo $product['slogan'];?></div>
        <div class="catalog-right-spread">
          <div class="catalog-right-spread__item catalog-right-spread__item--one"><?php echo $product['top1'];?></div>
          <div class="catalog-right-spread__item catalog-right-spread__item--two"><?php echo $product['top2'];?></div>
          <div class="catalog-right-spread__item catalog-right-spread__item--three"><?php echo $product['top3'];?></div>
        </div>
    </div>
    </article>
   
  </div>
</section>
  </main>
  </div>
<?php include ROOT.'/views/layouts/footer.php';?>