<div class="wrap-footer-block col-lg-12">
            <div class="footer-block col-lg-12 d-flex justify-content-between">
            <div class="footer-block1">
                <div class="footer-block1_content">Alferova.studio.com</div>
            </div>
            <div class="footer-block2 d-flex align-items-center">
                <div class="icon"><img src="/template/images/face.png"></div>
                <div class="icon"><img src="/template/images/vk.png"></div>
                <div class="icon"><img src="/template/images/twit.png"></div>
                <div class="icon"><img src="/template/images/what.png"></div>
            </div>
        </div>
        </div>
        <script src="/js/jquery-3.0.0.min.js"></script>
        <script src="/js/app.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>