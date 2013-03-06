<!-- start: Map -->
	<div>

		<!-- starts: Google Maps -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<div id="googlemaps-container-top"></div>
		<div id="googlemaps" class="google-map google-map-full"></div>
		<div id="googlemaps-container-bottom"></div>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/jquery.gmap.min.js"></script>
		<script type="text/javascript">
			$('#googlemaps').gMap({
				maptype: 'ROADMAP',
				scrollwheel: false,
				zoom: 13,
				markers: [
					{
						address: 'Los Angeles, United States', // Your Adress Here
						html: '',
						popup: false,
					}

				],

			});
		</script>
		<!-- end: Google Maps -->
	</div>
	<!-- end: Map -->	
	
	<!-- start: Wrapper -->	
	<div id="wrapper">		

		<!-- start: Container -->	
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: Contact Info -->
				<div class="span3">
					<div class="title"><h3>联系我们</h3></div>
					<p>
						<b>北京科技大学科普网</b>
					</p>
					<p>
						北京科技大学校团委
					</p>
					<p>	
						学院路30号北京科技大学七斋学生活动中心
					</p>	
					<p>	
						电话：15210567035
					</p>
					<p>
						邮箱：hzbdesigner@gmail.com
					</p>
				</div>
				<!-- end: Contact Info -->		

				<!-- start: Contact Form -->
				<div class="span4">
					<div class="title"><h3>留言反馈</h3></div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="">

							<fieldset>
								<div class="clearfix">
									<label for="name"><span>姓名</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="">
									</div>
								</div>

								<div class="clearfix">
									<label for="email"><span>邮箱</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
									</div>
								</div>

								<div class="clearfix">
									<label for="message"><span>留言</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"></textarea>
									</div>
								</div>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">提交留言</button>
								</div>
							</fieldset>

						</form>

					</div>
					<!-- end: Contact Form -->

				</div>
				<!-- end: Contact Form -->

				
			
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
				
  	</div>
	<!-- end: Wrapper  -->			
