<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>科普网——北京科技大学</title> 
	<meta name="description" content="Smart Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from createiveLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->baseUrl; ?>/css/parallax-slider.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic"> -->
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!--[if IE 9]>
      <link href="css/styleie9.css" rel="stylesheet">
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Navbar -->
			<div class="navbar navbar-inverse">
	    		<div class="navbar-inner">
	          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	          		</a>
					<a class="brand" href="<?php echo $this->createUrl('/site/index') ; ?>"><i class="ico-charts circle"></i>北京科技大学<span>科普网</span></a>
	          		<div class="nav-collapse collapse">
	            		<ul class="nav">
							<li class="active dropdown">
	                			<a href="<?php echo $this->createUrl('/site/index') ; ?>" class="dropdown-toggle" data-toggle="">首页</a>
	              			</li>
							<li class="dropdown">
	              				<a href="<?php echo $this->createUrl('/school/index') ; ?>" class="dropdown-toggle" data-toggle="">北京科技大学</a>
	              			</li>
							<li class="dropdown">
	                			<a href="<?php echo $this->createUrl('/strength/index') ; ?>" class="dropdown-toggle" data-toggle="">优势学科</a>
	              			</li>
							<li class="dropdown">
	                			<a href="<?php echo $this->createUrl('/life') ; ?>" class="dropdown-toggle" data-toggle="">七彩科技<b class="caret"></b></a>
	                			<ul class="dropdown-menu">
	                  				<li><a href="<?php echo $this->createUrl('/life/yejin') ; ?>">冶金铸就文明系列（红：热情）</a></li>
									<li><a href="<?php echo $this->createUrl('/life/cailiao') ; ?>">材料创造传奇系列（紫：神秘）</a></li>
									<li><a href="<?php echo $this->createUrl('/life/jidian') ; ?>">机电改变生活系列（橙：活泼）</a></li>
									<li><a href="<?php echo $this->createUrl('/life/renwu') ; ?>">科技人物谱（蓝：智慧）</a></li>
									<li><a href="<?php echo $this->createUrl('/life/jianzhu') ; ?>">建筑改变城市（黄：高贵）</a></li>
									<li><a href="<?php echo $this->createUrl('/life/shengwu') ; ?>">生物科技改善环境（绿：生命）</a></li>
									<li><a href="<?php echo $this->createUrl('/life/ziran') ; ?>">大自然的馈赠（青：坚强）</a></li>
	                			</ul>
	              			</li>									
							<li class="dropdown"><a href="<?php echo $this->createUrl('/work') ; ?>" class="dropdown-toggle" data-toggle="">科普作品<b class="caret"></b></a>
								<ul class="dropdown-menu">
	                  				<li><a href="<?php echo $this->createUrl('/work/brief') ; ?>">学生科技活动简介</a></li>
									<li><a href="<?php echo $this->createUrl('/work/zhanpin') ; ?>">科普展品类</a></li>
									<li><a href="<?php echo $this->createUrl('/work/wenyi') ; ?>">科普文艺类</a></li>
									<li><a href="<?php echo $this->createUrl('/work/dongman') ; ?>">科普动漫类</a></li>
									<li><a href="<?php echo $this->createUrl('/work/wangluo') ; ?>">科普网络及软件类</a></li>
									<li><a href="<?php echo $this->createUrl('/work/baogao') ; ?>">科普报告类</a></li>
	                			</ul>
							</li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/activity') ; ?>" class="dropdown-toggle" data-toggle="">科普活动<b class="caret"></b></a>
								<ul class="dropdown-menu">
	                  				<li><a href="<?php echo $this->createUrl('/activity/shijian') ; ?>"> 社会实践（科普下乡）</a></li>
									<li><a href="<?php echo $this->createUrl('/activity/zhiyuan') ; ?>">志愿服务</a></li>
									<li><a href="<?php echo $this->createUrl('/activity/shetuan') ; ?>">社团活动</a></li>
									<li><a href="<?php echo $this->createUrl('/activity/yaolanbei') ; ?>">历届摇篮杯作品展示</a></li>
	                			</ul>
							</li>
							<!-- <li><a href="blog.html">科普新闻</a></li> -->
	              			<li><a href="<?php echo $this->createUrl('/contact') ; ?>">联系我们</a></li>
	            		</ul>
	          		</div>
	        	</div>
	      	</div>
			<!--end: Navbar -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>“科技创造七彩生活”系列画册</h2>
				<p>关于什么是“科技创造七彩生活”系列画册，画册的一些简简单单的介绍</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="<?php echo Yii::app()->baseUrl; ?>/img/parallax-slider/twitter.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>校园科普——学生科普作品</h2>
				<p>同样是几句简单的描述，学生科普作品特点，数量多，质量高，学生好~怎么怎么</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="<?php echo Yii::app()->baseUrl; ?>/img/parallax-slider/responsive.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>校园科普——学生科普活动</h2>
				<p>社会实践（介绍+链接+作品展示）：科普下乡
        志愿服务（介绍+链接+作品展示）：科普下乡
        社团活动：天文学会某讲座
        历届摇篮杯作品展示（作品简介）</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="<?php echo Yii::app()->baseUrl; ?>/img/parallax-slider/html5.png" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>最新的一个科技新闻和领导会议</h2>
				<p>社会实践（介绍+链接+作品展示）：科普下乡
        志愿服务（介绍+链接+作品展示）：科普下乡
        社团活动：天文学会某讲座
        历届摇篮杯作品展示（作品简介）</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="<?php echo Yii::app()->baseUrl; ?>/img/parallax-slider/css3.png" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
	<?php echo $content; ?>		


    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<div id="logo-chart"></div><a class="brand" href="#">Sma<span>rt</span>.</a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="index.html">Start</a></li>

							<li><a href="about.html">About</a></li>

							<li><a href="services.html">Services</a></li>

							<li><a href="pricing.html">Pricing</a></li>
							
							<li><a href="contact.html">Contact</a></li>

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>About Us</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Photo Stream</h3>
					<div class="flickr-widget">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
						<div class="clear"></div>
					</div>
					
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
				
					<!-- start: Follow Us -->
					<h3>Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-dribbble">
											<a href="http://dribbble.com"></a>
										</div>
										<div class="social-info-back social-dribbble-hover">
											<a href="http://dribbble.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="http://flickr.com"></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="http://flickr.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
					<form id="newsletter">
						<h3>Newsletter</h3>
						<p>Please leave us your email</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="submit">
					</form>
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<div class="span12">
				<p>
					&copy; 2012, <a href="http://clabs.co">createiveLabs</a>. Designed by <a href="http://clabs.co">createiveLabs</a> in Poland <img src="img/poland2.png" alt="Poland" style="margin-top:-4px">
				</p>
			</div>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.8.2.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/isotope.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.imagesloaded.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/flexslider.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/carousel.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.cslider.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/slider.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/fancybox.js"></script>
<script defer="defer" src="<?php echo Yii::app()->baseUrl; ?>/js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>