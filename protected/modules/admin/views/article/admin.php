<ul class="nav nav-tabs">


    <li class="<?php if($cid == 0){echo 'active';} ?>"><a href="<?php echo $this->createUrl('admin',array('cid'=>0)); ?>" >全部</a></li>
    <?php 
    foreach ($catalogs as $catalog) {
    	$title=$catalog->title;
    	$catalogid=$catalog->id;
    	$url=$this->createUrl('admin',array('cid'=>$catalogid));
    	if($catalogid==$cid){$active="active";}else{$active="";}
    	echo <<<EOD
    	<li class='$active'><a href='$url' >$title</a></li>
EOD;
    }
    
    ?>
</ul>
<div class="tab-content">
	<div class="tab-pane active" id="tab1">
	<?php
		echo '<p>统计：共有条<?php echo $count ; ?>记录，共<?php echo $pages ; ?>页，这是第<?php echo $current_page; ?>页。</p>';
	?>
	<table class="table table-striped table-condensed ">
		<thead>
			<tr>
				<td>id</td>
				<td>type</td>
				<td>title</td>
				<td>pic</td>
				<td>管理</td>
				
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($articles as $article) {
				$cid=$article->cid;
				$catalog=Catalog::model()->findByPk($cid);
				$aid=$article->aid;
				$url=$this->createUrl('/article/view',array('aid'=>$aid));
				$delete_url=$this->createUrl('/admin/article/delete',array('aid'=>$aid));
				$update_url=$this->createUrl('/admin/article/update',array('aid'=>$aid));
				echo <<<EOD
					<tr>
						<td>$aid</td>
						<td>$catalog[title]</td>
						<td><a href="$url">$article[title]</a></td>
						<td>$article[despic]</td>
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

