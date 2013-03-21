<script type="text/javascript">
	window.UEDITOR_HOME_URL = '<?php echo Yii::app()->baseUrl; ?>/assets_admin/tool/ueditor/';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/assets_admin/tool/ueditor/themes/default/ueditor.css" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/assets_admin/tool/ueditor/editor_config.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/assets_admin/tool/ueditor/editor_all_min.js"></script>

<div class="tab-pane " id="tab2">
	<?php
		if( $error ){
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$error</div>";
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$msg</div>";
		}
		

	?>
	<form class="form-horizontal" action="<?php echo $this->createUrl('/admin/Article/create',array('column_id'=>$column_id))?>" method='POST' enctype="multipart/form-data" >
		<fieldset>
			<legend>新建文章</legend>
			<div class="control-group">
				<label class="control-label">栏目</label>
				<?php
					foreach($catalogs as $catalog){
						$column=$catalog->column;
						$title=$column->title;
					}
					if($column_id=='news'){$title="科技新闻";}
					
						echo <<<EOD
						<label class="radio inline">
							<input type="radio"  name="Article[column_id]" value="$column_id" checked="checked" />
							<span style="width:90px;">$title</span>
						</label>
EOD;
					
					?>
			</div>

			<div class="control-group">
				<label class="control-label">标题</label>
				<div class="controls">
					<input class="span6" type="text" name='Article[title]' placeholder="输入文章标题"/>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">分类</label>
				<div class="controls">
					<?php
					foreach($catalogs as $catalog){
						$catalog_id=$catalog->catalog_id;
						echo <<<EOD
						<label class="radio inline">
							<input type="radio"  name="Article[catalog_id]" value="$catalog_id"/>
							<span style="width:90px;">$catalog[title]</span>
						</label>
EOD;
					}
					?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">发布部门</label>
				<div class="controls">
					<input class="span2" type="text" name='Article[author]' placeholder="输入发布部门"/>
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
					<div id="article_content"></div>
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
		initialContent:'请输入文章内容，测试',
		textarea:'Article[content]'
	});
	Ueditor.render('article_content');

});
</script>


