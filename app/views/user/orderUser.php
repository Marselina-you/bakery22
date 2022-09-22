<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 

?>
<div class="wrap-content">
    <div class="main">
 <p>Ваши доставки</p>
                         <p>Выбрано товаров: <?php echo $result2['user_name']; ?>, рублей.</p><br/>
                          <?php foreach ($products as $product): ?>
                    <tr>
                        
                       
                        <td><?php echo $product['name']; ?></td>
                         <td> <img src="../upload/images/products/<?php echo $product['photo']; ?>"  alt="" /></td>
                         <?php endforeach; ?>
                        <td> <?php $productsQuantity[$product['id']]; ?> штуки</td>
                    </tr>
               



    	</div>
</div>


<?php include ROOT . '/views/layouts/footer2.php'; ?>

