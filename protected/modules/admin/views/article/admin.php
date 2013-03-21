

<ul class="nav nav-tabs">


    <li class="<?php if($catalog_id == "all"){echo 'active';} ?>"><a href="<?php echo $this->createUrl('admin',array('column_id'=>$column_id,'catalog_id'=>"all")); ?>" >全部</a></li>
    <?php 
    foreach ($catalogs as $catalog) {
    	$title=$catalog->title;
    	$catalogid=$catalog->catalog_id;
    	$url=$this->createUrl('admin',array('column_id'=>$column_id,'catalog_id'=>$catalogid));
    	if($catalogid==$catalog_id){$active="active";}else{$active="";}
    	echo <<<EOD
    	<li class='$active'><a href='$url' >$title</a></li>
EOD;
    }
    
    ?>
</ul>
<div class="tab-content">
	<div class="tab-pane active" id="tab1">
	<div >
	统计信息: <?php echo '总共 '.$count.'篇文章' ?>
	</div>
	<table class="table table-striped table-condensed ">
		<thead>
			<tr>
				<td>id</td>
				<td>type</td>
				<td>title</td>
				<td>pic</td>
				<td>date</td>
				<td>管理</td>
				
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($articles as $article) {
				$column_id=$article->column_id;
				$catalog=Catalog::model()->findByPk($column_id);
				$article_id=$article->article_id;
				$url=$this->createUrl('/article/view',array('article_id'=>$article_id));
				$delete_url=$this->createUrl('/admin/article/delete',array('column_id'=>$column_id,'article_id'=>$article_id));
				$update_url=$this->createUrl('/admin/article/update',array('column_id'=>$column_id, 'article_id'=>$article_id));
				$date=substr($article->date, 0, 10);
				echo <<<EOD
					<tr>
						<td>$article_id</td>
						<td>$catalog[title]</td>
						<td><a href="$url">$article[title]</a></td>
						<td>$article[despic]</td>
						
						<td>$date</td>
						<td>
							<a href="$delete_url">删除</a></a> 
							<span class="divider">/</span> 
							<a href="$update_url">修改</a> 
						</td>
					</tr>
EOD;
			}
			?>
			
		</tbody>
	</table>
	<!-- <div class="pagination ">
		<ul>
			<li><a href="#">&laquo;</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</div> -->
	<?php  $this->widget('CLinkPager',array(
		'pages'=>$pages,
		'firstPageLabel' => '首页',
		'lastPageLabel' => '末页',
		'nextPageLabel' => '下一页',
		'prevPageLabel' => '上一页',
		'header' => '',
		'footer' => '',
		)); 
	?>
</div>



</div>
