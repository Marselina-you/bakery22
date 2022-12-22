<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
<?php include ROOT . '/views/layouts/header-admin.php';?>
<main class="main">
<?php include ROOT . '/views/layouts/menu-admin.php';?>
 
<div class="edit__title p-4 fontSans fs-3 orange">Удаление товара <?php echo $id; ?></div>

  <div class="d-flex flex-column col-xl-8 col-lg-8">          

<form method="post">
	  <div class="d-flex justify-content-center">
    <input type="submit" name="submit" value="Удалить" class="btn btn-success fs-4"></div>
</form>
</div></div></div></div>
<?php include ROOT . '/views/layouts/footer-admin.php'; ?>