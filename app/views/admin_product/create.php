<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php'; ?>
 <div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
<h1>АДМИНКА Добавление товарав</h1>
 <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

<form action="#" method="post" enctype="multipart/form-data">
	<p>Категории</p>
	<select name="category_id">
		 <?php if (is_array($categoriesList)): ?>
			<?php foreach ($categoriesList as $category): ?>
				<option value="<?php echo $category['id']; ?>" name="">
					<?php echo $category['name']; ?>
				</option>
			<?php endforeach; ?>
			 <?php endif; ?>
	</select>
	<p>Название товара</p>
	<input type="text" name="name" placeholder="" value="">
	<p>Стоимость</p>
	<input type="text" name="price" placeholder="" value="">


	<p>Изображение товара</p>
	<input type="file" name="image" placeholder="" value="">
	<p>Вес товара</p>
	<input type="text" name="weight" placeholder="" value="">
	<p>Детальное описание</p>
	<textarea name="description"></textarea>

	<p>Ингредиент1</p>
	<input type="text" name="ing1" placeholder="" value="">
	<p>Ингредиент2</p>
	<input type="text" name="ing2" placeholder="" value="">
	<p>Ингредиент3</p>
	<input type="text" name="ing3" placeholder="" value="">
	<p>Слоган</p>
	<input type="text" name="slogan" placeholder="" value="">
	<p>Топ 1</p>
	<input type="text" name="top1" placeholder="" value="">
	<p>Топ 2</p>
	<input type="text" name="top2" placeholder="" value="">
	<p>Топ 3</p>
	<input type="text" name="top3" placeholder="" value="">


	<input type="submit" name="submit" value="Сохранить">
</form></div></div></div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>