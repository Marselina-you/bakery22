<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/admin_header.php';
 ?>
<div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>

        <div class="edit__title title_padding fontSans size29px orange">Добавление новой категории</div> 

           

           

            

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-6">
                <div class="login-form">
                    <form action="#" method="post">

                      
                        


                <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
        <div class="burgundyLight size22px">Название</div>
        <input type="text" name="name" placeholder="" value="" class="size24px admin_input">
            </div>        

                       

                       <div class="d-flex justify-content-end">
    <input type="submit" name="submit" value="Сохранить" class="btn btn-success size24px"></div>
                    </form>
                </div>
            </div>


        </div>
    </div></div>


<?php include ROOT . '/views/layouts/admin_footer.php'; ?>