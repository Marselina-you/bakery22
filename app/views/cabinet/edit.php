<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
   <div class="wrap-main-enter wrap-main_padding">
   <div class="main-enter">

            <div class="wrap-main-enter-content col-xl-6 offset-xl-1">
                
                <?php if ($result): ?>
                   <div class="title_padding col-xl-12  size29px fontTahoma letter-space undertitle__edit">Данные отредактированы!</div>
                    <div class="title_padding col-xl-12  size29px fontTahoma letter-space undertitle__edit"><a href="index">В кабинет</a></div>
                    <div class="title_padding col-xl-12  size29px fontTahoma letter-space undertitle__edit"><a href="/">На главную</a></div>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                       <div class="main-enter-content__title title_padding col-xl-12  size29px fontTahoma letter-space undertitle__edit">Редактирование данных
            </div>
                        <form action="#" method="post" class="main-enter-content__form form_padding  d-flex flex-column" >
                            <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                            <label for="email" class="required content-form__data-title size35px col-xl-4" >Имя:</label>
                             <div class="wrap-content-form__data-input col-xl-8">
                            <input class="content-form__data-input col-xl-12" type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/></div></div>

                            <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                           <label for="email" class="required content-form__data-title size35px col-xl-4" >Email:</label>
                            <div class="wrap-content-form__data-input col-xl-8">
                            <input class="content-form__data-input col-xl-12" type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"/></div></div>

                            <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                             <label for="phone" class="required content-form__data-title size35px col-xl-4" >Телефон:</label>
                              <div class="wrap-content-form__data-input col-xl-8">
                            <input class="content-form__data-input col-xl-12" type="text" name="phone" placeholder="Телефон" value="<?php echo $phone; ?>"/></div></div>

                            <div class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                             <label for="password" class="required content-form__data-title size35px col-xl-4" >Пароль:</label>
                              <div class="wrap-content-form__data-input col-xl-8">
                            <input class="content-form__data-input col-xl-12" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/></div></div>

                           
                           <div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-7 col-lg-4 col-md-4 col-sm-4 col-6  d-flex justify-content-end">

 <input type="submit" name="submit" class="content-order-end__click__btn btn btn-success size29px col-xl-6" value="Сохранить" /></div></div>
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                
            </div>
        </div>
    </div>
                            </main>
                            </div>

<?php include ROOT . '/views/layouts/footer.html'; ?>