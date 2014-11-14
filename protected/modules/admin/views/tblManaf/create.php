<?php
/* @var $this TblManafController */
/* @var $model TblManaf */

$this->breadcrumbs=array(
	'Tbl Manafs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblManaf', 'url'=>array('index')),
	array('label'=>'Manage TblManaf', 'url'=>array('admin')),
);
?>

<h1>Create TblManaf</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>