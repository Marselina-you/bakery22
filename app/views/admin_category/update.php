<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Редактировать категорию</li>
                </ol>
            </div>


            <h4>Редактировать категорию "<?php echo $category['name']; ?>"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">
                       
                         <p>Sort_order</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>">
                         <p>Status</p>
                        <input type="text" name="status" placeholder="" value="<?php echo $category['status']; ?>">
                         <p>Style</p>
                        <input type="text" name="style" placeholder="" value="<?php echo $category['style']; ?>">
                         <p>Style2</p>
                        <input type="text" name="style2" placeholder="" value="<?php echo $category['style2']; ?>">



                        
                        
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>