<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
include ROOT . '/views/layouts/header3.php';?>
<div class="wrap-content">
    <div class="main">

       <?php if ($productsInCart): ?>
        <?php foreach ($products as $product): ?>
<div class="wrap-main-cartFull-content col-xl-10 offset-xl-1">
    <div class="main-cartFull-list">
        <div class="wrap-main-cartFull-list-item">
            <div class="main-cartFull-list-item d-flex col-xl-12 justify-content-between">
         <div class="main-cartFull-list-item__img  col-xl-4 d-flex justify-content-center align-items-center">
            <img src="/template/images/page2.png">
         </div>
         <div class="main-cartFull-list-item__info col-xl-4 d-flex flex-column justify-content-center">
            <div class="main-cartFull-list-item__info-name size29px fontSans brownDark"> <?php echo $product['name'];?></div>
            <div class="main-cartFull-list-item__info-weight size24px fontSans brownSweet main-cartFull-list-item__info-weight_padding"> <?php echo $product['weight'];?> грамм</div>
             <div class="main-cartFull-list-item__info-weight size24px fontSans brownSweet main-cartFull-list-item__info-weight_padding">Количество: <?php echo $productsInCart[$product['id']];?></div>
           

<div class="main-cartFull-list-item__info-deleting d-flex justify-content-between align-items-center main-cartFull-list-item__info-delete_padding">
  
         
             
             <div class="size22px burgundyLight"><a href="/cart/delete/<?php echo $product['id'];?>">удалить</a></div></div></form>
         </div>
         <div class="content-order-list_item__value  col-xl-4 size29px font-weight-bold d-flex justify-content-center align-items-center"><?php echo $product['price'];?>₽</div>
      </div><div class="hr-basket"><hr class="col-xl-10 offset-xl-1"></div></div>


 



</div>

</div>
 <?php endforeach; ?>
<div class="main-cartFull-content-end col-xl-6 offset-xl-1">
<div class="main-cartFull-content-end__amount d-flex justify-content-between"><div class="size29px  fontTahoma letter-space brownLight title_padding">Количество товаров</div><div class="size29px fontTahoma letter-space brownDark font-weight-bold title_padding"><?php echo $totalQuantity; ?></div></div>    
<div class="main-cartFull-content-end__amount d-flex justify-content-between">
<div class="size29px  fontTahoma letter-space brownLight title_padding">К оплате</div>
<div class="size29px fontTahoma letter-space brownDark font-weight-bold title_padding"><?php echo $totalPrice;?>₽</div></div>

<div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-6 d-flex justify-content-end">
<button class="content-order-end__click__btn btn btn-success size29px col-xl-9" type="button">Оформить заказ</button></div></div>
 <?php else: ?>
                        <p>Корзина пуста</p> <?php endif; ?>
</div>

</div>
</div>

<?php include ROOT . '/views/layouts/footer2.php'; ?>