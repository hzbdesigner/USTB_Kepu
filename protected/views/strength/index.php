<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-settings ico-white"></i>优势学科</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">

    		<div class="eight columns testimonial-container">

				<!-- <h3>六大优势学科</h3> -->

				<!-- <div class="testimonials-carousel" data-autorotate="3000">
					<ul class="carousel">

						<li class="testimonial">
							<div class="testimonials">冶金学科，专业见解，专业评价。冶金学科，专业见解，专业评价。冶金学科，专业见解，专业评价。冶金学科，专业见解，专业评价。冶金学科，专业见解，专业评价。</div>
							<div class="testimonials-bg"></div>
							<div class="testimonials-author">冶金学院院长, <span>XXX教授</span></div>
						</li>

						<li class="testimonial">
							<div class="testimonials">材料学科，专业见解，专业评价。材料学科，专业见解，专业评价。材料学科，专业见解，专业评价。材料学科，专业见解，专业评价。材料学科，专业见解，专业评价。材料学科，专业见解，专业评价。</div>
							<div class="testimonials-bg"></div>
							<div class="testimonials-author">材料学院院长, <span>XXX教授</span></div>
						</li>

					</ul>

				</div> -->

			</div>
	
      		<!-- start: Row -->
      		<div class="row">
	
        		<div class="span4">
          			<div class="icons-box">
						<span class="logo" style="display:inline;"><img style="width:80px;height:80px;" src="<?php echo Yii::app()->baseUrl; ?>/img/logo_100.png" />
						<div class="title"><a href="#"><h3>材料科学</h3></a></div>
						<p>
							材料科学，这个学科是我们学校的优势学科，很NB~大家都很喜欢学，而且学得很好。冶金工程优势学科，这个学科是我们学校的优势学科，很NB~大家都很喜欢学，而且学得很好。
						</p>
						<div class="clear"></div>
					</div>
        		</div>
      		</div>
      		<?php 
      			foreach ($models as $model) {	
      				$title=$model->title;
      				$des=$model->des;
      				$img=$model->despic;
      				echo <<<EOD
		      		<div class="row">
		        		<div class="span4">
		          			<div class="icons-box">
								<span class="logo" style="display:inline;"><img style="width:80px;height:80px;" src="$img" />
								<div class="title"><a href=""><h3>$title</h3></a></div>
								<p>	$des</p>
								<div class="clear"></div>
							</div>
		        		</div>
		      		</div>
EOD;
      			}
      		?>
			<!-- end: Row -->
      	
		</div>
		<!--end: Container-->
				
	</div>
