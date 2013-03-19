

<div class="tab-pane " id="tab2">
	<?php
		if( $error ){
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$error</div>";
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$msg</div>";
		}
	?>
	<form class="form-horizontal" action="<?php echo $this->createUrl('/admin/Article/create')?>" method='POST' enctype="multipart/form-data" >
		<fieldset>
			<legend>新建活动</legend>
			<div class="control-group">
				<label class="control-label">标题</label>
				<div class="controls">
					<input class="span6" type="text" name='Article[title]' placeholder="输入活动标题"/>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">类型</label>
				<div class="controls">
					<?php
					foreach($catalogs as $catalog){
						echo <<<EOD
						<label class="radio inline">
							<input type="radio" value='$catalog[id]' name="Article[cid]" />
							<span style="width:60px;">$catalog[title]</span>
						</label>
EOD;
					}
					?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">简述</label>
				<div class="controls">
					<textarea rows="3" class="span5" name='Article[des]'></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">图片</label>
				<div class="controls">
					<input type="file"  name="despic"/>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">
					正文：
				</label>
				<div class="controls">
					<div id="Article_content"></div>
					<script type="text/plain" id="Article_textarea" name='Article[content]'></script>
				</div>
			</div>
			
			<div class="control-group action">
				<button class="btn btn-primary">保存</button>
				<button class="btn ">取消</button>
			</div>


		</fieldset>
		
	</form>
</div>

<script type="text/javascript">
	
$(function(){
	var Ueditor = new baidu.editor.ui.Editor({
		UEDITOR_HOME_URL:'<?php echo Yii::app()->baseUrl; ?>/assets_admin/tool/ueditor/',
		imagePath:"http://<?php echo $_SERVER['HTTP_HOST'].Yii::app()->baseUrl; ?>/assets_admin/tool/ueditor/php/",
		initialContent:'请输入文章内容',
		textarea:'Article[acontent]'
	});
	Ueditor.render('Article_content');

});
</script>


