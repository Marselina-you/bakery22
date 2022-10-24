<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php'; ?>
<div class="wrap-content pt-5">
    <div class="main">

    <div class="container col-xl-12">
     <?php include ROOT . '/views/layouts/admin_menu.php';?>  

           

            

            <div class="edit__title p-4 fontSans fs-3 orange">Удалить категорию #<?php echo $id; ?>?</div>

<div class="d-flex flex-column col-xl-8 col-lg-8">          

<form method="post">
      <div class="d-flex justify-content-center">
    <input type="submit" name="submit" value="Удалить" class="btn btn-success fs-4"></div>
</form></div>
            

            

        </div>
    </div>
</div>


<?php include ROOT . '/views/layouts/admin_footer.php'; ?>