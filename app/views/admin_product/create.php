<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
	<?php include ROOT . '/views/layouts/header-admin.php';?>
	<main class="main-admin">
		<?php include ROOT . '/views/layouts/menu-admin.php';?>
		<?php if (isset($errors) && is_array($errors)): ?>
		<ul>
			<?php foreach ($errors as $error): ?>
			<li> - <?php echo $error; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		<section class="admin-product">
			<div class="container-fluid">
				<h2 class="admin__title admin__title--active subtitle">Добaвление товарa</h2>
				<div class="grid">
					<form action="#" method="post" enctype="multipart/form-data" class="admin-product-form">
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Категория</span>
							<select name="category_id" class="admin-product-form__select">
								<?php if (is_array($categoriesList)): ?>
								<?php foreach ($categoriesList as $category): ?>
								<option value="<?php echo $category['id']; ?>">
									<?php echo $category['name_category']; ?>
								</option>
								<?php endforeach; ?>
								<?php endif; ?>
							</select>
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Название товара</span>
							<input type="text" name="name" placeholder="" value="" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Стоимость</span>
							<input type="text" name="price" placeholder="" value="" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Вес</span>
							<input type="text" name="weight" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label admin-product-form__label--title">
							<span class="admin-product-form__caption">Описание</span>
							<textarea type="text" name="description" class="admin-product-form__textarea"></textarea>
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Ингредиент 1</span>
							<input type="text" name="ing1" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Ингредиент 2</span>
							<input type="text" name="ing2" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Ингредиент 3</span>
							<input type="text" name="ing3" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label admin-product-form__label--title">
							<span class="admin-product-form__caption">Слоган</span>
							<input type="text" name="slogan" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Топпинг 1</span>
							<input type="text" name="top1" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Топпинг 2</span>
							<input type="text" name="top2" class="admin-product-form__input">
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Топпинг 3</span>
							<input type="text" name="top3" class="admin-product-form__input">
						</label>


						<label class="admin-product-form__label admin-product-form__label--title">
							<span class="admin-product-form__caption">Статус</span>
							<select name="best" class="admin-product-form__select">
								<option value="1">Бестселлер</option>
								<option value="2">Новинка!</option>
								<option value="3">Выгодно</option>
								<option value="4">Уже в продаже</option>
							</select>

						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Наличие</span>
							<select name="nal" class="admin-product-form__select">
								<option value="В наличии">В наличии</option>
								<option value="Нет">Нет</option>
							</select>
						</label>
						<label class="admin-product-form__label">
							<span class="admin-product-form__caption">Слайдер</span>
							<select name="recommendation" class="admin-product-form__select">
								<option value="1">Да</option>
								<option value="0">Нет</option>
							</select>
						</label>
						<label class="admin-product-form__label">
							<div class="admin-product-form__caption">Изображение товара</div>
							<input type="file" name="new_picture" placeholder="" value="">
						</label>
						<div class="">
							<input type="submit" name="submit" value="Сохранить" class="btn btn--primary btn-reset">
						</div>
					</form>

			</div>
			</div>
		</section>
	</main>
</div>





<?php include ROOT . '/views/layouts/footer-admin.php'; ?>