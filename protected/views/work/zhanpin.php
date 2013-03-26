
<div id="about">
	<div class="title"><h3>作品——科普展品类</h3></div>

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
					// $the_catalog_id=$model->catalog_id;
					$url=$this->createUrl('view',array('column_id'=>$column_id,'catalog_id'=>$the_catalog_id));
					echo <<<EOD
				<tr>
					<td>【<span>$author</span>】</td>
					<td><a href="#">$title</a></td>
					<td>$date</td>
					<td>浏览（<span>$read_num</span>）</td>
				</tr>
EOD;
				}
			?>		
			
			
		</tbody>
	</table>
	<div class="pagination ">
		<ul>
			<li><a href="#">&laquo;</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</div>
	
</div>	
