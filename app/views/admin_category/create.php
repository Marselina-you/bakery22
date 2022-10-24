<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/admin_header.php';
 ?>
<div class="wrap-content pt-5">
    <div class="main">
  <div class="container col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>

        <div class="p-4 fontSans fs-3 orange">Добавление новой категории</div> 

           

           

            

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
<div class="p-4 d-flex col-xl-12 flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
                    <form action="#" method="post" class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center py-1 justify-content-between">
            <div class="burgundy fontSegoePrint font-weight-bold fs-4 pb-2">Наименование</div>
                        <input type="text" class="fs-4 p-1 admin_input" name="name" placeholder="" value=""></div>
                          <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
                <div class="burgundy fontSegoePrint justify-content-center font-weight-bold fs-4 pb-2">Sort_order</div>
                        <input type="text" name="sort_order" placeholder=""  class="fs-4 p-1 admin_input" name="name" value=""></div>

                        
                       
                       <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
                        <div class="burgundy fontSegoePrint font-weight-bold fs-4 pb-2">Status</div>
                        <input type="text" class="fs-4 p-1 admin_input" name="status" placeholder="" value=""></div>

                          <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
                <div class="burgundy fontSegoePrint font-weight-bold fs-4 pb-2">Style</div>
                        <input type="text" name="style" placeholder=""  class="fs-4 p-1 admin_input" name="name" value=""></div>  
                       
                         <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  align-items-center py-1 justify-content-between">
                <div class="burgundy fontSegoePrint font-weight-bold fs-4 pb-2">Style2</div>
                        <input type="text" name="style2" placeholder=""  class="fs-4 p-1 admin_input" name="name" value=""></div>     



                        
                        
                        
                       
                        <div class="py-4 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-sm-center justify-content-center">
    <input type="submit" name="submit" value="Сохранить" class="btn btn-success fs-4"></div>
                    </form>
                </div>
            


        </div>
    </div></div>


<?php include ROOT . '/views/layouts/admin_footer.php'; ?>