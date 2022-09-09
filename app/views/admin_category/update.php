<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php'; ?>
<div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">


          
          

            <div class="edit__title title_padding fontSans size29px orange">Редактировать категорию "<?php echo $category['name']; ?>"</div>

            

            
            <div class="d-flex flex-column col-xl-8 col-lg-8 form-create form_padding">
                    <form action="#" method="post">
                        <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
            <div class="burgundy fontSegoePrint font-weight-bold size35px padding-15">Название категории</div>
                        <input type="text" class="size24px admin_input" name="name" placeholder="" value="<?php echo $category['name']; ?>"></div>
                          <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
                <div class="burgundy fontSegoePrint font-weight-bold size35px padding-15">Sort_order</div>
                        <input type="text" name="sort_order" placeholder=""  class="size24px admin_input" name="name" value="<?php echo $category['sort_order']; ?>"></div>

                        
                       
                       <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
                        <div class="burgundy fontSegoePrint font-weight-bold size35px padding-15">Status</div>
                        <input type="text" class="size24px admin_input" name="status" placeholder="" value="<?php echo $category['status']; ?>"></div>

                          <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
                <div class="burgundy fontSegoePrint font-weight-bold size35px padding-15">Style</div>
                        <input type="text" name="style" placeholder=""  class="size24px admin_input" name="name" value="<?php echo $category['style']; ?>"></div>  
                       
                         <div class="d-flex align-items-center view-product-right-info__item justify-content-between">
                <div class="burgundy fontSegoePrint font-weight-bold size35px padding-15">Style2</div>
                        <input type="text" name="style2" placeholder=""  class="size24px admin_input" name="name" value="<?php echo $category['style2']; ?>"></div>     



                        
                        
                        
                       
                        <div class="d-flex justify-content-end">
    <input type="submit" name="submit" value="Сохранить" class="btn btn-success size24px"></div>
                    </form>
                </div>
            </div></div></div>
        
    


<?php include ROOT . '/views/layouts/admin_footer.php'; ?>