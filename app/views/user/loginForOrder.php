<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
    <?php include ROOT . '/views/layouts/header.php'; ?>
    <main class="main">
        <?php include ROOT . '/views/layouts/cart-navigation.php';?>
        <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
            <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <section class="login result">
            <div class="container">
                <h2 class="login__title subtitle">Войти или <a href="/user/register" class="login__link"> зарегистрироваться</a></h2>
                <form action="#" method="post" class="main-form">
                    <label for="email" class="main-form__label main-form__label--title">
                        <span class="main-form__caption">Ваш E-mail:</span>
                        <input type="email" name="email" placeholder="E-mail" class="main-form__input"
                            value="<?php echo $email; ?>" />
                    </label>
                    <label for="parol" class="main-form__label main-form__label--title">
                        <span class="main-form__caption">Пароль:</span>
                        <input type="password" name="password" placeholder="Пароль" class="main-form__input"
                            value="<?php echo $password; ?>" />
                    </label>
                    <div class="main-form__send">
                        <input type="submit" name="submit" class="btn btn--success btn-reset" value="Вход" />
                </form>
            </div>
        </section>
</div>
<?php include ROOT . '/views/layouts/footer.html'; ?>