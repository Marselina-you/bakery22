<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 

?>
<div class="wrap-content">
    <div class="main">
        <div class="content-empty-text col-xl-11 offset-xl-1 d-flex flex-column">
             <div class="col-xl-10  undertitle_check_padding d-flex align-items-center">
                <div class="size29px fontTahoma letter-space"><a href="/cabinet" class="undertitle_check brownLight">Перейти в кабинет</a></div>
           
            </div>
            <div class="col-xl-12">
 <div class="form-item_padding main-enter-content__title col-xl-12  size29px fontTahoma letter-space undertitle__edit brownDark">Мои доставки</div>
 <div class="d-flex">
  <?php foreach ($ordersList as $order): ?><div class="d-flex flex-column cart-order_padding align-items-center">
    <div class="size20px brownDark fontTahoma edit-cart__content_padding letter-space">Заказ <?php echo $order['id']; ?></div>
    <div class="size20px brownDark fontTahoma letter-space edit-cart__content_padding myGreen"><?php echo $order['status']; ?></div>
        <?php foreach ($products as $order): ?>
        <img src="/upload/images/products/<?php echo $order['photo']; ?>"  alt="" width="90" />
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
</div>
 
<div class="col-xl-12">
 <div class="form-item_padding main-enter-content__title col-xl-12 size29px fontTahoma letter-space undertitle__edit brownDark">Мои заказы</div>
 <div class="d-flex">
  <?php foreach ($ordersListOld as $order): ?>
    <div class="wrap d-flex flex-column cart-order_padding align-items-center">
   
        <div class="size20px fontTahoma edit-cart__content_padding opacityImg letter-space brownLight">Заказ <?php echo $order['id']; ?></div>
        <div class="size20px fontTahoma edit-cart__content_padding letter-space opacityImg brownLight"><?php echo $order['status']; ?></div>
        <?php foreach ($productsOld as $order): ?>
            <div class="">
        <img src="/upload/images/products/<?php echo $order['photo']; ?>"  alt="" width="90" class="opacityImg"/>
    </div>
            <?php endforeach; ?>
            </div>
        <?php endforeach; ?> 
       
</div>
                        
  </div> 
</div>                 
</div>
</div>



<?php include ROOT . '/views/layouts/footer2.php'; ?>

