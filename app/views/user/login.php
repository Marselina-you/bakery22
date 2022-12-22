<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
       

                    <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <section class="login">
  <div class="container">
    <h2 class="user-cabinet__title">Войти или <a href="" class="cart-navigation__link"> зарегистрироваться</a></h2>
    <form action="#" class="main-form">
      <label class="main-form__label main-form__label--title">
            <span class="main-form__caption">Ваше email*</span>
        <input type="text" name="email" placeholder="E-mail" class="main-form__input">
      </label>
      <label class="main-form__label main-form__label--title">
            <span class="main-form__caption">Ваш Пароль*</span>
        <input type="password" name="password" placeholder="Пароль" class="main-form__input">
      </label>

        <div class="main-form__send">
          <input type="submit" name="submit" value="войти" class="btn btn--success btn-reset">
        </div>
      </form>
  </div>
</section>
                    <form action="#" method="post" class="main-enter-content__form d-flex flex-column">
                        <div
                            class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                            <label for="email"
                                class="required content-form__data-title fs-2 col-xl-4">E-mail:</label>
                            <div class="wrap-content-form__data-input col-xl-8">
                                <input type="email" name="email" placeholder="E-mail"
                                    class="content-form__data-input col-xl-12" value="<?php echo $email; ?>" /></div>
                        </div>
                        <div
                            class="content-form__data d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                            <label for="parol"
                                class="required content-form__data-title fs-2 col-xl-4">Пароль:</label>
                            <div class="wrap-content-form__data-input col-xl-8">
                                <input type="password" name="password" placeholder="Пароль"
                                    class="content-form__data-input col-xl-12" value="<?php echo $password; ?>" /></div>
                        </div>
                        <div class="content-form__data d-flex align-items-center justify-content-end">
                            <div class="col-xl-7 col-lg-4 col-md-4 col-sm-4 col-6  d-flex justify-content-end">
                                <input type="submit" name="submit"
                                    class="content-order-end__click__btn btn btn-success fs-3 col-xl-6"
                                    value="Вход" />
                            </div>
                        </div>
                    </form>
                    <br />
                    <br />
                </div>
            </div>
        </div>
                        </main>
                        </div>
<?php include ROOT . '/views/layouts/footer.html'; ?>