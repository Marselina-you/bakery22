<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/admin_header.php';
 ?>
<div class="wrap-content pt-5">
    <div class="main">
  <div class="container col-xl-12">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="edit__title py-4 fontSans fs-3"><a href="/admin/category/create" class="p-4 fontSans fs-3 orange">Добавить категорию</a></div>


           
                  <div class="d-flex row justify-content-between px-4">
                    
                   
                    
               
                <?php foreach ($categoriesList as $category): ?>
                    <table  class="table_category col-lg-4">
                        <tr>
                    
                   <td class="brownDark fs-4">ID категории
                      <td class="py-4 darkBlue fontSans fs-4"><?php echo $category['id']; ?>
                        <tr>
                       
                       <td class="brownDark fs-4">Название категории
                        <td class="py-4 darkBlue fontSans fs-4"><?php echo $category['name_category']; ?>
                        <tr>
                       <td class="py-4"><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать" class="greenVivid  fs-4">редактировать</a>
                        <td class="py-4"><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить" class="burgundyLight fs-4 ">удалить</a><tr>
                        </table>
                   
                <?php endforeach; ?>
            </div>
           </div>
            
        </div>
    </div>

<?php include ROOT . '/views/layouts/admin_footer.php'; ?>