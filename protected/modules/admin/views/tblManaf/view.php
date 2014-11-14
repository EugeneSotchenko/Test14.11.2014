<?php
/* @var $this TblManafController */
/* @var $model TblManaf */

$this->breadcrumbs=array(
	'Tbl Manafs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TblManaf', 'url'=>array('index')),
	array('label'=>'Create TblManaf', 'url'=>array('create')),
	array('label'=>'Update TblManaf', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblManaf', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblManaf', 'url'=>array('admin')),
);
?>

<h1>View TblManaf #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'uri',
		'page',
		'date_create',
		'date_modif',
		'text',
		'img_links',
		'visible',
	),
)); ?>
