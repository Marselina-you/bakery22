<?php include ROOT . '/views/layouts/header.php'; 
//include ROOT . '/views/layouts/header2.php';
//include ROOT . '/views/layouts/header3.php';?>

<div class="wrap-content">
    <div class="main">
        <div class="wrap-main-enter wrap-main_padding">
        <div class="main-enter">
            <div class="wrap-main-enter-content col-xl-6 offset-xl-1">    
               
                    <?php if ($result):?>
                    <div class ="required content-form__data-title size35px col-xl-4">Вы зарегистрированы!</div>
                    <div class ="content-order-end__click__btn btn btn-success size29px col-xl-4"><a href="">Войти</a>
                <?php else: ?>
               
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
 <div class="main-enter-content__title title_padding col-xl-12  size29px fontTahoma letter-space undertitle__edit">
           Регистрация на сайте
            </div>
                    
                       
                        <form action="" method="post" class="main-enter-content__form form_padding  d-flex flex-column">
                             <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                        <label for="name" class="required content-form__data-title size35px col-xl-4" >Имя:</label>
                         <div class="wrap-content-form__data-input col-xl-8">
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" class="content-form__data-input col-xl-12"/></div></div>
<div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                        <label for="email" class="required content-form__data-title size35px col-xl-4" >E-mail:</label>
                         <div class="wrap-content-form__data-input col-xl-8">
                            <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>" class="content-form__data-input col-xl-12"/></div></div>
                          
                              <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                         <label for="password" class="required content-form__data-title size35px col-xl-4">Пароль:</label>
                          <div class="wrap-content-form__data-input col-xl-8">
                            <input type="text" name="password" placeholder="Пароль" value="<?php echo $password; ?>" class="content-form__data-input col-xl-12"/></div></div>
                              <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                         <label for="role" class="required content-form__data-title size35px col-xl-4">Роль:</label>
                          <div class="wrap-content-form__data-input col-xl-8">
                            <input type="text" name="role" placeholder="Пароль" value="<?php echo $role; ?>" class="content-form__data-input col-xl-12"/></div></div>
                              <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                         <label for="phone" class="required content-form__data-title size35px col-xl-4">Телефон:</label>
                          <div class="wrap-content-form__data-input col-xl-8">
                            <input type="text" name="phone" placeholder="Телефон" value="<?php echo $phone; ?>" class="content-form__data-input col-xl-12"/></div></div>
                             <div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-7 col-lg-4 col-md-4 col-sm-4 col-6  d-flex justify-content-end">
                            <input type="submit" name="submit"  value="Регистрация" class="content-order-end__click__btn btn btn-success size29px col-xl-6"/></div></div>
                        </form>
                    </div><!--/sign up form-->
                
             <?php endif; ?>
                <br/>
                <br/>
           
        </div>
    </div>
</div></div>

<?php //include ROOT . '/views/layouts/footer2.php'; ?>