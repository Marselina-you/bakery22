<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
include ROOT . '/views/layouts/header3.php';?>

      <div class="user-index">
         <div class="content-empty-text content-empty-text_padding col-xl-6 offset-xl-1">
            <div class="bottom_padding size35px  brownDark fontTahoma letter-space">Личный кабинет</div>
            <div class="edit-cart__content_padding size35px brownDark fontTahoma letter-space"><?php echo $user['name'];?>!</div>
            
        
         <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column">
    <div class="edit__title  user-index_padding darkBlue fontSans size32px"><a href="" class="">Доставки</a></div>
     <div class="edit__title user-index_padding darkBlue fontSans size32px"><a href="" class="">Покупки</a></div>
      <div class="edit__title user-index_padding darkBlue fontSans size32px"><a href="" class="">Мои данные</a></div>

</div> </div>
         <div class="user-index-actual">
            <div class="undertitle size29px fontTahoma text-center letter-space"><a href="">Доставки</a></div>
          
            
              <div class="user-index-actual__data size29px fontArial text-center brownDark">Заказ от 29 апреля</div>
               
            <div class="user-index-actual__num size24px fontArial text-center darkBlue cart-order__name_padding">235098766</div>
            <div class="wrap-user-index-actual-cart d-flex justify-content-center  col-xl-4">
                <div class="user-index-actual-cart d-flex flex-column align-items-center ">
                    <div class="user-index-actual-cart__img cart-order__name_padding d-flex justify-content-center"><img src="../images/page.png"></div>
                    <div class="user-index-actual-cart__name cart-order__name_padding size29px fontSans brownDark">Пирожные. Ассорти</div>
                </div>
            </div>
            <div class="user-index-actual-info d-flex  flex-column align-items-center  col-xl-4">
                <div class="user-index-actual-info__condition col-xl-4 white cart-order__name_padding size24px text-center">В пути</div>
                <div class="cart-order__name_padding fontSans size22px">Будет доставлено 29 апреля 17.00</div>
            </div>
         </div>
          <div class="user-index-actual">
            <div class="undertitle size29px fontTahoma text-center letter-space"><a href="">Покупки</a></div>
          
            
              <div class="user-index-actual__data size29px fontArial text-center brownDark">Заказ от 29 апреля</div>
               
            <div class="user-index-actual__num size24px fontArial text-center darkBlue cart-order__name_padding">235098766</div>
            <div class="wrap-user-index-actual-cart d-flex justify-content-center  col-xl-4">
                <div class="user-index-actual-cart d-flex flex-column align-items-center ">
                    <div class="user-index-actual-cart__img cart-order__name_padding d-flex justify-content-center"><img src="../images/page2.png"></div>
                    <div class="user-index-actual-cart__name cart-order__name_padding size29px fontSans brownDark">Пирожные. Ассорти</div>
                </div>
            </div>
            <div class="user-index-actual-info d-flex  flex-column align-items-center  col-xl-4">
                <div class="user-index-shop-info__condition col-xl-4 white cart-order__name_padding size24px text-center">Доставлено</div>
               
            </div>
         </div>

         <div class="user-index-actual">
            <div class="undertitle size29px fontTahoma text-center letter-space"><a href="">Мои данные</a></div>
          <form class="main-enter-content__form form_padding col-xl-6 offset-xl-1 d-flex flex-column"  method="post">
      <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
          <label for="email" class="content-form__data-title size35px col-xl-4">E-mail:</label>
          <div class="wrap-content-form__data-input col-xl-8">
            <input type="text" name="email" class="content-form__data-input col-xl-12" value="<?php echo $user['email'];?>"></div>
      </div>
      <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
          <label for="name" class="content-form__data-title size35px col-xl-4">Имя:</label>
          <div class="wrap-content-form__data-input col-xl-8">
            <input type="text" name="name" class="content-form__data-input col-xl-12" value="<?php echo $user['name'];?>"/></div>
      </div>
      
      <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
          <label for="parol2" class="content-form__data-title size35px col-xl-4">Телефон:</label>
          <div class="wrap-content-form__data-input col-xl-8">
            <input type="text" name="parol2" class="content-form__data-input col-xl-12"  value="<?php echo $user['phone'];?>"/></div>
      </div>
<div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-7 col-lg-4 col-md-4 col-sm-4 col-6  d-flex justify-content-end">
<button  class="content-order-end__click__btn btn btn-success size29px col-xl-6" type="button"><a href="/cabinet/edit">Редактировать</a></button></div></div>
   </form>
   
            
              
         </div>
         
         

         
      </div></div></div>


<?php include ROOT . '/views/layouts/footer2.php'; ?>