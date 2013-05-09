	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>科技生活画册</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>

<div class="span9 news-detail">
	<div id="about">
	<?php
		$catalog=Catalog::model()->findByPk($catalog_id);
		$ca_title=$catalog->title;
	?>
	<div class="title" style="text-align:center;"><h3 style="margin:0 auto;padding: 0px 25px;"><?php echo $ca_title; ?></h3></div>
				
		<!-- start: Flexslider -->
		<div class="slider school">
		
			<div id="flex1" class="flexslider">
				<ul class="slides">

					<?php 
						foreach ($models as $model) {
							$title=$model->title;
							$despic=$model->despic;
							$des=$model->des;
							echo <<<EOD
							<li>
								<img src="$despic" alt="" />
								<div class="slide-caption n hidden-phone">
									<h3>$title</h3>
									<p>	$des</p>
								</div>
							</li>

EOD;
						}
					?>	
					<li>
						<img src="<?php echo Yii::app()->baseUrl; ?>/img/slider/slider1.jpg" alt="" />
						<div class="slide-caption n hidden-phone">
							<h3>图片标题，校园风光好美丽啊~</h3>
							<p>
								图片描述：事件地点，历史啊，文化啊~描述图片和内容更图片描述：事件地点，历史啊，文化啊~描述图片和内容更图片描述：事件地点，历史啊，文化啊~描述图片和内容更
							</p>
						</div>
					</li>

					<li>
						<img src="<?php echo Yii::app()->baseUrl; ?>/img/slider/slider2.jpg" alt="" />
						<div class="slide-caption hidden-phone">
							<h3>图片标题，校园风光好美丽啊~</h3>
							<p>
								图片描述：事件地点，历史啊，文化啊~描述图片和内容更图片描述：事件地点，历史啊，文化啊~描述图片和内容更图片描述：事件地点，历史啊，文化啊~描述图片和内容更
							</p>
						</div>
					</li>

					<li>
						<img src="<?php echo Yii::app()->baseUrl; ?>/img/slider/slider3.jpg" alt="" />
					</li>

				</ul>
			</div>
		
		</div>
		<!-- end: Flexslider -->


		
	</div>
</div>	


			
