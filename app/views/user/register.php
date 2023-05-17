<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
    <section class="registration">
  <div class="container">  

    <?php if ($result):?>
    <div class="registration__wrap">
      <div class="registration__after">
    <div class="registration__subtitle subtitle">Вы зарегистрированы!</div>
    <div class="registration__btn">
        <a href="/user/login/" class="btn btn--success btn-reset">Войти</a>
                        <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div></div>
                        <?php endif; ?>
                           
<div class="registration__title subtitle">Регистрация на сайте</div>
<form action="" method="post" class="registration__form">
<label for="name" class="main-form__label main-form__label--title">
<span class="main-form__caption">Имя*</span>
<input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" class="main-form__input"/>
</label>
<label for="email" class="main-form__label main-form__label--title">
<span class="main-form__caption">E-mail:</span>
<input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>" class="main-form__input" />
</label>
<label for="password" class="main-form__label main-form__label--title">
    <span class="main-form__caption">Пароль:</span>
    <input type="text" name="password" placeholder="Пароль" value="<?php echo $password; ?>" class="main-form__input" />
</label>
<label for="role" class="main-form__label main-form__label--title">
<span class="main-form__caption">Роль:</span>
<input type="text" name="role" placeholder="Пароль" value="<?php echo $role; ?>" class="main-form__input" />
</label>
<label for="phone" class="main-form__label main-form__label--title">
    <span class="main-form__caption">Телефон:</span>
    <input type="text" name="phone" placeholder="Телефон" value="<?php echo $phone; ?>" class="main-form__input" />
</label>
                <div class="main-form__send">
                                <input type="submit" name="submit" value="Регистрация" class="btn btn--success btn-reset" /></div>
                            
                        </form>
                   
                    <!--/sign up form-->
                    <?php endif; ?>
  </div>
    </section>
                       </main>
                       </div>
                           

    <?php include ROOT . '/views/layouts/footer.php'; ?>