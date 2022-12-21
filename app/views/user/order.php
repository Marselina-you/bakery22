<?php include ROOT . '/views/layouts/header.php';
include ROOT . '/views/layouts/header2.php'; 
?>
<div class="wrap-content">
    <div class="main">
        <div class="content-empty-text col-xl-11 offset-xl-1 d-flex flex-column">
            <div class="col-xl-10  undertitle_check_padding d-flex align-items-center">
                <div class="fs-3 fontTahoma letter-space"><a href="/cabinet"
                        class="undertitle_check brownLight">Перейти в кабинет</a></div>
            </div>
            <div class="col-xl-12">
                <div
                    class="pb-0 main-enter-content__title col-xl-12  fs-3 fontTahoma letter-space undertitle__edit brownDark">
                    Мои доставки</div>
                <div class="d-flex">
                    <?php foreach ($ordersList as $order): ?><div
                        class="d-flex flex-column p-30 align-items-center">
                        <div class="fs-5 brownDark fontTahoma pb-15 letter-space">Заказ
                            <?php echo $order['id']; ?></div>
                        <div class="fs-5 brownDark fontTahoma letter-space pb-15 myGreen">
                            <?php echo $order['status']; ?></div>
                        <?php foreach ($products as $order): ?>
                        <img src="/upload/images/products/<?php echo $order['photo']; ?>" alt="" width="90" />
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-xl-12">
                <div
                    class="pb-0 main-enter-content__title col-xl-12 fs-3 fontTahoma letter-space undertitle__edit brownDark">
                    Мои заказы</div>
                <div class="d-flex">
                    <?php foreach ($ordersListOld as $order): ?>
                    <div class="wrap d-flex flex-column p-30 align-items-center">
                        <div class="fs-5 fontTahoma pb-15 opacityImg letter-space brownLight">
                            Заказ <?php echo $order['id']; ?></div>
                        <div class="fs-5 fontTahoma pb-15 letter-space opacityImg brownLight">
                            <?php echo $order['status']; ?></div>
                        <?php foreach ($productsOld as $order): ?>
                        <div class="">
                            <img src="/upload/images/products/<?php echo $order['photo']; ?>" alt="" width="90"
                                class="opacityImg" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer2.php'; ?>