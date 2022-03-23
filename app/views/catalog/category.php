<?php 
include ROOT.'/views/layouts/header.php';
?>
<div class="block-undertitle d-flex flex-column col-lg-10 offset-lg-1">
				<div class="block-undertitle-href d-flex col-lg-12 justify-content-between">
                <?php foreach ($categories as $categoryItem): ?>
			        <div class="wrap-block-undertitle-href col-lg-4"><div class="href-product block-undertitle-hrefAll block-undertitle-href1  fontSans size26px text-center">
                        <a href="/category/<?php echo $categoryItem['id'];?>"  class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"><?php echo $categoryItem['name'];?></a></div></div>
			        <?php endforeach; ?>
			    </div>
			    <div class="block-undertitle-img d-flex col-lg-12 justify-content-center">
			        <div class="href-product block-undertitle-imgs"><a href=""><img src="../images/src/bread.gif"></a></div>
			        <div class="href-product block-undertitle-imgs"><a href="/category/2"><img src="../images/src/kexon.gif"></a></div>
			        <div class="href-product block-undertitle-imgs"><a href="/category/1"><img src="../images/src/bag.gif"></a></div>
			    </div>
			</div>
<?php foreach ($categoryProducts as $product): ?>
<div class="nows1"><div class="lightbrowncolor size45px fontTahoma text-center font-weight-bold padding25"></div>
				
		<div class="block-content d-flex flex-column"><div class="block-left-right d-flex justify-content-center"><div class="block-left col-xl-4 flex-column">
				<div class="d-flex justify-content-center block-left__img"><img src="../images/dest/pletenka.png"  alt="" /></div>
               <div class="d-flex justify-content-center"><div class="darkbrowncolor size20px fontTahoma padding-15"></div></div>
				<div class="d-flex justify-content-center"><div class="darkbrowncolor size20px fontTahoma padding-15"></div></div>
				</div>
				<div class="block-right col-xl-6 d-flex flex-column"><div class="bardcolor fontSegoeScript size35px padding-15"><a href="/product/<?php echo $product['id'] ;?>"><?php echo $product['name'];?></a></div>
				
				<div class="bardcolor size29px fontTahoma padding-15">+ Описание</div><div class="darkbrowncolor fontSegoeScript size20px"><?php echo $product['description'];?></div>
				<div class="darkbrowncolor fontSegoeScript size20px">Цена<?php echo $product['price'];?></div>
				<div class="bardcolor size29px fontTahoma padding-15">+ основные ингредиенты</div><div class=""><div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $product['ing1'];?></span></div>
				<div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $product['ing2'];?></span></div>
				<div class="darkbrowncolor fontSegoeScript size20px"><span> - <?php echo $product['ing3'];?></span></div></div>
				
				<div class="lightbrowncolor size35px fontSegoeScript padding-15"><?php echo $product['slogan'];?></div>
				<div class="d-flex justify-content-center align-items-center toppig_view toppig_view1 whitecolor size24px fontTahoma"><?php echo $product['top1'];?></div><div class="d-flex toppig_view toppig_view2 whitecolor size24px fontTahoma justify-content-center align-items-center">
					<?php echo $product['top2'];?>
				</div><div class="d-flex justify-content-center align-items-center toppig_view toppig_view3 whitecolor size24px fontTahoma"><?php echo $product['top3'];?></div>
				<a href="/cart/add/<?php echo $product['id']; ?>" class="btn  add-to-cart" data-id="<?php echo $product['id'];?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
				</div>
		</div><div class="d-flex justify-content-center"><img src="../images/dest/razdel1.png"></div></div>

		</div><?php endforeach;?>

<?php include ROOT.'/views/layouts/footer.php';?>