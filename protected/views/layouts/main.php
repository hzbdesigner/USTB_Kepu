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
							<li class=" dropdown <?php if ($this->id=='site') {echo 'active';} ?>">
	                			<a href="<?php echo $this->createUrl('/site/index') ; ?>" class="dropdown-toggle" data-toggle="">首页</a>
	              			</li>
							<li class="dropdown <?php if ($this->id=='school') {echo 'active';} ?>">
	              				<a href="<?php echo $this->createUrl('/school/index') ; ?>" class="dropdown-toggle" data-toggle="">北京科技大学</a>
	              			</li>
							<li class="dropdown <?php if ($this->id=='strength') {echo 'active';} ?>">
	                			<a href="<?php echo $this->createUrl('/strength/index') ; ?>" class="dropdown-toggle" data-toggle="">优势学科</a>
	              			</li>
							<li class="dropdown <?php if ($this->id=='life') {echo 'active';} ?>">
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
							<li class="dropdown <?php if ($this->id=='work') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/work') ; ?>" class="dropdown-toggle" data-toggle="">科普作品<b class="caret"></b></a>
								<ul class="dropdown-menu">
	                  				<li><a href="<?php echo $this->createUrl('/work/brief') ; ?>">学生科技活动简介</a></li>
									<li><a href="<?php echo $this->createUrl('/work/zhanpin') ; ?>">科普展品类</a></li>
									<li><a href="<?php echo $this->createUrl('/work/wenyi') ; ?>">科普文艺类</a></li>
									<li><a href="<?php echo $this->createUrl('/work/dongman') ; ?>">科普动漫类</a></li>
									<li><a href="<?php echo $this->createUrl('/work/wangluo') ; ?>">科普网络及软件类</a></li>
									<li><a href="<?php echo $this->createUrl('/work/baogao') ; ?>">科普报告类</a></li>
	                			</ul>
							</li>
							<li class="dropdown <?php if ($this->id=='activity') {echo 'active';} ?>">
								<a href="<?php echo $this->createUrl('/activity') ; ?>" class="dropdown-toggle" data-toggle="">科普活动<b class="caret"></b></a>
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
						<div id="logo-chart"></div><a class="brand" href="#">科普网</a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="index.html">首页</a></li>

							<li><a href="about.html">北京科技大学</a></li>

							<li><a href="services.html">优势学科</a></li>

							<li><a href="pricing.html">科技创造七彩生活</a></li>
							
							<li><a href="contact.html">科普作品</a></li>

							<li><a href="contact.html">科普活动</a></li>

							<li><a href="contact.html">联系</a></li>

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
					
					<h3><i class="icon-home icon-white"></i>关于科普网</h3>
					<p>
						北京科技大学科普网是隶属于北京科技大学校团委某某部门的网站，主要内容是呈现校园科技，展现校园科技，互动校园科技文化，增加校园科技进步，作用重大，意义非凡。给同学们的学习生活带来了极大的乐趣，推动了学生们的知识学习，实践能力的提高。总之大家多来看看哈~~
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span5 widget">
					
					<h3 class="title"><i class="icon-link icon-white"></i>友情链接</h3>
					<div class="tags">
						<a class="tag" href="#">北京科技大学首页</a>
						<a class="tag" href="#">北京科技大学科技处</a>
						<a class="tag" href="#">北京科技大学招生网</a>
						<a class="tag" href="#">北京科技大学学生会</a>
						<a class="tag" href="#">北京科技大学校团委</a>
					</div>

					
				</div>
				<!-- end: Photo Stream -->

				<div class="span4">
				
					<!-- start: Follow Us -->
					<h3><i class="icon-adress-book icon-white"></i>联系我们</h3>
					
					<!-- end: Follow Us -->
				
					
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

		<div class="container cp">
			<hr>
			<p>
				Copyrights © 2012 & All Rights Reserved by USTB.
			</p>
		
		</div>

	</div>

	<!-- end: Footer -->

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