

<ul class="nav nav-tabs" style="<?php if($catalog_id=='all'){echo 'display:none;';} ?>">

	<li class="<?php if( $this->action->id=='admin'){ echo 'active';} ?>"> <a href="<?php echo $this->createUrl('/admin/article/admin',array('column_id'=>$column_id,'catalog_id'=>$catalog_id)) ; ?>" >文章管理</a> </li>
	<li class="<?php if( $this->action->id=='create'){ echo 'active';} ?>"> <a href="<?php echo $this->createUrl('/admin/article/create',array('column_id'=>$column_id,'catalog_id'=>$catalog_id)) ; ?>"  >添加文章</a> </li>

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
