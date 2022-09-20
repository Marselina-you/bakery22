<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php'; ?>

<div class="wrap-content">
    <div class="main">
        <div class="container-fluid col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>

           

           


             <div class="edit__title title_padding fontSans size29px orange">Удалить заказ #<?php echo $id; ?></div>


             <div class="edit__title title_padding fontSans size29px">Вы действительно хотите удалить этот заказ?</div>

            <form method="post" class="d-flex justify-content-end edit__title title_padding col-xl-5">
                <input type="submit" name="submit" value="Удалить"  class="fontSans size29px btn btn-danger" />
            </form>

        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/admin_footer.php'; ?>