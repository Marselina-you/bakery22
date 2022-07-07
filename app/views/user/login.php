<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php';
include ROOT . '/views/layouts/header3.php';?>
<div class="wrap-content">
    <div class="main">

    <div class="wrap-main-enter wrap-main_padding">
        <div class="main-enter">

            <div class="wrap-main-enter-content col-xl-6 offset-xl-1">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                
                    <div class="main-enter-content__title title_padding col-xl-12  size29px fontTahoma letter-space undertitle__edit">Войти или 
            <a href="/user/register" class="main-enter-content__title-a">зарегистрироваться</a>
            </div>
                    <form action="#" method="post" class="main-enter-content__form form_padding  d-flex flex-column">
                         <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                        <label for="email" class="required content-form__data-title size35px col-xl-4" >E-mail:</label>
                         <div class="wrap-content-form__data-input col-xl-8">
                        <input type="email" name="email" placeholder="E-mail" class="content-form__data-input col-xl-12" value="<?php echo $email; ?>"/></div></div>
                        <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                         <label for="parol" class="required content-form__data-title size35px col-xl-4">Пароль:</label>
                          <div class="wrap-content-form__data-input col-xl-8">
                        <input type="password" name="password" placeholder="Пароль" class="content-form__data-input col-xl-12" value="<?php echo $password; ?>"/></div></div>
                        <div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-7 col-lg-4 col-md-4 col-sm-4 col-6  d-flex justify-content-end">

 <input type="submit" name="submit" class="content-order-end__click__btn btn btn-success size29px col-xl-6" value="Вход" /></div></div>
                    </form>
              

                <br/>
                <br/>
            </div>
        </div>
    </div>

</div></div>

<?php include ROOT . '/views/layouts/footer2.php'; ?>