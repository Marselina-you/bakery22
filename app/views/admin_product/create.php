<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
<?php include ROOT . '/views/layouts/header-admin.php';?>

<main class="main">
    <?php include ROOT . '/views/layouts/menu-admin.php';?>
 
  <div class="container col-xl-12 edit">
  	
<div class="p-4 fontSans fs-3 orange">Добavlение товарoв</div>
 <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
<div class="px-4 pb-4 d-flex flex-column col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12 form-create">
<form action="#" method="post" enctype="multipart/form-data">
	<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
		<div class="burgundyLight fs-4 pb-2">Категория</div>
		    <select name="category_id" class="fs-4 admin_input">
		    	<?php if (is_array($categoriesList)): ?>
		    		<?php foreach ($categoriesList as $category): ?>
		    			<option value="<?php echo $category['id']; ?>">
		    				<?php echo $category['name_category']; ?>
		    					</option>
			<?php endforeach; ?>
			 <?php endif; ?>
	</select></div>
	<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
		<div class="burgundy fontSegoePrint font-weight-bold fs-4 pb-2">Название товара</div>
	<input type="text" name="name" placeholder="" value="" class="fs-4 admin_input"></div>
	<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="brownDark justify-content-center font-weight-bold fs-4 pb-2">Стоимость</div>
	<input type="text" name="price" placeholder="" value="" class="fs-4 py-1 admin_input"></div>
    <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="brownDark fontSegoePrint fs-4 pb-2">Вес товара</div>
	<input type="text" name="weight" placeholder="" value="" class="fs-4 py-1 admin_input"></div>
	<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="burgundy fs-4 fontTahoma pb-2">Oписание</div>
	<textarea name="description" class="textarea_admin fs-4 py-1"></textarea></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="burgundyLight size22px pb-2">Ингредиент1</div>
	<input type="text" name="ing1" placeholder="" value=""  class="fs-4 py-1 admin_input"></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">	
	<div class="burgundyLight size22px pb-2">Ингредиент2</div>
	<input type="text" name="ing2" placeholder="" value=""  class="fs-4 py-1 admin_input"></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">	
	<div class="burgundyLight size22px pb-2">Ингредиент3</div>
	<input type="text" name="ing3" placeholder="" value=""  class="fs-4 py-1 admin_input"></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="brownLight fs-4 fontSegoePrint pb-2">Слоган</div>
	<input type="text" name="slogan" placeholder="" value=""  class="fs-4 py-1 admin_input"></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="fs-4 fontTahoma pb-2">Топ 1</div>
	<input type="text" name="top1" placeholder="" value=""  class="fs-4 py-1 admin_input"></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="fs-4 fontTahoma pb-2">Топ 2</div>
	<input type="text" name="top2" placeholder="" value=""  class="fs-4 py-1 admin_input"></div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="fs-4 fontTahoma pb-2">Топ 3</div>
	<input type="text" name="top3" placeholder="" value=""  class="fs-4 py-1 admin_input"></div>

<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="justify-content-center fs-4 pb-2">Статус</div>
	<select name="best" class="fs-4 py-1 admin_input">
		    	
		    			<option value="1">Бестселлер</option>
		    			<option value="2">Новинка!</option>
		    			<option value="3">Выгодно</option>
		    			<option value="4">Уже в продаже</option></select>

		    		</div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="brownGrey fs-4 pb-2">Наличие</div>
	<select name="nal" class="fs-4 py-1 admin_input">
		    	
		    			<option value="В наличии">В наличии</option>
		    			<option value="Нет">Нет</option></select>

		    		</div>
 <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
    <div class="brownGrey fs-4 pb-2">Рекомендуем </br>(в слайдер)</div>
    <select name="recommendation" class="fs-4 py-1 admin_input">
                
                        <option value="1">Да</option>
                        <option value="0">Нет</option></select>

                    </div>
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
	<div class="burgundyLightfs-1 pb-2 fs-4">Изображение товара</div>
	<input type="file" name="new_picture" placeholder="" value=""></div>		    	
<div class="py-4 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-sm-center justify-content-center">
	<input type="submit" name="submit" value="Сохранить" class="btn btn-success fs-4"></div>
</form></div>
</div></main>
					</div>
<?php include ROOT . '/views/layouts/footer-admin.php'; ?>