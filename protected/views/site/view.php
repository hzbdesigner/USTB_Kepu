	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>科技新闻</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>

<div class="span9 news-detail">
	<div id="about">

		<div class="title" style="text-align:center;"><h3 style="margin:0 auto;padding: 0px 25px;">作品标题标题标题</h3></div>

		<div class="sub-title">
			<?php 
				$author=$news->author;
				$date=substr($news->date, 0, 10);
				echo <<<EOD
				<span><i class="mini-ico-user"></i>$author</span>
				<span><i class="mini-ico-time"></i>$date</span>
EOD;
			?>
		</div>
		<div class="content">
			<?php echo $news->content; ?>
		</div>
		
	</div>
</div>	
