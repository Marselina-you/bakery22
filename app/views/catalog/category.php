<?php 
include ROOT.'/views/layouts/header.php';
include ROOT.'/views/layouts/header2.php';
include ROOT.'/views/layouts/header3.php';
include ROOT.'/views/layouts/header_category.php';
?>
<div class="wrap-content">
    <div class="main">
<?php foreach ($categoryProducts as $product): ?>
<div class="wrap-view-product d-flex flex-column col-xl-11 col-lg-11 col-md-6 col-sm-6 col-6">
            <div class="d-flex view-product flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center justify-content-sm-start">
                <div class="view-product-left col-xl-6 col-lg-6 flex-column">
                <div class="d-flex view-product-left__img justify-content-center">
                    <img src="/upload/images/products/<?php echo $product['new_picture'];?>"  alt="" /></div>
                <div class="wrap-view-product-left__info d-flex justify-content-center"><div class="d-flex view-product-left__info title_padding align-items-start flex-column">
                 
                  <div class="brownDark justify-content-center font-weight-bold size24px"><?php echo $product['price'];?><span class="rubl">₽</span></div>
                  <div class="view-product-right__status padding_status justify-content-center orange size24px "><?php echo $product['best'];?></div>
                  <div class="view-product-right__name_sm bottom_padding"><a href="/product/<?php echo $product['id'];?>" class="burgundy  fontSegoePrint font-weight-bold size35px padding-15"><?php echo $product['name'];?></a>
                       
                        <div class="view-product-right__status  brownGrey size16px"><?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></div></div>
              </div></div>
                   <div class="d-flex view-product-left__button  justify-content-center">
                  <div class="d-flex content-order-end__click__btn btn btn-success justify-content-center size29px size20px "><a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart" data-id="<?php echo $product['id'];?>">В корзину</a></div></div>
                </div>


                <div class="view-product-right col-xl-6 col-lg-6 flex-column">
                    <div class="view-product-right__name bottom_padding"><a href="/product/<?php echo $product['id'] ;?>" class="burgundy  fontSegoePrint font-weight-bold size35px padding-15"><?php echo $product['name'];?></a>
                       
                        <div class="view-product-right__status  brownGrey size22px"><?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></div>
                        <span class="view-product-right-info__item brownDark bottom_padding fontSegoePrint size20px"><?php echo $product['weight'];?> грамм</span></div>
                <div class="view-product-right-info flex-column">
                <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma padding-15">+ Описание</div>
                <div class="bottom_padding col-xl-7 d-flex flex-column brownDark fontSegoePrint size20px line-height1 "><span class=""><?php echo $product['description'];?></span></div>
               </div>

                <div class="view-product-right-info flex-column"> 
                <div class="view-product-right-info__title bottom_padding burgundy size29px fontTahoma padding-15">+ основные ингредиенты</div><div class="view-product-right-info__item brownDark fontSegoePrint size20px"><span class=""> - <?php echo $product['ing1'];?></span></div>
                <div class="view-product-right-info__item brownDark fontSegoePrint size20px"><span> - <?php echo $product['ing2'];?></span></div>
                <div class="view-product-right-info__item brownDark bottom_padding fontSegoePrint size20px"><span> - <?php echo $product['ing3'];?></span></div>
            </div>
                <div class="view-product-right-info__slogan view-product-right-info_padding brownLight size35px fontSegoePrint padding-15"><?php echo $product['slogan'];?></div>

 
     <div class="view-product-right-info__ing">
               <div class="wrap-product-right-info__ing1 d-flex"> <div class="view-product-right-info__ing1 view-product-right-info__ing_padding d-flex justify-content-center align-items-center  white size24px fontTahoma"><?php echo $product['top1'];?></div></div>
                <div class="wrap-product-right-info__ing d-flex justify-content-start"><div class="view-product-right-info__ing2 view-product-right-info__ing_padding d-flex  white justify-content-center align-items-center size24px fontTahoma"><?php echo $product['top2'];?>
                </div></div>
                <div class="wrap-product-right-info__ing3 d-flex">
                <div class="view-product-right-info__ing3 view-product-right-info__ing_padding d-flex justify-content-center align-items-center white size24px fontTahoma"><?php echo $product['top3'];?></div></div>
            </div></div>
        </div>
        <div class="separator col-xl-12 col-lg-12 justify-content-center"><img src="/template/images/razdel1.png"></div>
        </div>

		<?php endforeach;?>
		<!-- Постраничная навигация -->
                    <?php echo $pagination->get(); ?>
</div></div>
<?php include ROOT.'/views/layouts/footer2.php';?>