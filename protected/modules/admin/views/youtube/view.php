<?php
/* @var $this YoutubeController */
/* @var $model Youtube */

$this->breadcrumbs=array(
	'Youtubes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Youtube', 'url'=>array('index')),
	array('label'=>'Create Youtube', 'url'=>array('create')),
	array('label'=>'Update Youtube', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Youtube', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Youtube', 'url'=>array('admin')),
);
?>

<h1>View Youtube #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'page',
		'uri',
		'links',
		'date_create',
		'description',
		'visible',
	),
)); ?>
