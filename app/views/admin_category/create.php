<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
<?php include ROOT . '/views/layouts/header-admin.php';?>
<main class="main">
<?php include ROOT . '/views/layouts/menu-admin.php';?>
<section class="admin-product">
                        <div class="container-fluid">
<h2 class="admin-submenu__title orange">Добавление новой категории</h2>
<?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="grid">
            <form action="#" method="post" enctype="multipart/form-data" class="admin-product-form">
                                                <label class="admin-product-form__label">
                                                        <span class="admin-product-form__caption">Наименование</span>
                                                        <input type="text" name="name" class="admin-product-form__input">
                                                </label>
                                                <label class="admin-product-form__label">
                                                        <span class="admin-product-form__caption">Sort_order</span>
                                                        <input type="text" name="sort_order" class="admin-product-form__input">
                                                </label>
                                                <label class="admin-product-form__label">
                                                        <span class="admin-product-form__caption">Status</span>
                                                        <input type="text" name="status" class="admin-product-form__input">
                                                </label>
                                                <label class="admin-product-form__label">
                                                        <span class="admin-product-form__caption">Style</span>
                                                        <input type="text" name="style" class="admin-product-form__input">
                                                               </label>
                                                <label class="admin-product-form__label">
                                                        <span class="admin-product-form__caption">Style2</span>
                                                        <input type="text" name="style2" class="admin-product-form__input"></label>
                                                <div class="">
                                                        <input type="submit" name="submit" value="Сохранить" class="btn btn--primary btn-reset">
                                                </div>
                                        </form>
                                    </div>
           
                    </section>
        </main>
    </div>


<?php include ROOT . '/views/layouts/footer-admin.php'; ?>