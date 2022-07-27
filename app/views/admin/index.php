<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php';
//include ROOT . '/views/layouts/header2.php'; 
 ?>
<div class="wrap-content">
    <div class="main">
<div class="main-admin__hello title_padding size35px brownDark fontTahoma">Добро пожаловать, <?php echo $user['name'];?>!</div>
 <?php include ROOT . '/views/layouts/admin_menu.php';?>
  <div class="main-admin-support col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="main-admin-support__title title_padding size35px brownDark fontTahoma">Служба поддержки</div>
        <form class="main-order-content__form form_padding d-flex flex-column"  method="post">
      <div class="content-form__data d-flex  flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center justify-content-between">
         <div class="content-form__data-title size35px col-xl-4">Тема:</div>
          <div class="wrap-content-form__data-input col-xl-8">
            <input type="text" name="name" class="edit-cart__item-input col-xl-12"></div>
      </div>
      <div class="content-form__data d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center justify-content-between">
         <div class="content-form__data-title size35px col-xl-4">Сообщение:</div>
          <div class="wrap-content-form__data-input col-xl-8">
            <textarea name="" class="col-xl-12"></textarea></div>
      </div>
<div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end">
<button class="content-order-end__click__btn btn btn-success size29px col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 " type="button">Отправить</button></div></div>
   </form>
    </div></div></div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>


