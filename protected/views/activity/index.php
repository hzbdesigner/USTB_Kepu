

<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>科普活动</h2>

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

							<div class="title"><h3>科普活动</h3></div>
							<ul class="links-list-alt">
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

							<div class="title"><h3>科普开放日预约</h3></div>
									<!-- start: Contact Form -->
							<div id="contact-form">

								<form method="post" action="<?php echo $this->createUrl('/admin/default/order') ; ?>" method="POST">

									<fieldset>
										<div class="clearfix">
											<label for="name"><span>用户名:</span></label>
											<div class="input">
												<input tabindex="1" size="20" id="name" name="LoginForm[email]" type="text" >
											</div>
										</div>

										<div class="clearfix">
											<label for="email"><span>密码:</span></label>
											<div class="input">
												<input tabindex="2" size="20" id="email" name="LoginForm[password]" type="password" v >
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
