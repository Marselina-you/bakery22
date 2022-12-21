<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
include ROOT.'/views/layouts/header3.php';
include ROOT.'/views/layouts/header_category.php';?>
<div class="wrap-view-product d-flex flex-column col-xl-11 col-lg-11 col-md-6 col-sm-6 col-6">
    <div
        class="d-flex view-product flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center justify-content-sm-start">
        <div class="view-product-left col-xl-6 col-lg-6 flex-column">
            <div class="d-flex view-product-left__img justify-content-center">
                <img src="/upload/images/products/<?php echo $product['photo'];?>" alt="" /></div>
            <div class="wrap-view-product-left__info d-flex justify-content-center">
                <div class="d-flex view-product-left__info title_padding align-items-start flex-column">
                    <div class="brownDark justify-content-center fw-bold fs-4">
                        <?php echo $product['price'];?><span class="rubl">₽</span></div>
                    <div
                        class="view-product-right__status justify-content-center fs-4 <?php echo $product['style'];?>">
                        <?php echo $product['value'];?></div>
                    <div class="view-product-right__name_sm"><a
                            href="/product/<?php echo $product['id'];?>"
                            class="burgundy fontSegoePrint fw-bold fs-2 p-15"><?php echo $product['name'];?></a>
                        <div class="view-product-right__status  brownGrey fs-6">
                            <?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></div>
                    </div>
                </div>
            </div>
            <div class="d-flex view-product-left__button  justify-content-center">
                <button
                    class="d-flex content-order-end__click__btn btn btn-success justify-content-center fs-5"
                    type="button">В корзину</button></div>
        </div>
        <div class="view-product-right col-xl-6 col-lg-6 flex-column">
            <div class="view-product-right__name "><a href="/product/<?php echo $product['id'] ;?>"
                    class="burgundy  fontSegoePrint fw-bold fs-2 p-15"><?php echo $product['name'];?></a>
                <div class="view-product-right__status  brownGrey fs-5">
                    <?php if ($product['nal'] == 1) echo 'в наличии'; else echo 'нет в наличии';?></div>
                <span
                    class="view-product-right-info__item brownDark  fontSegoePrint fs-5"><?php echo $product['weight'];?>
                    грамм</span>
            </div>
            <div class="view-product-right-info flex-column">
                <div class="view-product-right-info__title  burgundy fs-3 fontTahoma p-15">+
                    Описание</div>
                <div class=" col-xl-7 d-flex flex-column brownDark fontSegoePrint fs-5 line-height1 ">
                    <span class=""><?php echo $product['description'];?></span></div>
            </div>
            <div class="view-product-right-info flex-column">
                <div class="view-product-right-info__title  burgundy fs-3 fontTahoma p-15">+
                    основные ингредиенты</div>
                <div class="view-product-right-info__item brownDark fontSegoePrint fs-5"><span class=""> -
                        <?php echo $product['ing1'];?></span></div>
                <div class="view-product-right-info__item brownDark fontSegoePrint fs-5"><span> -
                        <?php echo $product['ing2'];?></span></div>
                <div class="view-product-right-info__item brownDark  fontSegoePrint fs-5"><span> -
                        <?php echo $product['ing3'];?></span></div>
            </div>
            <div
                class="view-product-right-info__slogan  brownLight fs-2 fontSegoePrint p-15">
                <?php echo $product['slogan'];?></div>
            <div class="view-product-right-info__ing">
                <div class="wrap-product-right-info__ing1 d-flex">
                    <div
                        class="view-product-right-info__ing1 view-product-right-info__ing_padding d-flex justify-content-center align-items-center  white fs-4 fontTahoma">
                        <?php echo $product['top1'];?></div>
                </div>
                <div class="wrap-product-right-info__ing d-flex justify-content-start">
                    <div
                        class="view-product-right-info__ing2 view-product-right-info__ing_padding d-flex  white justify-content-center align-items-center fs-4 fontTahoma">
                        <?php echo $product['top2'];?>
                    </div>
                </div>
                <div class="wrap-product-right-info__ing3 d-flex">
                    <div
                        class="view-product-right-info__ing3 view-product-right-info__ing_padding d-flex justify-content-center align-items-center white fs-4 fontTahoma">
                        <?php echo $product['top3'];?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end #footer -->
<?php include ROOT.'/views/layouts/footer2.php';?>