<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/admin_header.php';
 ?>
<div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="edit__title title_padding fontSans size29px orange">Удаление товара <?php echo $id; ?></div>

  <div class="d-flex flex-column col-xl-8 col-lg-8 form-create form_padding">          

<form method="post">
	  <div class="d-flex justify-content-center">
    <input type="submit" name="submit" value="Удалить" class="btn btn-success size24px"></div>
</form>
</div></div></div></div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>