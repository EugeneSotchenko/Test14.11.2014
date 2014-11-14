<?php
/* @var $this TblManafController */
/* @var $model TblManaf */

$this->breadcrumbs=array(
	'Tbl Manafs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblManaf', 'url'=>array('index')),
	array('label'=>'Create TblManaf', 'url'=>array('create')),
	array('label'=>'View TblManaf', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblManaf', 'url'=>array('admin')),
);
?>

<h1>Update TblManaf <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>