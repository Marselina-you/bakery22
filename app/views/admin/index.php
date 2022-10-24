<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php';
//include ROOT . '/views/layouts/header2.php'; 
 ?>
<div class="wrap-content pt-5">
    <div class="main">
<div class="main-admin__hello title_padding fs-1 brownDark fontTahoma">Добро пожаловать, <?php echo $user['name'];?>!</div>
 <?php include ROOT . '/views/layouts/admin_menu.php';?>
  <div class="main-admin-support col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="p-4 mb-4 fs-1 brownDark fontTahoma">Служба поддержки</div>
        <form class="px-4 main-order-content__form pb-5 d-flex flex-column"  method="post">
      <div class="pb-5 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center justify-content-between">
         <div class="fs-2 col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 pb-3">Тема:</div>
          <div class="wrap-content-form__data-input col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10">
            <input type="text" name="name" class="edit-cart__item-input ps-3 fs-3 col-12"></div>
      </div>
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center justify-content-between">
         <div class="fs-2 col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 pb-3">Сообщение:</div>
          <div class="wrap-content-form__data-input col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10">
            <textarea name="" class="col-12"></textarea></div>
      </div>
<div class="d-flex align-items-center justify-content-end justify-content-lg-end justify-content-md-end justify-content-sm-center justify-content-center">
   <div class="pt-5 col-12 d-flex col-xl-6 col-lg-6 col-md-8 col-sm-10 col-10">
      <div class="col-12 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-sm-center justify-content-center">
<button class="content-order-end__click__btn btn btn-success fs-2 col-xl-9 col-lg-9 col-md-6 col-sm-8 col-8" type="button">Отправить</button></div></div></div>
   </form>
    </div></div></div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>


