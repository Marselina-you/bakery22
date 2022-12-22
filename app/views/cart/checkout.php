<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>


    <div class="content-empty">
        <div class="content-empty-text col-xl-11 offset-xl-1">
            <div class="col-xl-10">
                <div class="col-xl-4 title size35px brownDark fontTahoma letter-space">Корзина </div></div>
            <div class="col-xl-12 col-lg-12 undertitle_check_padding d-flex align-items-center">
                <div class="d-flex col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 size29px fontTahoma letter-space"><a href="/catalog" class="undertitle_check brownLight">Перейти в каталог</a></div>
            <div class="d-flex col-xl-8 col-lg-8 col-md-6 col-sm-6 col-6 flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="check_padding d-flex"><a href="/category/<?php echo $categoryItem['id'];?>" class="darkBlue fontSans size29px"><?php echo $categoryItem['name_category'];?></a>
                </div>
            <?php endforeach; ?>
            </div> 
            </div>
        </div>
    </div>
    <div class="content-empty-text col-xl-11 offset-xl-1">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="size22px form-item_padding">Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?> рублей.</div>
                    <div class="row main-order d-flex align-items-center flex-xl-row flex-lg-row flex-md-row flex-sm-row flex-row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php foreach ($products as $product): ?>
                        <div class="main-order-item main-order-item_padding d-flex flex-column align-items-center col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                            <div class="main-order-item-img"><img src="../upload/images/products/<?php echo $product['photo']; ?>"  alt=""  width="90"/></div>
                            <div class="form-item_padding main-order-item-name size20px"><?php echo $product['name']; ?></div>
                        </div>
                      
                        <?php endforeach; ?>
                    </div>
           
        </div>
    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
    <?php if (isset($errors) && is_array($errors)): ?>
    <ul><?php foreach ($errors as $error): ?><li> - <?php echo $error; ?></li>
    <?php endforeach; ?></ul><?php endif; ?>
        <div class="main-enter-content__title col-xl-12 size29px fontTahoma letter-space padding_status">Для оформления заказа заполните форму</div>
        <div class="login-form">
            <form action="" method="post" class="main-enter-content__form form_padding  d-flex flex-column">
                <div class="form-item_padding d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                    <label for="name" class="required size35px col-xl-4 padding-null">Ваше имя</label>
                    <div class="wrap-content-form__data-input_padding col-xl-8">
                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>" class="content-form__data-input col-xl-12"/>
                    </div>
                </div>

                                    <div class="form-item_padding d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                                        <label for="phone" class="required size35px col-xl-4 padding-null">Ваш phone</label>
                                        <div class="wrap-content-form__data-input_padding col-xl-8">
                                    <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>" class="content-form__data-input col-xl-12"/></div></div>
 <div class="form-item_padding d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                                        <label for="phone" class="size35px col-xl-4 padding-null">
                                    Комментарий к заказу</label>
                                        <div class="wrap-content-form__data-input_padding col-xl-8">
                                    <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>" class="content-form__data-input col-xl-12"/></div></div>

                                   <div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-7 col-lg-4 col-md-4 col-sm-4 col-6 d-flex justify-content-end">

 <input type="submit" name="submit" class="content-order-end__click__btn btn btn-success size29px col-xl-6" value="оформить" /></div></div>
                                   
                                </form>
                            </div>
                        </div>

                    

                </div></div></div>

          
       
    


<?php include ROOT . '/views/layouts/footer.html'; ?>