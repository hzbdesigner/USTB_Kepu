

	<div class="container">
		<div class="row tabbable tabs-left">
			
				<ul class=" span2 nav nav-pills nav-stacked">
					<li class="<?php if( $this->action->id=='admin'){ echo 'active';} ?>"> <a href="<?php echo $this->createUrl('/admin/user/admin') ; ?>" >用户管理</a> </li>
					<li class="<?php if( $this->action->id=='create'){ echo 'active';} ?>"> <a href="<?php echo $this->createUrl('/admin/user/create') ; ?>"  >添加用户</a> </li> 
				</ul>
				<div class="span10">
					
				<?php echo $sub_content ;?>
				</div>
		</div>
	</div>
