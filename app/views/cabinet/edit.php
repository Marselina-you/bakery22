<?php include ROOT . '/views/layouts/head.php'; ?>
<div class="site-container">
  <?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="main">
    <?php include ROOT . '/views/layouts/logo.html';?>
    <section class="registration">
  <div class="container">
<?php if ($result): ?>
    <h2 class="registration__title subtitle">Данные отредактированы!</h2>
    <div class="suggestion result__suggestion">
      <a href="/cabinet">
        <span class="">В кабинет</span>
        <svg
   viewBox="0 0 214.89859 281.45682" xmlns:svg="http://www.w3.org/2000/svg">
<g data-name="1"
    transform="matrix(1,0,0,0.7043276,-187.1032,-35.490591)">
    <path d="M 202.1,450 A 15,15 0 0 1 191.5,424.39 L 365.79,250.1 191.5,75.81 A 15,15 0 0 1 212.71,54.6 l 184.9,184.9 a 15,15 0 0 1 0,21.21 l -184.9,184.9 A 15,15 0 0 1 202.1,450 Z"
       id="path4" />
  </g>
</svg>
      </a>
    </div>
                  
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                    <h2 class="registration__title subtitle">Редактирование данных</h2>
                      
            
                        <form action="#" method="post" class="registration__form" >
                            <label class="main-form__label main-form__label--title">
                            <span class="main-form__caption">Имя*</span>
                            <input class="main-form__input" type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                        </label>
                            <label class="main-form__label main-form__label--title" >
                           <span class="main-form__caption">Email:</span>
                           <input class="main-form__input" type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"/>
                            </label>
                            
                           

                        
                             <label class="main-form__label main-form__label--title" >
                                <span class="main-form__caption">Телефон:</span>
                                <input class="main-form__input" type="text" name="phone" placeholder="Телефон" value="<?php echo $phone; ?>"/>
                             </label>
                           
                          

                           
                             <label class="main-form__label main-form__label--title" >
                             <span class="main-form__caption">Пароль:</span>
                             <input class="main-form__input" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                             </label>
                             <div class="main-form__send">
        <input type="submit" name="submit" value="Сохранить" class="btn btn--success btn-reset">
      </div>         


                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                
                            </div>
                            </div>
      
                            </main>
                            </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>