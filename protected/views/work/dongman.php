
<div id="about">
	<div class="title"><h3>作品——科普动漫类</h3></div>

	<table class="table table-striped lists">
		<thead>
			<tr>
				<td>部门</td>
				<td>作品标题</td>
				<td>日期</td>
				<td>热度</td>
				
			</tr>
		</thead>
		<tbody>
			<?php 

				foreach ($models as $model) {
					$title=$model->title;
					$date=substr($model->date, 0, 10);
					$author=$model->author;
					$read_num=$model->read_num;

					$article_id=$model->article_id;
					$the_column_id=$model->column_id;
					$the_catalog_id=$model->catalog_id;

					$url=$this->createUrl('view',array('article_id'=>$article_id,'column_id'=>$the_column_id,'catalog_id'=>$the_catalog_id));
					echo <<<EOD
				<tr>
					<td>【<span>$author</span>】</td>
					<td><a href="$url">$title</a></td>
					<td>$date</td>
					<td>浏览（<span>$read_num</span>）</td>
				</tr>
EOD;
				}
			?>		
			
			
		</tbody>
	</table>
<!-- 	<div class="pagination ">
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
