<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
<?php include ROOT . '/views/layouts/header-admin.php';?>
<main class="main">
<?php include ROOT . '/views/layouts/menu-admin.php';?>

<h2 class="admin-submenu__title orange">Удалить категорию #<?php echo $id; ?>?</h2>
    

           

            

           

<div class="d-flex flex-column col-xl-8 col-lg-8">          

<form method="post">
      <div class="d-flex justify-content-center">
    <input type="submit" name="submit" value="Удалить" class="btn btn--danger btn-reset"></div>
</form></div>
            

            

        </div>
    </div>
</div>


<?php include ROOT . '/views/layouts/footer-admin.php'; ?>