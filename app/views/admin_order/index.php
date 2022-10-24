<?php include ROOT . '/views/layouts/admin_header.php';
include ROOT . '/views/layouts/header.php'; ?>

<div class="wrap-content pt-5">
    <div class="main">
        <div class="container col-xl-12 edit">
    <?php include ROOT . '/views/layouts/admin_menu.php';?>

           
                        
           

            <div class="p-4 fontSans fs-3 orange orange">Список заказов</div>

            

            <div class="p-4">
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Смотреть">Смотреть</a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать">Редактировать</a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить">Удалить</a></td>
                    </tr>
                <?php endforeach; ?>
            </table></div>

        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/admin_footer.php'; ?>