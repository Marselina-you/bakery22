<?php include ROOT.'/views/layouts/header.php';
include ROOT.'/views/layouts/header_catalog.php';?>
	
				<div id="content">
					<?php foreach ($newsList as $newsItem):?>
					<div class="nows1"><div class="lightbrowncolor size45px fontTahoma text-center font-weight-bold padding25"></div>
				
		<div class="block-content d-flex flex-column"><div class="block-left-right d-flex justify-content-center"><div class="block-left col-xl-4 flex-column">
				<div class="d-flex justify-content-center block-left__img"><img src="../images/dest/<?php echo $newsItem['image'];?>"  alt="" /></div>
               <div class="d-flex justify-content-center"><div class="darkbrowncolor size20px fontTahoma padding-15"></div></div>
				<div class="d-flex justify-content-center"><div class="darkbrowncolor size20px fontTahoma padding-15"></div></div>
				</div>
				<div class="block-right col-xl-6 d-flex flex-column"><div class="bardcolor fontSegoeScript size35px padding-15"><a href="/product/<?php echo $newsItem['id'] ;?>"><?php echo $newsItem['name'];?></a></div>
				
				<div class="bardcolor size29px fontTahoma padding-15">+ Описание</div><div class="darkbrowncolor fontSegoeScript size20px"><?php echo $newsItem['description'];?></div>
				<div class="darkbrowncolor fontSegoeScript size20px">Цена<?php echo $newsItem['price'];?></div>
				<div class="bardcolor size29px fontTahoma padding-15">+ основные ингредиенты</div><div class=""><div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $newsItem['ing1'];?></span></div>
				<div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $newsItem['ing2'];?></span></div>
				<div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $newsItem['ing3'];?></span></div></div>
				
				<div class="lightbrowncolor size35px fontSegoeScript padding-15"><?php echo $newsItem['slogan'];?></div>
				<div class="d-flex justify-content-center align-items-center toppig_view toppig_view1 whitecolor size24px fontTahoma"><?php echo $newsItem['top1'];?></div><div class="d-flex toppig_view toppig_view2 whitecolor size24px fontTahoma justify-content-center align-items-center">
					<?php echo $newsItem['top2'];?>
				</div><div class="d-flex justify-content-center align-items-center toppig_view toppig_view3 whitecolor size24px fontTahoma"><?php echo $newsItem['top3'];?></div>
				</div>
		</div><div class="d-flex justify-content-center"><img src="../images/dest/razdel1.png"></div></div>

		</div>
				<?php endforeach;?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				