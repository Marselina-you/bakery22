<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>


    <div class="content-empty">
        <div class="content-empty-text col-xl-11 offset-xl-1">
            <div class="col-xl-10">
                <div class="col-xl-4 title size35px brownDark fontTahoma letter-space">Корзина </div></div>
            <div class="col-xl-10  undertitle_check_padding d-flex align-items-center">
                <div class="size29px fontTahoma letter-space"><a href="/catalog" class="undertitle_check brownLight">Перейти в каталог</a></div>
            <div class="d-flex col-xl-8">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="check_padding "><a href="/category/<?php echo $categoryItem['id'];?>" class="darkBlue fontSans size29px"><?php echo $categoryItem['name_category'];?></a>
                </div>
            <?php endforeach; ?>
            </div> 
            </div>
        </div>
    </div>        
        <div class="content-empty-text col-xl-11 offset-xl-1">
            <div class="col-xl-8">
                <div class="form-item_padding main-enter-content__title col-xl-12  size29px fontTahoma letter-space undertitle__edit">Заказ создан.</div>
                 <div class="d-flex align-items-center">     
                <?php foreach ($products as $product): ?>
                    <div class="">
                        <div class=""><img src="../upload/images/products/<?php echo $product['photo']; ?>"  alt="" /></div>
                    
                      </div> 
                <?php endforeach; ?></div>
                <div class="d-flex align-items-center">     
                <?php foreach ($products as $product): ?>
                    <div class="">
                       
                        <div class="form-item_padding main-order-item-name size20px no-blue justify-content-center align-items-center"><a href="/product/view/<?php echo $product['id']; ?>" class="justify-content-center"><?php echo $product['name']; ?></a>(<?php echo $productsQuantity[$product['id']]; ?>)
                           </div>
                      </div> 
                <?php endforeach; ?>
            </div>

                  
                       

                </div></div></div></div>

          
       
    


<?php include ROOT . '/views/layouts/footer.html'; ?>