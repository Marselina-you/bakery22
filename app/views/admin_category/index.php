<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/admin_header.php';
 ?>
<div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="edit__title title_padding fontSans"><a href="/admin/category/create" class="size29px orange">Добавить категорию</a></div>


           
                  <div class="edit-cart__content d-flex row justify-content-between bottom_padding">
                    
                   
                    
               
                <?php foreach ($categoriesList as $category): ?>
                    <table  class="table_category col-lg-4">
                        <tr>
                    
                   <td class="brownDark size22px">ID категории
                      <td class="edit__title title_padding darkBlue fontSans size29px"><?php echo $category['id']; ?>
                        <tr>
                       
                       <td class="brownDark size22px">Название категории
                        <td class="edit__title title_padding darkBlue fontSans size29px"><?php echo $category['name_category']; ?>
                        <tr>
                       <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать" class="greenVivid size22px edit__title">редактировать</a>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить" class="burgundyLight size22px edit__title">удалить</a><tr>
                        </table>
                   
                <?php endforeach; ?>
            </div>
           </div>
            
        </div>
    </div>

<?php include ROOT . '/views/layouts/admin_footer.php'; ?>