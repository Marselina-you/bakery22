<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
    <?php include ROOT . '/views/layouts/header-admin.php';?>
    <main class="main">
        <?php include ROOT . '/views/layouts/menu-admin.php';?>
        <section class="admin-product">
            <div class="container-fluid grid">
                <h2 class="admin-submenu__title  orange">Редактировать товар
                        #<?php echo $id; ?></h2>
                <form action="#" method="post" class="admin-product-form" enctype="multipart/form-data">
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Категория</span>
                        <select name="category_id" class="admin-product-form__select">
                            <option value="<?php echo $product['category_id']; ?>" name="">
                                <?php echo $product['name_category']; ?>
                            </option>
                            <?php if (is_array($categoriesList)): ?>
                            <?php foreach ($categoriesList as $category): ?>
                            <option value="<?php echo $category['id']; ?>" name="">
                                <?php echo $category['name_category']; ?>
                            </option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Название товара</span>
                        <input type="text" name="name" class="admin-product-form__input"
                            value="<?php echo $product['name']; ?>">
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Стоимость</span>
                        <input type="text" name="price" class="admin-product-form__input"
                            value="<?php echo $product['price']; ?>">
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Вес</span>
                        <input type="text" name="weight" class="admin-product-form__input"
                            value="<?php echo $product['weight']; ?>">
                    </label>
                    <label class="admin-product-form__label admin-product-form__label--title">
                        <span class="admin-product-form__caption">Описание</span>
                        <textarea type="text" name="description"
                            class="admin-product-form__textarea"><?php echo $product['description']; ?></textarea>
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Ингредиент 1</span>
                        <input type="text" name="ing1" class="admin-product-form__input"
                            value="<?php echo $product['ing1']; ?>">
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Ингредиент 2</span>
                        <input type="text" name="ing2" class="admin-product-form__input"
                            value="<?php echo $product['ing2']; ?>">
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Ингредиент 3</span>
                        <input type="text" name="ing3" class="admin-product-form__input"
                            value="<?php echo $product['ing3']; ?>">
                    </label>
                    <label class="admin-product-form__label admin-product-form__label--title">
                        <span class="admin-product-form__caption">Слоган</span>
                        <input type="text" name="slogan" class="admin-product-form__input"
                            value="<?php echo $product['slogan']; ?>">
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Топпинг 1</span>
                        <input type="text" name="top1" class="admin-product-form__input"
                            value="<?php echo $product['top1']; ?>">
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Топпинг 2</span>
                        <input type="text" name="top2" class="admin-product-form__input"
                            value="<?php echo $product['top2']; ?>">
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Топпинг 3</span>
                        <input type="text" name="top3" class="admin-product-form__input"
                            value="<?php echo $product['top3']; ?>">
                    </label>
                    <label class="admin-product-form__label admin-product-form__label--title">
                        <span class="admin-product-form__caption">Статус</span>
                        <select name="best" class="admin-product-form__select <?php echo $product['style']; ?>">
                            <option value="<?php echo $product['best']; ?>"><?php echo $product['value']; ?></option>
                            <option value="1">Бестселлер</option>
                            <option value="2">Новинка!</option>
                            <option value="3">Уже в продаже</option>
                            <option value="4">Выгодно</option>
                        </select>
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Наличие</span>
                        <select name="nal" class="admin-product-form__select">
                            <option value="<?php echo $product['nal']; ?>">
                                <?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></option>
                            <option value="1">В наличии</option>
                            <option value="2">Нет</option>
                        </select>
                    </label>
                    <label class="admin-product-form__label">
                        <span class="admin-product-form__caption">Слайдер</span>
                        <select name="recom" class="admin-product-form__select">
                            <option value="<?php echo $product['recommendation']; ?>">
                                <?php if ($product['recommendation'] == 1) echo 'да'; else echo 'нет';?></option>
                            <option value="1">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </label>
                    <label class="admin-product-form__label">
                        <div class="admin-product-form__caption">Изображение товара</div>
                        <input type="hidden" name="old_picture" value="<?php  echo $product['photo'];?>" />

                        <img src="/upload/images/products/<?php echo $product['photo']; ?>" width="200" alt="" />
                        <input type="file" name="new_picture" placeholder="" value="">
                    </label>
                    <div class="">
                        <input type="submit" name="submit" value="Сохранить" class="btn btn--primary btn-reset"></div>
                </form>
            </div>
        </section>
    </main>
</div>
<?php include ROOT . '/views/layouts/footer-admin.php'; ?>