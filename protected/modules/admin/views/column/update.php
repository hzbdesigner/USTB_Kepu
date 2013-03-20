<?php
/* @var $this ColumnController */
/* @var $model Column */

$this->breadcrumbs=array(
	'Columns'=>array('index'),
	$model->title=>array('view','id'=>$model->cloumn_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Column', 'url'=>array('index')),
	array('label'=>'Create Column', 'url'=>array('create')),
	array('label'=>'View Column', 'url'=>array('view', 'id'=>$model->cloumn_id)),
	array('label'=>'Manage Column', 'url'=>array('admin')),
);
?>

<h1>Update Column <?php echo $model->cloumn_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>