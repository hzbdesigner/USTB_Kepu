<?php
/* @var $this CatalogController */
/* @var $data Catalog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('catalog_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->catalog_id), array('view', 'id'=>$data->catalog_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('column_id')); ?>:</b>
	<?php echo CHtml::encode($data->column_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_id); ?>
	<br />


</div>