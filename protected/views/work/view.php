	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>科普作品</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>

<div class="span9 news-detail">
	<div id="about">
		<ul class="breadcrumb">
		<?php 
			$catalog=Catalog::model()->findByPk($catalog_id);
			$ctitle=$catalog->title;
			$curl=$this->createUrl('index',array('column_id'=>$column_id,'catalog_id'=>$catalog_id));
			$column=Column::model()->findByPk($column_id);
			$cotitle=$column->title;
			$courl=$this->createUrl('index',array('column_id'=>$column_id,'catalog_id'=>'brief'));

			echo <<<EOD

			 <li><a href="#">首页</a> <span class="divider">/</span></li>
			 <li><a href="$courl">$cotitle</a> <span class="divider">/</span></li>
			 <li><a href="$curl">$ctitle</a> <span class="divider">/</span></li>
			 <li class="active">作品内容</li>
EOD;

		?>
		</ul>
		<div class="title" style="text-align:center;"><h3 style="margin:0 auto;padding: 0px 25px;">作品标题标题标题</h3></div>

		<div class="sub-title">
			<?php 
				$author=$model->author;
				$date=substr($model->date, 0, 10);
				$read_num=$model->read_num;
				echo <<<EOD
				<span><i class="mini-ico-user"></i>$author</span>
				<span><i class="mini-ico-time"></i>$date</span>
				<span><i class="mini-ico-eye-open"></i>$read_num</span>
EOD;
			?>
		</div>
		<div class="content">
			<?php echo $model->content; ?>
		</div>
		
	</div>
</div>	
