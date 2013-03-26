	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-lightbulb ico-white"></i>科技创造七彩生活</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
		
		<!-- start: Container -->	
		<div class="container">

			<div id="filters">
				<ul class="option-set" >
					<li><a href="<?php echo $this->createUrl('index',array('column_id'=>$column_id,'catalog_id'=>'all')) ; ?>" class="<?php if($catalog_id=='all'){echo "selected";} ?>">全部</a></li>
					<?php 

						foreach ($catalogs as $catalog) {
							$title=$catalog->title;
							$the_catalog_id=$catalog->catalog_id;
							if($the_catalog_id==$catalog_id){$selected="selected";}else{$selected=" ";}
							$url=$this->createUrl('index',array('column_id'=>$column_id,'catalog_id'=>$the_catalog_id));
							echo <<<EOD
							<li><a href="$url"  class="$selected">$title</a></li>
EOD;
						}
					?>
				</ul>
			</div>

		</div>
		<!-- end: Container  -->
				
		<!--start: Container -->
    	<div class="container">
	
			<!-- start: Portfolio -->
			<div id="portfolio-wrapper" class="row">
				
			<?php 

				foreach ($models as $model) {
					$title=$model->title;
					$img=$model->despic;
					$des=$model->des;
					$date=substr($model->date, 0, 10);
					$author=$model->author;
					$read_num=$model->read_num;
					// $the_catalog_id=$model->catalog_id;
					//$url=$this->createUrl('view',array('column_id'=>$column_id,'catalog_id'=>$the_catalog_id));
					echo <<<EOD
				<div class="span3 portfolio-item">
					<div class="picture"><a href="#" title="Title"><img src="$img"></div></a>
						<div class="item-description alt">
							<h5><a href="project.html">$title</a></h5>
							<p>$des</p>
						</div>
						<div class="post-meta"><span><i class="mini-ico-calendar"></i>$date</span> <span><i class="mini-ico-user"></i> <a href="#">$author</a></span> <span><i class="mini-ico-comment"></i><a href="#">$read_num</a></span></div>
					</div>	
				</div>
EOD;
				}
			?>		

			</div>
			<!-- end: Portfolio -->
      	
		</div>
		<!--end: Container-->
				
	</div>
	<!-- end: Wrapper  -->	