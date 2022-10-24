<div class="footer_admin header_admin col-12 d-flex">
    
        <div class ="header-row header-row_padding-sm col-12 d-flex justify-content-between">
           
                   
                     <div class="content-form__data text__item"><a href="" class="brownDark fontSans fs-5">Alferova.Studio.com</a>
                </div>
                 <div class="content-form__data text__item"><a href="" class="brownDark fontSans fs-5">8-979-787-55-55</a></div>
                 
            
        </div>
   
                    
                    
              
    </div>
     <script src="/js/jquery-3.0.0.min.js"></script>
      <script src="/js/app.min.js"></script>
     <script src="/js/action_slider.js"></script>
      <script src="/js/menu.js"></script>
      <script src="/js/slider.js"></script>
      <script type="text/javascript">
  
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