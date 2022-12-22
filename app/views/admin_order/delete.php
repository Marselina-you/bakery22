<?php include ROOT . '/views/layouts/head.php';?>
<div class="site-container">
<?php include ROOT . '/views/layouts/header-admin.php';?>
<main class="main">
<?php include ROOT . '/views/layouts/menu-admin.php';?>

           

           


             <div class="edit__title title_padding fontSans size29px orange">Удалить заказ #<?php echo $id; ?></div>


             <div class="edit__title title_padding fontSans size29px">Вы действительно хотите удалить этот заказ?</div>

            <form method="post" class="d-flex justify-content-end edit__title title_padding col-xl-5">
                <input type="submit" name="submit" value="Удалить"  class="fontSans size29px btn btn-danger" />
            </form>

        </div>
</main>
</div>

<?php include ROOT . '/views/layouts/footer-admin.php'; ?>