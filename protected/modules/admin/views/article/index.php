	<div class="container">
		<div class="row tabbable tabs-left">
			
				<ul class=" span2 nav nav-pills nav-stacked">

					
					<li class="<?php if( $this->action->id=='admin'){ echo 'active';} ?>"> <a href="<?php echo $this->createUrl('/admin/article/admin',array('column_id'=>$column_id,'catalog_id'=>"all")) ; ?>" >文章管理</a> </li>
					<li class="<?php if( $this->action->id=='create'){ echo 'active';} ?>"> <a href="<?php echo $this->createUrl('/admin/article/create',array('column_id'=>$column_id)) ; ?>"  >添加文章</a> </li> 
				</ul>
				<div class="span10">
					
					<?php echo $sub_content ;?>
				</div>
		</div>

	</div>

