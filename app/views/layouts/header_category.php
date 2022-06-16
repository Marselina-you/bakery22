<div class="menu-category_padding d-flex flex-column col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 align-items-center">
                <div class="menu-category-titles d-flex col-xl-12 col-lg-12 justify-content-between">
                    <?php foreach ($categories as $categoryItem): ?>
                
                   <div class="menu-category-titles col-xl-4 <?php echo $categoryItem['style2'];?>">
        <div class="menu-category-titles-item <?php echo $categoryItem['style'];?> text-center">
            <a href="/category/<?php echo $categoryItem['id'];?>" class="col-xl-6 size29px <?php if ($categoryId == $categoryItem['id']) echo 'active'; else echo'white'; ?>"><?php echo $categoryItem['name'];?></a>
        </div></div>
         
                   
                   
            <?php endforeach; ?>      
                </div>
<div class="wrap-menu-category-img col-xl-12 col-lg-12">
                <div class="menu-category-img d-flex col-xl-12 col-lg-12">
<div class="menu-category-img_phone d-flex justify-content-center col-xl-12 col-lg-12">
                <div class="menu-category-img_padding col-xl-8 col-lg-8 col-md-8 d-flex justify-content-center">
                   <div class="menu-category-img col-xl-3 col-lg-3 col-md-3 d-flex">
       
            <a href="/category/1" class="text-center size29px white"><img src="/template/images/bread.png"></a>
        </div>
         <div class="menu-category-img col-xl-3 col-lg-3 col-md-3 d-flex">
        
            <a href="/category/2" class="text-center size29px white"><img src="/template/images/cake.png"></a></a>
        </div>
         <div class="menu-category-img col-xl-3 col-lg-3 col-md-3 d-flex">
       
            <a href="/category/3" class="text-center size29px white"><img src="/template/images/loaf.png"></a>
        </div></div></div></div></div>
                   
                   
                   
                </div>