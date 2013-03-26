
<div class="tab-pane " id="tab2">
	<?php
		if( $error ){
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$error</div>";
		}
	?>
	

	<div class="container">
		<form class="bs-docs-example form-horizontal" action='<?php echo $this->createUrl('/admin/user/create') ?>' method='post'>
			<fieldset>
				<legend>管理员添加</legend>
				<div class="control-group">
					<span>用户名</span>
					<input type="text"   placeholder="输入用户名" name='User[username]'/>
				</div>
				<div class="control-group">
					<span>邮&nbsp;&nbsp;&nbsp;箱</span>
					<input type="text"   placeholder="输入用户名" name='User[email]'/>
				</div>
				<div class="control-group">
					<span>密&nbsp;&nbsp;&nbsp;码</span>
					<input type="password"   placeholder="输入密码" name='User[password]'/>
				</div>
				<div class="control-group">
					<button class="btn" >添&nbsp;&nbsp;加</button>
				</div>

			</fieldset>
		</form>
	</div>
		
	</form>
</div>