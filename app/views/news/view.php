<?php include ROOT.'/views/layouts/header.php';?>
	
	
				<div id="content">
					<div class="post">
						<div class="bardcolor fontSegoeScript size35px padding-15"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['name'].' # '.$newsItem['id'];?></a></div>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['name'];?></a> on <?php echo $newsItem['ing1'];?>
							&nbsp;&bull;&nbsp; <a href='/news/' class="permalink"> Back to HomePage</a></p>
						<div class="entry">
							<p><img src="../dest/images/<?php echo $newsItem['image'];?>"  alt="" /></p>
							<p><?php echo $newsItem['slogan'];?></p>
						</div>
					</div>
					<p><a href='/news/' class="permalink"> Back to HomePage</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
				
<!-- end #footer -->
</body>
</html>
