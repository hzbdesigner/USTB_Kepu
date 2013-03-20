<?php
/* @var $this ColumnController */
/* @var $data Column */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cloumn_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cloumn_id), array('view', 'id'=>$data->cloumn_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />


</div>