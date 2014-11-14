<?php
/* @var $this TblNewsController */
/* @var $model TblNews */

$this->breadcrumbs=array(
	'Tbl News'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblNews', 'url'=>array('index')),
	array('label'=>'Create TblNews', 'url'=>array('create')),
	array('label'=>'Update TblNews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblNews', 'url'=>array('index')),
);
?>

<h1>View TblNews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title_ua',
		'description',
		'uri',
		'page',
		'data_create',
		'data_modif',
		'text_ua',
		'lang',
		'visible',
		'img_links',
		'title_ru',
		'text_ru',
		'title_en',
		'text_en',
	),
)); ?>
