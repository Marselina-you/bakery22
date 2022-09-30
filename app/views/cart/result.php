<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
//include ROOT . '/views/layouts/header3.php';?>
<div class="wrap-content">
    <div class="main">


    <div class="content-empty">
        <div class="content-empty-text col-xl-11 offset-xl-1">
            <div class="col-xl-10">
                <div class="col-xl-4 title size35px brownDark fontTahoma letter-space">Корзина </div></div>
            <div class="col-xl-10  undertitle_check_padding d-flex align-items-center">
                <div class="size29px fontTahoma letter-space"><a href="/catalog" class="undertitle_check brownLight">Перейти в каталог</a></div>
            <div class="d-flex col-xl-8">
                    <?php foreach ($categories as $categoryItem): ?>
                <div class="check_padding "><a href="/category/<?php echo $categoryItem['id'];?>" class="darkBlue fontSans size29px"><?php echo $categoryItem['name_category'];?></a>
                </div>
            <?php endforeach; ?>
            </div> 
            </div>
           
        </div>
         
     
    </div>        
                  
                        
                    
              
          

            <div class="col-sm-9 padding-right">
             
                  


                    

                        <p>Заказ создан.</p>
                      
                          
                             
                   <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php //echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                          <td><?php //echo $order['products']; ?></td>
                       
                       
                      
                    </tr>
                <?php endforeach; ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php //echo $product['id']; ?></td>
                         <td> <img src="../upload/images/products/<?php echo $product['photo']; ?>"  alt="" /></td>
                        <td>Вы заказали <?php echo $product['name']; ?></td>
                        <td>На сумму <?php echo $product['price']; ?> рублей</td>
                        <td><?php echo $productsQuantity[$product['id']]; ?> штук</td>
                    </tr>
                <?php endforeach; ?>

                  
                       

                </div></div></div>

          
       
    


<?php include ROOT . '/views/layouts/footer2.php'; ?>