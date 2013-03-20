<?php
/* @var $this ColumnController */
/* @var $model Column */

$this->breadcrumbs=array(
	'Columns'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Column', 'url'=>array('index')),
	array('label'=>'Create Column', 'url'=>array('create')),
	array('label'=>'Update Column', 'url'=>array('update', 'id'=>$model->cloumn_id)),
	array('label'=>'Delete Column', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cloumn_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Column', 'url'=>array('admin')),
);
?>

<h1>View Column #<?php echo $model->cloumn_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cloumn_id',
		'title',
	),
)); ?>
