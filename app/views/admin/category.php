<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php';
//include ROOT . '/views/layouts/header2.php'; 
 ?>
 <div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
  	<div class="d-flex">
    <div class="edit__title title_padding darkBlue fontSans size32px"><a href="" class="orange">Управление товарами</a></div>
     <div class="edit__title title_padding darkBlue fontSans size32px"><a href="">Управление категориями</a></div>
      <div class="edit__title title_padding darkBlue fontSans size32px"><a href="">Управление заказами</a></div>
</div>
<div class="edit__title title_padding fontSans size29px"><a href="" class="orange">Добавить новый товар</a></div>
<div class="d-flex col-xl-12">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="edit__title title_padding darkBlue fontSans size29px"><a href="/categorys/<?php echo $categoryItem['id'];?>" class="col-xl-6 <?php if ($categoryId == $categoryItem['id']) echo 'active'; else echo'white'; ?>"><?php echo $categoryItem['name'];?></a>
        </div>
       
                   
                   
            <?php endforeach; ?>      
                </div><div class="d-flex row">
	<?php foreach ($categoryProducts as $product): ?>
		 

 <div class="edit-cart bottom_padding d-flex col-xl-4 col-lg-6">
         <div class="edit-cart__img"><img width ="80%" src="../template/images/page.png"></div>
         <div class="edit-cart__content d-flex flex-column">
        <div class="edit-cart__title bottom_padding10 font-weight-bold size20px"><?php echo $product['name']; ?></div>
       <div class=""><div class="edit-cart__title bottom_padding10 size20px">Цена: <?php echo $product['price']; ?></div>
         <div class="edit__category bottom_padding10 size20px">Категория: пирожные</div></div>
        <div class="edit-cart__operations">
        <div class="edit-cart__operation bottom_padding10"><a href="" class="size20px darkBlue">Скрыть для пользователя</a></div>
        <div class="edit-cart__operation bottom_padding10"><a href="/admin/product/update/<?php echo $product['id']; ?>" class="size20px darkBlue">Редактировать</a></div>
        <div class="edit-cart__operation bottom_padding10"><a href="/admin/product/delete/<?php echo $product['id']; ?>" class="burgundy size20px">Удалить</a></div></div>
    </div>
        
    </div>


			 
		
	<?php endforeach; ?>
</div></div></div></div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>
