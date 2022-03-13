<?php 
include ROOT.'/views/layouts/header.php';
include ROOT.'/views/layouts/header_category.php';?>
<div class="nows1"><div class="lightbrowncolor size45px fontTahoma text-center font-weight-bold padding25"></div>
				
		<div class="block-content d-flex flex-column"><div class="block-left-right d-flex justify-content-center"><div class="block-left col-xl-4 flex-column">
				<div class="d-flex justify-content-center block-left__img"><img src="../images/src/pletenka.png"  alt="" /></div>
               <div class="d-flex justify-content-center"><div class="darkbrowncolor size20px fontTahoma padding-15"></div></div>
				<div class="d-flex justify-content-center"><div class="darkbrowncolor size20px fontTahoma padding-15"></div></div>
				</div>
				<div class="block-right col-xl-6 d-flex flex-column"><div class="bardcolor fontSegoeScript size35px padding-15"><a href="/product/<?php echo $product['id'] ;?>"><?php echo $product['name'];?></a></div>
				
				<div class="bardcolor size29px fontTahoma padding-15">+ Описание</div><div class="darkbrowncolor fontSegoeScript size20px"><?php echo $product['description'];?></div>
				<div class="bardcolor size29px fontTahoma padding-15">+ основные ингредиенты</div><div class=""><div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $product['ing1'];?></span></div>
				<div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $product['ing2'];?></span></div>
				<div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $product['ing3'];?></span></div></div>
				
				<div class="lightbrowncolor size35px fontSegoeScript padding-15"><?php echo $product['slogan'];?></div>
				<div class="d-flex justify-content-center align-items-center toppig_view toppig_view1 whitecolor size24px fontTahoma"><?php echo $product['top1'];?></div><div class="d-flex toppig_view toppig_view2 whitecolor size24px fontTahoma justify-content-center align-items-center">
					<?php echo $product['top2'];?>
				</div><div class="d-flex justify-content-center align-items-center toppig_view toppig_view3 whitecolor size24px fontTahoma"><?php echo $product['top3'];?></div></div>
		</div><div class="d-flex justify-content-center"><img src="../images/src/razdel1.png"></div></div>

		</div>

<?php include ROOT.'/views/layouts/footer.php';?>