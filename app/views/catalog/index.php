<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
include ROOT.'/views/layouts/header3.php';
include ROOT.'/views/layouts/header_category.php';?>

<div class="wrap-content container-fluid">
    <div class="main main_category">
        <div class="col-12 d-flex row"><?php foreach ($latestProducts as $product): ?>
<div class="d-flex flex-column col-xl-12 col-lg-12 col-md-6 col-sm-10 col-12">
            <div class="py-3 d-flex view-product flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center justify-content-sm-start">
                <div class="view-product-left col-xl-6 col-lg-6 flex-column">
                <div class="d-flex view-product-left__img justify-content-center">
                    <img src="../upload/images/products/<?php echo $product['new_picture'];?>"  alt="" /></div>
                <div class="lh-sm wrap-view-product-left__info d-flex justify-content-center"><div class="d-flex view-product-left__info pt-3 align-items-start flex-column">
                 
                  <div class="brownDark justify-content-center fw-bold fs-4"><?php echo $product['price'];?><span class="rubl">₽</span></div>
                  <div class="view-product-right__status padding_status justify-content-center fs-4 <?php echo $product['style'];?>"><?php echo $product['value'];?></div>
                  <div class="view-product-right__name_sm"><a href="/product/<?php echo $product['id'];?>" class="test-uppercase burgundy fontSegoePrint fw-bold fs-2"><?php echo $product['name'];?></a>
                    <div class="view-product-right__status  brownGrey fs-6"><?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></div></div>
              </div></div>
                   <div class="py-2 d-flex view-product-left__button  justify-content-center">
                  <div class="d-flex content-order-end__click__btn btn btn-success justify-content-center fs-5"><a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart" data-id="<?php echo $product['id'];?>">В корзину</a></div></div>
                </div>


                <div class="view-product-right-info__content col-6 flex-column">
                    <div class="lh-base ">
                         <div class=""><a href="/product/view/<?php echo $product['id'] ;?>" class="text-uppercase burgundy  fontSegoePrint fw-bold fs-2"><?php echo $product['name'];?></a></div>
                       <span class="brownDark fontSegoePrint fs-5"><?php echo $product['weight'];?> грамм</span>
                <div class="flex-column">
                <div class="burgundy fs-3 fontTahoma">+ Описание</div>
                <div class="col-xl-7 d-flex flex-column brownDark fontSegoePrint fs-5 lh-base"><span class=""><?php echo $product['description'];?></span></div>
               </div>
               <div class="flex-column"> 
                <div class="burgundy fs-3 fontTahoma">+ основные ингредиенты</div><div class="brownDark fontSegoePrint fs-5"><span class=""> - <?php echo $product['ing1'];?></span></div>
                <div class="brownDark fontSegoePrint fs-5"><span> - <?php echo $product['ing2'];?></span></div>
                <div class="brownDark fontSegoePrint fs-5"><span> - <?php echo $product['ing3'];?></span></div>
            </div>
                <div class="view-product-right-info__slogan brownLight fs-3 fontSegoePrint"><?php echo $product['slogan'];?></div>
                    </div>
                    <div class="view-product-right-info__ing">
               <div class="wrap-product-right-info__ing1 d-flex"> <div class="view-product-right-info__ing1 view-product-right-info__ing_padding d-flex justify-content-center align-items-center text-light fs-4 fontTahoma"><?php echo $product['top1'];?></div></div>
                <div class="wrap-product-right-info__ing d-flex justify-content-start"><div class="view-product-right-info__ing2 view-product-right-info__ing_padding d-flex text-light justify-content-center align-items-center fs-4 fontTahoma"><?php echo $product['top2'];?>
                </div></div>
                <div class="wrap-product-right-info__ing3 d-flex">
                <div class="view-product-right-info__ing3 view-product-right-info__ing_padding d-flex justify-content-center align-items-center text-light fs-4 fontTahoma"><?php echo $product['top3'];?></div></div>
            </div></div>
        </div>
       
        </div>
<?php endforeach;?> 
</div>
</div></div>
	  
<?php include ROOT.'/views/layouts/footer.php';?>