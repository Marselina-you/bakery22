<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/admin_header.php';
 ?>
<div class="wrap-content">
    <div class="main">
  <div class="container-fluid col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>
<div class="edit__title title_padding fontSans size29px orange">Редактирование категорий</div>

<section>
    <div class="container">
        <div class="row">

         

           

            <a href="/admin/category/create" class="btn btn-default back"></i> Добавить категорию</a>
            
           

           

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID категории</th>
                    <th>Название категории</th>
                    
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать">редактировать</a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить">удалить</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>
</div></div></div>
<?php include ROOT . '/views/layouts/admin_footer.php'; ?>