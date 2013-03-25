<div class="container">
	<div class="row tabbable tabs-left">
		
		<ul class=" span2 nav nav-pills nav-stacked">
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
		<div class="span10">
			
			<?php echo $sub_content ;?>
		</div>
	</div>

</div>

