<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php'; ?>
 <div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
  	<?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="edit__title title_padding fontSans size29px orange">Добавление товарав</div>
 <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
<div class="d-flex flex-column col-xl-6 col-lg-6">
<form action="#" method="post" enctype="multipart/form-data">
	<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
		<div class="burgundyLight size22px">Категория</div>
		    <select name="category_id" class="size24px admin_input">
		    	<?php if (is_array($categoriesList)): ?>
		    		<?php foreach ($categoriesList as $category): ?>
		    			<option value="<?php echo $category['id']; ?>" name="">
		    				<?php echo $category['name']; ?>
		    					
		    				</option>
			<?php endforeach; ?>
			 <?php endif; ?>
	</select></div>
	<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
		<div class="burgundy fontSegoePrint font-weight-bold size24px">Название товара</div>
	<input type="text" name="name" placeholder="" value="" class="size24px admin_input"></div>
	<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="brownDark justify-content-center font-weight-bold size24px">Стоимость</div>
	<input type="text" name="price" placeholder="" value="" class="size24px admin_input"></div>

<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="">Изображение товара</div>
	<input type="file" name="image" placeholder="" value="" class="size24px admin_input"></div>
	<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="view-product-right-info__item brownDark bottom_padding fontSegoePrint size20px">Вес товара</div>
	<input type="text" name="weight" placeholder="" value="" class="size24px admin_input"></div>
	<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="bottom_padding10 d-flex flex-column brownDark fontSegoePrint size20px line-height1">Oписание</div>
	<textarea name="description"></textarea></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="burgundyLight size22px">Ингредиент1</div>
	<input type="text" name="ing1" placeholder="" value=""  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">	
	<div class="burgundyLight size22px">Ингредиент2</div>
	<input type="text" name="ing2" placeholder="" value=""  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">	
	<div class="burgundyLight size22px">Ингредиент3</div>
	<input type="text" name="ing3" placeholder="" value=""  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="brownLight size20px fontSegoePrint">Слоган</div>
	<input type="text" name="slogan" placeholder="" value=""  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="burgundyLight edit-cart__title size20px"  class="size24px admin_input">Топ 1</div>
	<input type="text" name="top1" placeholder="" value=""  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="burgundyLight edit-cart__title size20px">Топ 2</div>
	<input type="text" name="top2" placeholder="" value=""  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="burgundyLight edit-cart__title size20px">Топ 3</div>
	<input type="text" name="top3" placeholder="" value=""  class="size24px admin_input"></div>
<div class="d-flex align-items-center view-product-right-info__item justify-content-between">
	<div class="burgundyLight edit-cart__title size20px">Статус</div>
	<select name="category_id" class="size24px admin_input">
		    	
		    			<option value="" name="В наличии">В наличии</option>
		    			<option value="" name="Нет">Нет</option></select>

		    		</div>
		    	

	<input type="submit" name="submit" value="Сохранить">
</form></div>
</div></div></div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>