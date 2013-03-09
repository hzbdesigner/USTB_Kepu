

<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>科普作品</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">

    		
	
			<!--start: Row -->
	    	<div class="row">

	    		<div class="span4">
					
					<!-- start: Sidebar -->
					<div id="sidebar">

						<!-- start: Sidebar Menu -->

							<div class="title"><h3>科普作品</h3></div>
							<ul class="links-list-alt">
								<li><a href="<?php echo $this->createUrl('/work') ;?>">学生科技活动简介</a></li>
								<li><a href="<?php echo $this->createUrl('/work/zhanpin') ;?>">科普展品类</a></li>
								<li><a href="<?php echo $this->createUrl('/work/wenyi') ;?>">科普文艺类</a></li>
								<li><a href="<?php echo $this->createUrl('/work/dongman') ;?>">科普动漫类</a></li>
								<li><a href="<?php echo $this->createUrl('/work/wangluo') ;?>"> 科普网络及软件类</a></li>
								<li><a href="<?php echo $this->createUrl('/work/baogao') ;?>">科普报告类</a></li>
							</ul>

							<div class="title"><h3>科普开放日预约</h3></div>
									<!-- start: Contact Form -->
							<div id="contact-form">

								<form method="post" action="">

									<fieldset>
										<div class="clearfix">
											<label for="name"><span>用户名:</span></label>
											<div class="input">
												<input tabindex="1" size="20" id="name" name="name" type="text" value="">
											</div>
										</div>

										<div class="clearfix">
											<label for="email"><span>密码:</span></label>
											<div class="input">
												<input tabindex="2" size="20" id="email" name="email" type="text" value="" >
											</div>
										</div>

										<div class="actions">
											<button tabindex="3" type="submit" class="btn btn-succes ">登&nbsp;录</button>
										</div>
									</fieldset>

								</form>

							</div>
							<!-- end: Contact Form -->

							<div class="title"><h3>联系我们</h3></div>
							<p style="padding-left:12px;margin-top:15px;">主管部门：北京科技大学校团委</p>
							<p style="padding-left:12px;">地址：学院路30号</p>
							
							<p style="padding-left:12px;">电话：15210567035</p>
							<p style="padding-left:12px;">邮箱：hzbdesigner@gmail.com</p>
						

					</div>
					<!-- end: Sidebar -->
					
				</div>
		
				<div class="span8">
					
					<?php echo $sub_content ;?>
			   </div>
				
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container-->

	</div>
	<!-- end: Wrapper  -->
