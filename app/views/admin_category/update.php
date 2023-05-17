<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
        <?php include ROOT . '/views/layouts/header-admin.php';?>
        <main class="main-admin">
                <?php include ROOT . '/views/layouts/menu-admin.php';?>
                <section class="admin-category-edit admin-category">
                        <div class="container-fluid">
                                <h2 class="admin__title admin__title--active subtitle">Редактировать
                                        категорию"<?php echo $category['name_category']; ?>"</h2>
                                <form action="#" method="post" enctype="multipart/form-data" class="admin-product-form">
                                        <label class="admin-product-form__label">
                                                <span class="admin-product-form__caption">Наименование</span>
                                                <input type="text" name="name" placeholder=""
                                                        value="<?php echo $category['name_category']; ?>"
                                                        class="admin-product-form__input">
                                        </label>
                                        <label class="admin-product-form__label">
                                                <span class="admin-product-form__caption">Sort_order</span>
                                                <input type="text" name="sort_order" placeholder=""
                                                        value="<?php echo $category['sort_order']; ?>"
                                                        class="admin-product-form__input">
                                        </label>

                                        <label class="admin-product-form__label">
                                                <span class="admin-product-form__caption">Status</span>
                                                <input type="text" name="status" class="admin-product-form__input">
                                        </label>
                                        <label class="admin-product-form__label">
                                                <span class="admin-product-form__caption">Style</span>
                                                <input type="text" name="style"
                                                        value="<?php echo $category['style']; ?>"
                                                        class="admin-product-form__input">
                                        </label>
                                        <label class="admin-product-form__label">
                                                <span class="admin-product-form__caption">Style2</span>
                                                <input type="text" name="style2"
                                                        value="<?php echo $category['style2']; ?>"
                                                        class="admin-product-form__input">
                                        </label>
                                        <div class="">
                                                <input type="submit" name="submit" value="Сохранить"
                                                        class="btn btn--primary btn-reset">
                                        </div>
                                </form>
                        </div>
                </section>
        </main>
</div>
<?php include ROOT . '/views/layouts/footer-admin.php'; ?>