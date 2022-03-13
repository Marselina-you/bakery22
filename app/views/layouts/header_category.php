<div class="block-undertitle d-flex flex-column col-lg-10 offset-lg-1">
				<div class="block-undertitle-href d-flex col-lg-12 justify-content-between">
                <?php foreach ($categories as $categoryItem): ?>
			        <div class="wrap-block-undertitle-href col-lg-4"><div class="href-product block-undertitle-hrefAll block-undertitle-href1  fontSans size26px text-center">
                        <a href="/category/<?php echo $categoryItem['id'];?>" class="bardcolor">
                                            <?php echo $categoryItem['name'];?>
                                        </a></div></div>
			        <?php endforeach; ?>
			    </div>
			    <div class="block-undertitle-img d-flex col-lg-12 justify-content-center">
			        <div class="href-product block-undertitle-imgs"><a href=""><img src="../images/src/bread.gif"></a></div>
			        <div class="href-product block-undertitle-imgs"><a href="/category/2"><img src="../images/src/kexon.gif"></a></div>
			        <div class="href-product block-undertitle-imgs"><a href="/category/1"><img src="../images/src/bag.gif"></a></div>
			    </div>
			</div>